<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = \App\Country::all();
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        \App\Country::create($data);

        return redirect('/countries');
    }
}
