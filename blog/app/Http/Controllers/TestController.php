<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $myVariable = 'Running from Controller.';
        return view('subviews.myTest', compact('myVariable'));
    }
}
