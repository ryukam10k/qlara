
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
                    <a href="javascript:history.back()">戻る</a>
                    <table class="table table-sm">
                        <tr>
                            <th>依頼No</th>
                            <td>{{$form->id}}</td>
                        </tr>
                        <tr>
                            <th>依頼内容</th>
                            <td>{{$form->dealCategory->name}}</td>
                        </tr>
                        <tr>
                            <th>アップロードファイル</th>
                            <td><a href="/deal/download?id={{$form->id}}">{{$form->upload_filename}}</a></td>
                        </tr>
                        <tr>
                            <th>納品希望日</th>
                            <td>{{$form->delivery_date}}</td>
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
                    <table class="table table-sm">
                        <tr>
                            <th>納品物</th>
                            <td><a href={{$form->deliverable_uri}} target="_blank"><i class="fas fa-download"></i> 納品物のダウンロードページを開く（Dropbox <i class="fab fa-dropbox"></i> が開きます）</a></td>
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
                            <td>{{$form->delivery_date}}</td>
                        </tr>
                        <tr>
                            <th>完了日時</th>
                            <td>{{$form->end_date}}</td>
                        </tr>
                    </table>
                    <a href="javascript:history.back()">戻る</a>
                    <hr>
                    <div class="btnArea">
                        <div class="btnArea__left">
                            <a href="/deal/del?id={{$form->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> 依頼取消</a>
                            <a href="/deal/edit?id={{$form->id}}" class="btn btn-primary"><i class="far fa-edit"></i> 依頼編集</a>
                        </div>
                        <div class="btnArea__right">
                            <a href="" class="btn btn-primary">確認依頼</a>
                            <a href="" class="btn btn-primary">納品</a>
                            <a href="" class="btn btn-primary">完了</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
