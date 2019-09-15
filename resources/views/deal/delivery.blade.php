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
                <div class="card-header"><a href="/deal/"><i class="fas fa-tasks"></i> 仕事依頼</a> ／ 納品</div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/deal/delivery" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <div>
                            <a href="https://www.dropbox.com" target="_blank">Dropbox <i class="fab fa-dropbox"></i> を開く</a>
                        </div>
                        <table class="table table-sm">
                            <tr>
                                <th>納品物</th>
                                <td><input type="text" class="form-control" name="deliverable_uri" value="{{$form->deliverable_uri}}"></td>
                            </tr>
                        </table>

                        <a href="javascript:history.back()">戻る</a>
                        <hr>
                        <div><input type="submit" class="btn btn-primary" value="保存"></div>
                    </form>
                    <div style="margin: 20px 0;">
                        <div>手順</div>
                        <div>[Dropbox]</div>
                        <ol>
                            <li>Dropboxを開く。</li>
                            <li>年月（yyyyMM）フォルダを開く。（無かったら作成する）</li>
                            <li>納品フォルダを作成する。（フォルダ名：依頼No）</li>
                            <li>納品フォルダ内に納品物一式をアップロードする。</li>
                            <li>納品フォルダの共有リンクをコピーする。</li>
                        </ol>
                        <div>[QLara]</div>
                        <ol>
                            <li>「納品物」にDropboxの共有リンクを貼り付ける。</li>
                            <li>「保存」ボタンをクリックする。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
