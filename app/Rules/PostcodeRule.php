<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PostcodeRule implements Rule
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
    public function passes($attribute, $value)
    {
        if ($value) {
            return preg_match('/^(([0-9]{3}-[0-9]{4}))$/', $value);
        } else {
            return true;
        }
    }
    public function message()
    {
        return trans('validation.postcode');
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
}
