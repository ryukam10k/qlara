<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;
use App\DealCategory;

class DealController extends Controller
{
    public function index(Request $request)
    {
        $deals = Deal::all();
        $param = ['items' => $deals];
        return view('deal.index', $param);
    }

    public function add(Request $request)
    {
        $dealCategories = DealCategory::findAll();
        return view('deal.add', ['dealCategories' => $dealCategories]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Deal::$rules);
        $deal = new Deal;
        $form = $request->all();
        unset($form['_token']);
        unset($form['file']);
        $deal->fill($form)->save();

        $request->file('file')->store($deal->id);

        return redirect('/deal');
    }

    public function jobRequest(Request $request)
    {
        $dealCategories = DealCategory::findAll();
        return view('deal.jobRequest', ['dealCategories' => $dealCategories]);
    }

    public function edit(Request $request)
    {
        $dealCategories = DealCategory::findAll();
        $deal = Deal::find($request->id);
        return view('deal.edit', ['form' => $deal], ['dealCategories' => $dealCategories]);
    }

    public function update(Request $request)
    {
        //dd($request);
        $this->validate($request, Deal::$rules);
        $deal = Deal::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $deal->fill($form)->save();
        return redirect('/deal');
    }

    public function show(Request $request)
    {
        $deal = Deal::find($request->id);
        return view('deal.show', ['form' => $deal]);
    }
}
