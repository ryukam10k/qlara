@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-list-alt"></i> 依頼区分</div>
                <div class="card-body">
                    <a href="/dealCategories/create"><i class="fas fa-plus"></i> 依頼区分を追加する</a>
                    <table class="table">
                        <tr>
                            <th>名称</th>
                            <th>標準価格</th>
                            <th>表示順</th>
                            <th></th>
                        </tr>
                        @foreach ($dealCategories as $dealCategory)
                        <tr>
                            <td><a href="{{ url('dealCategories/'.$dealCategory->id) }}">{{$dealCategory->name}}</a></td>
                            <td>{{$dealCategory->basic_price}}</td>
                            <td>{{$dealCategory->sort_no}}</td>
                            <td>
                                <a href="{{ url('dealCategories/'.$dealCategory->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
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