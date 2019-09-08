
@extends('layouts.app')

@section('content')
<style>
    th {
        width: 200px;
        background-color: rgba(0, 0, 0, 0.03);
        border: 1px solid #dee2e6;
    }
    td {
        border: 1px solid #dee2e6;
    }

    .btnArea {
        display: flex;
    }
    .btnArea__left {
        flex: 1 1 50%;
    }
    .btnArea__right {
        flex: 1 1 50%;
        text-align: right;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="/deal/"><i class="fas fa-tasks"></i> 仕事依頼</a> ／ 詳細
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <th>依頼No</th>
                            <td>{{$form->id}}</td>
                        </tr>
                        <tr>
                            <th>アップロードファイル</th>
                            <td><a href="/deal/download?id={{$form->id}}">download</a></td>
                        </tr>
                        <tr>
                            <th>納品希望日</th>
                            <td>{{$form->delivery_date}}</td>
                        </tr>
                        <tr>
                            <th>依頼内容</th>
                            <td>{{$form->dealCategory->name}}</td>
                        </tr>
                        <tr>
                            <th>希望記入欄</th>
                            <td>{{$form->memo}}</td>
                        </tr>
                        <tr>
                            <th>写真枚数</th>
                            <td>{{$form->number}}</td>
                        </tr>
                        <tr>
                            <th>金額</th>
                            <td>{{$form->price}}</td>
                        </tr>
                    </table>
                    <table class="table table-light table-sm">
                        <tr>
                            <th>依頼日時</th>
                            <td>{{$form->created_at}}</td>
                        </tr>
                        <tr>
                            <th>受付日時<small>（※作業開始日時）</small></th>
                            <td>{{$form->reception_date}}</td>
                        </tr>
                        <tr>
                            <th>納品日時</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>完了日時</th>
                            <td>{{$form->end_date}}</td>
                        </tr>
                    </table>
                    <hr>
                    <div class="btnArea">
                        <div class="btnArea__left">
                            <a href="/deal/del?id={{$form->id}}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> 依頼取消</a>
                        </div>
                        <div class="btnArea__right">
                            <a href="" class="btn btn-primary btn-sm">依頼受付</a>
                            <a href="" class="btn btn-primary btn-sm">確認依頼</a>
                            <a href="" class="btn btn-primary btn-sm">納品</a>
                            <a href="" class="btn btn-primary btn-sm">完了</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
