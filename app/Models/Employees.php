<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'name',
    ];

   public  function timesheets()
   {
    return $this->hasMany('App\Models\Timesheets', 'employee_id');
   }
}
