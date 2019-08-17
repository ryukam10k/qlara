<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $items = Customer::all();
        $param = ['items' => $items];
        return view('customer.index', $param);
    }

    public function add(Request $request)
    {
        return view('customer.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $customer = new Customer;
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customer');
    }

    public function edit(Request $request) {
        $customer = Customer::find($request->id);
        return view('customer.edit', ['form' => $customer]);
    }

    public function update(Request $request) {
        $this->validate($request, Customer::$rules);
        $customer = Customer::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customer');
    }

    public function delete(Request $request)
    {
        $customer = Customer::find($request->id);
        return view('customer.del', ['form' => $customer]);
    }

    public function remove(Request $request)
    {
        Customer::find($request->id)->delete();
        return redirect('/customer');
    }
}
