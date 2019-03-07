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
        $customer->delete_flag = false;
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customer');
    }
}
