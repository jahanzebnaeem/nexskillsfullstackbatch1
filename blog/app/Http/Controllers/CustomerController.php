<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = \App\Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        \App\Customer::create($data);

        return redirect('/customers');
    }

    public function show($customerId)
    {
        $customer = \App\Customer::findOrFail($customerId);
        return view('customer.show', compact('customer'));
        // dd($customer);
    }
}
