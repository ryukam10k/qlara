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
}
