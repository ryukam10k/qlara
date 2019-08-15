@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">仕事依頼</div>
                <div class="card-body">
                    <a href="/retouchRequest"><i class="fas fa-plus"></i> 写真加工依頼</a>
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>取引区分</th>
                                <th>タグ</th>
                                <th>取引先</th>
                                <th>件数</th>
                                <th>依頼日</th>
                                <th>ステータス</th>
                                <th>ファイル</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td><a href="/deal/show?id={{$item->id}}">{{$item->id}}</a></td>
                                <td>{{$item->dealCategory->deal_category_name}}</td>
                                <td>{{$item->tag}}</td>
                                <td></td>
                                <td>{{$item->number}}</td>
                                <td>{{$item->created_at->format('Y/m/d')}}</td>
                                <td>{{$item->status()}}</td>
                                <td><a href="/deal/download?id={{$item->id}}">download</a></td>
                                <td>
                                    <a href="/deal/edit?id={{$item->id}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <a href="/deal/add">New Deal</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection