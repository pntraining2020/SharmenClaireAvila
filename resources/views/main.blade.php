@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class='card'>
    <div class='container content'>
        <select>
            <option value="1">John Doe</option>
            <option value="2">Jane Peters</option>
        </select>
        <div class='text-center'>
            <p id="time"></p>
        </div>
        <div class='d-inline'>
            <form action="{{route('find')}}">
                <input type="hidden" name='employee_id' value='0' id='employee_id'>
                <button type='button' class='btn btn-primary' id='btnClockin'> Clock In</button>
                <p id='time_in'></p>
            </form>
        </div>
    </div>
    <div class='card'>
        <h3>Break</h3>
        <div class='container break'>
            <button type='submit' class='btn btn-primary'>Start</button>
        </div>
        <div class='container'>
            <button type='submit' class='btn btn-danger'>End</button>
        </div>
    </div>
    <div class='container'>
        <button type='submit' class='btn btn-danger'>Clock Out</button>
    </div>
    <div class='container total'>
        <h5>Total Time Worked:</h5>
        <h5>Hours Left Before Timeout:</h5>
        <h5>Total Breaks Used:</h5>
    </div>

</div>

<script>
$(document).ready(function() {
    $("#btnClockin").click(function() {
        var date = new Date();
        var string = date.toLocaleTimeString([], {
            timeStyle: 'short'
        });
        $('#time_in').text(string)
        $("#btnClockin").attr("disabled", true);
    });


    $('select').on('change', function() {
       $('employee_id').val(this.value)
    });

});
</script>
@endsection('content')