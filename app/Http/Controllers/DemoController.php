<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($namevalue){
        return $namevalue;
    }

    function fullname($fastname, $lastname){
        return "First Name:".$fastname .
        "<br> Last Name:".$lastname;
    }
}
