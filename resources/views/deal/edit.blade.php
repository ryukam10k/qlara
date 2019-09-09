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
                <div class="card-header"><a href="/deal/"><i class="fas fa-tasks"></i> 仕事依頼</a> ／ 編集</div>
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
                    <form action="/deal/edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <a href="javascript:history.back()">戻る</a>
                    <table class="table table-sm">
                        {{ csrf_field() }}
                        <tr>
                            <th>依頼No</th>
                            <td>{{$form->id}}</td>
                        </tr>
                        <tr>
                            <th>依頼内容</th>
                            <td>
                                <select name="deal_category_id" id="dealCategories" class="form-control">
                                    @foreach($dealCategories as $dealCategory)
                                    <option value="{{$dealCategory->id}}" @if($form->deal_category_id == $dealCategory->id) selected @endif>{{$dealCategory->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>アップロードファイル</th>
                            <td>
                                <input type="file" name="file" id="file">
                                <div>
                                    <span>{{$form->upload_filename}}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>納品希望日</th>
                            <td>
                                <div>
                                    <input id="datepicker" type="text" class="form-control" name="delivery_date" value="{{$form->delivery_date}}" autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>希望記入欄</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{$form->memo}}</textarea></td>
                        </tr>
                        <tr>
                            <th>写真枚数</th>
                            <td><input type="text" class="form-control" name="number" value="{{$form->number}}"></td>
                        </tr>
                        <tr>
                            <th>金額</th>
                            <td><input type="text" class="form-control" name="price" value="{{$form->price}}"></td>
                        </tr>
                    </table>
                    <table class="table table-light table-sm">
                        <tr>
                            <th>依頼日時</th>
                            <td><input type="text" class="form-control" name="created_at" value="{{$form->created_at}}"></td>
                        </tr>
                        <tr>
                            <th>受付日時</th>
                            <td><input type="text" class="form-control" name="reception_date" value="{{$form->reception_date}}"></td>
                        </tr>
                        <tr>
                            <th>納品日時</th>
                            <td><input type="text" class="form-control" name="delivery_date" value="{{$form->delivery_date}}"></td>
                        </tr>
                        <tr>
                            <th>完了日時</th>
                            <td><input type="text" class="form-control" name="end_date" value="{{$form->end_date}}"></td>
                        </tr>
                    </table>
                    <a href="javascript:history.back()">戻る</a>
                    <hr>
                    <div><input type="submit" class="btn btn-primary" value="保存"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
