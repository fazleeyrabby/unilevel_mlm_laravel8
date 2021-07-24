<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use Auth;
class BalanceChecker implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($sender = null, $bonus= null)
    {
        $this->sender = $sender;
        $this->bonus = $bonus;
    }

    protected $sender;
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $balance = 'balance';
        $user = User::where('username',$this->sender)->first();
        if(!$user)
            return false;
        if($this->bonus){
            $balance = $this->bonus;
        }
        return User::where('username',$this->sender)->first()->$balance >=$value ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Insufficient balance!';
    }
}
