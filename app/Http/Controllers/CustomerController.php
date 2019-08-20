<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $customers = ['customers' => $customers];
        return view('customers.index', $customers);
    }

    public function create()
    {
        return view('customers.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $customer = new Customer;
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customers');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', ['customer' => $customer]);
    }

    public function edit(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, Customer::$rules);
        $customer = Customer::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }
}
