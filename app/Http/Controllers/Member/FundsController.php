<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\BalanceChecker;
use App\Rules\CheckReceiverRole;
use App\Rules\CheckUser;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Bonus;
use Hash;
use Auth;
use DB;

class FundsController extends Controller
{
    public function index(){
        return view('admin.funds.addOrDeduct');
    }

    public function transfer(){
        return view('member.funds.transfer');
    }
    
    public function postTransfer(Request $request){
       
        $request->validate([
            'receiver' => ['bail','required','max:25', new CheckUser(), new CheckReceiverRole(['member'])],
            'amount' => ['bail','required','numeric', new BalanceChecker(Auth::user()->username)],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
            
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect()->back()->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }

        $receiver = $this->getUserBy(['username' => $request->receiver]);

        $receiver_balance = $receiver->balance + $request->amount;
        $sender_balance = Auth::user()->balance - $request->amount;

        $transaction = new Transaction;
        $transaction->receiver_id = $receiver->id;
        $transaction->sender_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->receiver_balance = $receiver_balance;
        $transaction->sender_balance = $sender_balance;
        $transaction->type = 'send-money';
        $transaction->model =  '';

        $transaction = $transaction->save();

        DB::table('users')->where('id', Auth::user()->id)->decrement('balance', $request->amount);
        DB::table('users')->where('id', $receiver->id)->increment('balance', $request->amount);

        return redirect('member/transaction')->with(['status' => 'success', 'message' => 'Fund transfer success!']);
    }


    public function withdraw(){
        $dealers = User::select('username')->where('role','dealer')->orWhere('role','sub-dealer')->get();
        $username = [];
        foreach($dealers as $dealer){
            $username[] = $dealer->username;
        }
        $dealers = json_encode($username);
        return view('member.funds.withdraw', compact('dealers'));
    }

    public function postWithdraw(Request $request){
        $request->validate([
            'receiver' => ['bail','required','max:25', new CheckUser(), new CheckReceiverRole(['dealer','sub-dealer'])],
            'amount' => ['bail','required','numeric', new BalanceChecker(Auth::user()->username, 'bonus')],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
            
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect()->back()->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }
        $receiver = $this->getUserBy(['username' => $request->receiver]);

        $transaction = new Transaction;
        $transaction->receiver_id = $receiver->id;
        $transaction->sender_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->sender_balance = Auth::user()->bonus - $request->amount;
        $transaction->receiver_balance = $receiver->balance + $request->amount;
        $transaction->type = 'withdraw';
        $transaction->model =  '';

        $transaction = $transaction->save();

        DB::table('users')->where('id', Auth::user()->id)->decrement('bonus', $request->amount);
        DB::table('users')->where('id', $receiver->id)->increment('balance', $request->amount);
        return redirect('member/transaction')->with(['status' => 'success', 'message' => 'Fund transfer success!']);
    }

    public function transactionReport(Request $request){
        $transactions = Transaction::with('sender','receiver')->where('sender_id', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->get();
        return view('member.funds.report',compact('transactions'));
    }

    public function incomeReport(Request $request){
        $transactions = Bonus::with('user')->where('user_id', Auth::user()->id)->get();
        return view('member.funds.income',compact('transactions'));
    }

    public function getUserBy($array = []){
        return User::where($array)->first();
    }
}
