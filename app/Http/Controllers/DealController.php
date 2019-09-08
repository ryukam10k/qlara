<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;
use App\DealCategory;
use Illuminate\Support\Facades\Auth;

class DealController extends Controller
{
    public function index(Request $request)
    {
        $deals = Deal::findAll();
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
        //dd($request);
        $this->validate($request, Deal::$rules);
        $deal = new Deal;
        $form = $request->all();

        unset($form['_token']);
        unset($form['file']);
        $deal->fill($form);

        $file_name = $request->file('file')->getClientOriginalName();

        // もっと良い方法がある気がする
        $deal->upload_filename = $file_name;
        $deal->delivery_date = date('Y-m-d', strtotime($form['delivery_date']));
        $deal->customer_id = Auth::user()->customer_id;
        $deal->request_user_id = Auth::user()->id;
        $deal->save();

        // ファイル保存
        $request->file('file')->storeAs($deal->id, $file_name);

        return redirect('/deal');
    }

    public function retouchRequest(Request $request)
    {
        return view('deal.retouchRequest');
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

    public function download(Request $request){
        // レスポンス版
        $headers = ['Content-Type' => 'image/jpeg'];
        $deal = Deal::find($request->id);
        $fileName = $deal->upload_filename;
        return response()->download(\Storage::path($deal->id . '/' . $fileName), $fileName, $headers);
    }

}
