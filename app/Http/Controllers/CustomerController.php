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
}
