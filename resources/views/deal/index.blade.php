@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Deals</div>
                <div class="card-body">
                    <a href="/deal/add">New Deal</a> |
                    <a href="/jobRequest">仕事を依頼する</a>
                    <table class="table">
                        <tr>
                            <th>受付日</th>
                            <th>取引区分</th>
                            <th>タグ</th>
                            <th>取引先</th>
                            <th>件数</th>
                            <th>メモ有</th>
                            <th>完了日時</th>
                            <th>売上月</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->reception_date}}</td>
                            <td></td>
                            <td>{{$item->tag}}</td>
                            <td></td>
                            <td>{{$item->number}}</td>
                            <td></td>
                            <td>{{$item->end_date}}</td>
                            <td>{{$item->keijo_tsuki}}</td>
                            <td>
                                <a href="/deal/show?id={{$item->id}}">show</a> | 
                                <a href="/deal/edit?id={{$item->id}}">edit</a> | 
                                <a href="/deal/del?id={{$item->id}}">del</a>
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