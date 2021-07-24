<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\BalanceChecker;
use App\Rules\CheckUser;
use App\Models\Transaction;
use App\Models\Bonus;
use App\Models\User;
use Auth;
use DB;
use Hash;

class FundsController extends Controller
{
    public function index(){
        return view('admin.funds.addOrDeduct');
    }

    public function addOrDeduct(Request $request){
        $request->validate([
            'username' => ['bail','required','max:25',new CheckUser()],
            'status' => 'required',
            'amount' => ['bail','required','numeric',new BalanceChecker(Auth::user()->username)],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect('admin/funds/transfer-report')->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }

        $user = $this->getUserBy(['username' => $request->username]);

        if($request->status == '1'){
            $receiver_balance = $user->balance + $request->amount;
            $sender_balance = Auth::user()->balance - $request->amount;

            DB::table('users')->where('username', $request->username)->increment('balance', $request->amount);
            DB::table('users')->where('username', Auth::user()->username)->decrement('balance', $request->amount);
        }else{
            $receiver_balance = $user->balance - $request->amount;
            $sender_balance = Auth::user()->balance + $request->amount;
            DB::table('users')->where('username', $request->username)->decrement('balance', $request->amount);
            DB::table('users')->where('username', Auth::user()->username)->increment('balance', $request->amount);
        }

        $transaction = new Transaction;
        $transaction->receiver_id = $user->id;
        $transaction->sender_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->receiver_balance = $receiver_balance;
        $transaction->sender_balance = $sender_balance;

        $transaction->type = 'direct transfer';
        $transaction->model =  '';

        $transaction = $transaction->save();

        return redirect('admin/funds/transfer-report')->with(['status' => 'success', 'message' => 'Fund transfer success!']);
    }

    public function postTransfer(Request $request){
       
        $request->validate([
            'sender' => ['bail','required','max:25',new CheckUser()],
            'receiver' => ['bail','required','max:25',new CheckUser()],
            'amount' => ['bail','required','numeric',new BalanceChecker($request->sender)],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
            
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect('admin/funds/transfer-report')->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }

        $sender = $this->getUserBy(['username' => $request->sender]);
        $receiver = $this->getUserBy(['username' => $request->receiver]);

        $transaction = new Transaction;
        $transaction->receiver_id = $receiver->id;
        $transaction->sender_id = $sender->id;
        $transaction->amount = $request->amount;
        $transaction->type = 'send-money';
        $transaction->model =  '';

        $transaction = $transaction->save();

        DB::table('users')->where('username', $request->sender)->decrement('balance', $request->amount);
        DB::table('users')->where('username', $request->receiver)->increment('balance', $request->amount);

    }


    public function withdraw(){
        return view('admin.funds.withdraw');
    }

    public function transfer(){
        return view('admin.funds.transfer');
    }

    public function report(Request $request){
        $transactions = Transaction::with('sender','receiver')->get();
        return view('admin.funds.report',compact('transactions'));
    }

    public function incomeReport(Request $request){
        $transactions = Bonus::with('user')->orderBy('bonus_id','desc')->get();
        return view('admin.funds.income_report',compact('transactions'));
    }

    public function getUserBy($array = []){
        return User::where($array)->first();
    }

}
