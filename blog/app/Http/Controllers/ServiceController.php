<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Model - singular
        // Service

        // Table - plular
        // services

        $services = [
            'Service 1',
            'Service 2'
        ];

        $nServices = \App\Service::all();

        // dd($nServices);

        return view('service.index', compact('nServices'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:5'
        ]);

        $service = new \App\Service();

        $service->name = request('name');
        $service->save();

        return redirect()->back();
        // dd(request('name'));
    }
}
