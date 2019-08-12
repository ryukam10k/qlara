@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">仕事依頼</div>
                <div class="card-body">
                    <a href="/deal/add">New Deal</a> |
                    <a href="/jobRequest">仕事を依頼する</a>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>取引区分</th>
                            <th>タグ</th>
                            <th>取引先</th>
                            <th>件数</th>
                            <th>依頼日時</th>
                            <th>受付日時</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="/deal/show?id={{$item->id}}">{{$item->id}}</a></td>
                            <td>{{$item->dealCategory->deal_category_name}}</td>
                            <td>{{$item->tag}}</td>
                            <td></td>
                            <td>{{$item->number}}</td>
                            <td>{{$item->created_at->format('Y/m/d h:m')}}</td>
                            <td>{{$item->reception_date()}}</td>
                            <td>
                                <a href="/deal/edit?id={{$item->id}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
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