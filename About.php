<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    function whatIsUserName($uname){
      return view('about', ['uname' => $uname]);
    }
}
