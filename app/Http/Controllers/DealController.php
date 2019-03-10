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

    public function add(Request $request)
    {
        return view('deal.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Deal::$rules);
        $deal = new Deal;
        $form = $request->all();
        unset($form['_token']);
        $deal->fill($form)->save();
        return redirect('/deal');
    }

    public function edit(Request $request)
    {
        $deal = Deal::find($request->id);
        return view('deal.edit', ['form' => $deal]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Deal::$rules);
        $deal = Deal::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $deal->fill($form)->save();
        return redirect('/deal');
    }
}
