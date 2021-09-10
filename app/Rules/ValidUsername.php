<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidUsername implements Rule
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
        if (true === is_string($value)){ 
            if(substr($value, 0, 1) === '+'){
                $str = substr($value, 1);
            }else{
                $str = $value;
            }

            if(!is_numeric($str)){
                if(filter_var($value, FILTER_VALIDATE_EMAIL)){
                   return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please enter a valid email address or phone number.';
    }
}
