@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><a href="/deal/">仕事依頼</a> > 編集</div>
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
                    <form action="/deal/edit" method="post">
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>依頼内容</th>
                            <td>
                                <select name="deal_category_id" id="dealCategories" class="form-control">
                                    @foreach($dealCategories as $dealCategory)
                                    <option value="{{$dealCategory->id}}" @if($form->deal_category_id == $dealCategory->id) selected @endif>{{$dealCategory->deal_category_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>タグ</th>
                            <td><input type="text" class="form-control" name="tag" value="{{$form->tag}}"></td>
                        </tr>
                        <tr>
                            <th>価格</th>
                            <td><input type="text" class="form-control" name="price" value="{{$form->price}}"></td>
                        </tr>
                        <tr>
                            <th>件数</th>
                            <td><input type="text" class="form-control" name="number" value="{{$form->number}}"></td>
                        </tr>
                        <tr>
                            <th>メモ</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{$form->memo}}</textarea></td>
                        </tr>
                        <tr>
                            <th>受付日時</th>
                            <td><input type="text" class="form-control" name="reception_date" value="{{$form->reception_date}}"></td>
                        </tr>
                        <tr>
                            <th>完了日時</th>
                            <td><input type="text" class="form-control" name="end_date" value="{{$form->end_date}}"></td>
                        </tr>
                    </table>
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="保存"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection