<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\BalanceChecker;
use App\Rules\CheckUser;
use App\Models\Bonus;
use App\Rules\CheckReceiverRole;
use App\Models\Transaction;
use App\Models\User;
use Auth;
use Hash;
use DB;

class FundsController extends Controller
{

    public function postTransfer(Request $request){
       
        $request->validate([
            'receiver' => ['bail','required','max:25', new CheckUser(), new CheckReceiverRole(['member'])],
            'amount' => ['bail','required','numeric', new BalanceChecker(Auth::user()->username, 'balance')],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
        
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect('dealer/funds/transfer-report')->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }

        $receiver = $this->getUserBy(['username' => $request->receiver]);

        $transaction = new Transaction;
        $transaction->receiver_id = $receiver->id;
        $transaction->sender_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->sender_balance = Auth::user()->bonus - $request->amount;
        $transaction->receiver_balance = $receiver->balance + $request->amount;
        $transaction->type = 'transfer';
        $transaction->model =  '';

        $transaction = $transaction->save();

        DB::table('users')->where('id', Auth::user()->id)->decrement('balance', $request->amount);
        DB::table('users')->where('id', $receiver->id)->increment('balance', $request->amount);
        return redirect('dealer/funds/transfer-report')->with(['status' => 'success', 'message' => 'Fund transfer success!']);
    }


    public function withdraw(){
        return view('dealer.funds.withdraw');
    }

    public function postWithdraw(Request $request){

        $request->validate([
            'receiver' => ['bail','required','max:25',new CheckUser(), new CheckReceiverRole(['admin'])],
            'amount' => ['bail','required','numeric',new BalanceChecker(Auth::user()->username)],
            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);
        
        if(Hash::make($request->transaction_password) !== Auth::user()->transaction_password){
            return redirect('dealer/funds/transfer-report')->with(['status' => 'error', 'message' => 'Transaction password does not matches!']);
        }

        $sender = $this->getUserBy(['id' => Auth::user()->id]);
        $receiver = $this->getUserBy(['username' => $request->receiver]);

        $transaction = new Transaction;
        $transaction->receiver_id = $receiver->id;
        $transaction->receiver_balance = $receiver->balance + $request->amount;
        $transaction->sender_balance = $sender->balance - $request->amount;
        $transaction->sender_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->type = 'withdraw';
        $transaction->model =  '';

        $transaction = $transaction->save();

        DB::table('users')->where('id', Auth::user()->id)->decrement('balance', $request->amount);
        DB::table('users')->where('username', $request->receiver)->increment('balance', $request->amount);

        return redirect('dealer/funds/transfer-report')->with(['status' => 'success', 'message' => 'Fund transfer success!']);
    }

    public function transfer(){
        return view('dealer.funds.transfer');
    }

    public function report(Request $request){
        $transactions = Transaction::with('sender','receiver')->where('sender_id', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->orderBy('id','desc')->get();
        return view('dealer.funds.report',compact('transactions'));
    }

    public function incomeReport(Request $request){
        $transactions = Bonus::with('user')->where('user_id', Auth::user()->id)->orderBy('bonus_id','desc')->get();
        return view('dealer.funds.income_report',compact('transactions'));
    }

    public function getUserBy($array = []){
        return User::where($array)->first();
    }

}
