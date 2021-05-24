<?php

namespace App\Rules;
use App\Models\Package;
use Illuminate\Contracts\Validation\Rule;
use Auth;

class CheckPackage implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $package = Package::find($value);
        return $package->point <= Auth::user()->balance;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Insufficient pv or package does not exist.';
    }
}
