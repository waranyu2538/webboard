<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    function show1(){
      return '<h3>Yo im a function in controller</h3>';
    }
}
