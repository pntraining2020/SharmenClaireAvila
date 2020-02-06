<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Timesheets;

class EmployeeController extends Controller
{
    public function find(Request $request)
    {
        // $test = Employees::find($request->employee_id)->with('timesheets')->get();
        // return $test;
        $request->validate([
            'employee_id' => 'required',
            'time_in'=> 'required',
        ]);
        
    }
}
