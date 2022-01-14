<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Config;

use App\Models\Appointment;

class AppointmentValidHour implements Rule
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
            $datetime = explode(' ', $value);
            if (count($datetime) != 2) {
                return false;
            }
            return in_array($datetime[1], Config::get('hours.valid_hours'));        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The selected hour is not valid 9AM - 6PM. Format: Y-m-d H:i:s';
    }
}
