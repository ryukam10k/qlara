<?php

namespace App\Http\Controllers;

use App\DealCategory;
use Illuminate\Http\Request;

class DealCategoryController extends Controller
{
    public function index()
    {
        $dealCategories = DealCategory::all();
        $prams = ['dealCategories' => $dealCategories];
        return view('dealCategories.index', $prams);
    }

    public function create()
    {
        return view('dealCategories.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, DealCategory::$rules);
        $dealCategory = new DealCategory;
        $form = $request->all();
        unset($form['_token']);
        $dealCategory->fill($form)->save();
        return redirect('/dealCategories');
    }

    public function show(DealCategory $dealCategory)
    {
        return view('dealCategories.show', ['dealCategory' => $dealCategory]);
    }

    public function edit(DealCategory $dealCategory)
    {
        $dealCateogry = DealCategory::find($dealCategory->id);
        return view('dealCategories.edit', ['dealCategory' => $dealCategory]);
    }

    public function update(Request $request, DealCategory $dealCategory)
    {
        $this->validate($request, DealCategory::$rules);
        $dealCateogry = DealCategory::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $dealCateogry->fill($form)->save();
        return redirect('/dealCategories');
    }

    public function destroy(DealCategory $dealCategory)
    {
        $dealCategory->delete();
        return redirect('/dealCategories');
    }
}
