<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timesheets extends Model
{
    protected $fillable = [
        'employee_id',
        'time_in',
        'time_out',
        'break_start',
        'break_end',
        'total_hours_worked',
        'total_breaks_used'
    ];

    public  function employee()
    {
        return $this->belongsTo('App\Models\Employees');
    }
}
