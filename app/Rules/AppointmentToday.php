<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AppointmentToday implements Rule
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
        $aux = explode(" ", $value);
        if (date($aux[0]) == date('Y-m-d')) {
            $now = date('Y-m-d H:i:s');
            if (date($value) <= $now) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Appointment has to be today.';
    }
}
