<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Rules
use App\Rules\AppointmentValidHour;
use App\Rules\AppointmentOverlap;
use App\Rules\AppointmentNotWeekend;

class Appointment extends Model
{
    use HasFactory;
    
    public static function rules() {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'start' => ['required', 'date', 'after:today', new AppointmentValidHour(), new AppointmentNotWeekend(), new AppointmentOverlap()],
        ];
    }

    protected $fillable = ['name' ,'email', 'start', 'end'];
}
