<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $someVal = "I am from Controller";
        return view('quiz', compact('someVal'));
    }
}
