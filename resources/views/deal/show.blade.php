
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="/deal/"><i class="fas fa-tasks"></i> 仕事依頼</a> ／ 詳細
                    <a href="/deal/del?id={{$form->id}}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <td>{{$form->id}}</td>
                        </tr>
                        <tr>
                            <th>依頼内容</th>
                            <td>{{$form->dealCategory->deal_category_name}}</td>
                        </tr>
                        <tr>
                            <th>タグ</th>
                            <td>{{$form->tag}}</td>
                        </tr>
                        <tr>
                            <th>件数</th>
                            <td>{{$form->number}}</td>
                        </tr>
                        <tr>
                            <th>見積金額</th>
                            <td>{{$form->estimate()}}</td>
                        </tr>
                        <tr>
                            <th>受注金額</th>
                            <td>{{$form->price}}</td>
                        </tr>
                        <tr>
                            <th>メモ</th>
                            <td>{{$form->memo}}</td>
                        </tr>
                        <tr>
                            <th>受付日</th>
                            <td>{{$form->reception_date}}</td>
                        </tr>
                        <tr>
                            <th>完了日</th>
                            <td>{{$form->reception_date}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection