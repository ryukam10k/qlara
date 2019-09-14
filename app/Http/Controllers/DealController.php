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
        $deal->due_date = date('Y-m-d', strtotime($form['due_date']));
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
        $this->validate($request, Deal::$edit_rules);
        $deal = Deal::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        unset($form['file']);
        $deal->fill($form);

        if ($form['due_date'] != null) {
            $deal->due_date = date('Y-m-d', strtotime($form['due_date']));
        } else {
            $deal->due_date = null;
        }

        if ($form['reception_date'] != null) {
            $deal->reception_date = date('Y-m-d H:i:s', strtotime($form['reception_date']));
        } else {
            $deal->reception_date = null;
        }

        if ($form['delivery_date'] != null) {
            $deal->delivery_date = date('Y-m-d H:i:s', strtotime($form['delivery_date']));
        } else {
            $deal->delivery_date = null;
        }

        if ($form['end_date'] != null) {
            $deal->end_date = date('Y-m-d H:i:s', strtotime($form['end_date']));
        } else {
            $deal->end_date = null;
        }

        // ファイル保存
        if ($request->file('file') != null) {
            $file_name = $request->file('file')->getClientOriginalName();
            $deal->upload_filename = $file_name;
            $request->file('file')->storeAs($deal->id, $file_name);
        }

        $deal->save();

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

        // 受付日時更新
        if ($deal->reception_date == null) {
            $deal->reception_date = date("Y-m-d H:i:s");
            $deal->save();
        }

        return response()->download(\Storage::path($deal->id . '/' . $fileName), $fileName, $headers);
    }

}
