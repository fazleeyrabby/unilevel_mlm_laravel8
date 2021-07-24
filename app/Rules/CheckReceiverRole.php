<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use Auth;

class CheckReceiverRole implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($roles = [])
    {
        $this->roles = $roles;
    }

    protected $roles;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $users = User::query();
        foreach ($this->roles as $role) {
            $users->orWhere('role', '=', $role);
            $users->where('username',$value);
        }
       
    return $users->first();
        //return User::where('username',$value)->first()->role == $this->role ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This user is not allowed to receive money.';
    }
}
