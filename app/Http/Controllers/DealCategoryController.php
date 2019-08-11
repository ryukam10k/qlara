<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealCategory;

class DealCategoryController extends Controller
{
    public function index(Request $request)
    {
        $items = DealCategory::all();
        $param = ['items' => $items];
        return view('dealcategory.index', $param);
    }

    public function add(Request $request)
    {
        return view('dealcategory.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, DealCategory::$rules);
        $dealCategory = new DealCategory;
        $form = $request->all();
        unset($form['_token']);
        $dealCategory->fill($form)->save();
        return redirect('/dealcategory');
    }

    public function edit(Request $request)
    {
        $dealCategory = DealCategory::find($request->id);
        return view('dealcategory.edit', ['form' => $dealCategory]);
    }

    public function update(Request $request)
    {
        $this->validate($request, DealCategory::$rules);
        $dealCategory = DealCategory::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $dealCategory->fill($form)->save();
        return redirect('/dealcategory');
    }

    public function delete(Request $request)
    {
        $word = DealCategory::find($request->id);
        return view('dealcategory.del', ['form' => $word]);
    }

    public function remove(Request $request)
    {
        DealCategory::find($request->id)->delete();
        return redirect('/dealcategory');
    }
}
