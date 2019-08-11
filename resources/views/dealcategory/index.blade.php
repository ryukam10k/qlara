@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">依頼カテゴリー</div>
                <div class="card-body">
                    <a href="/dealcategory/add">新規登録</a>
                    <table class="table">
                        <tr>
                            <th>依頼カテゴリー</th>
                            <th>標準価格</th>
                            <th>表示順</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="/dealcategory/edit?id={{$item->id}}">{{$item->deal_category_name}}</a></td>
                            <td>{{$item->basic_price}}</td>
                            <td>{{$item->sort_no}}</td>
                            <td>
                                <a href="/dealcategory/del?id={{$item->id}}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection