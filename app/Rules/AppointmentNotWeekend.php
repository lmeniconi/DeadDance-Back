<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AppointmentNotWeekend implements Rule
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
        $weekDay = date('w', strtotime($value));
        return ($weekDay != 0 && $weekDay != 6);;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Appointment cannot be on weekend.';
    }
}
