<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;

class DealController extends Controller
{
    public function index(Request $request)
    {
        $items = Deal::all();
        $param = ['items' => $items];
        return view('deal.index', $param);
    }
}
