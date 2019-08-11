@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">仕事の依頼</div>
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
                    <form action="/deal/add" method="post" enctype="multipart/form-data">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>依頼内容</th>
                            <td>
                                <select name="deal_category_id" id="dealCategories" class="form-control">
                                    @foreach($dealCategories as $dealCategory)
                                    <option value="{{$dealCategory->id}}">{{$dealCategory->deal_category_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>ファイル添付</th>
                            <td><input type="file" name="file" id="file" multiple></td>
                        </tr>
                        <tr>
                            <th>メモ</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{old('memo')}}</textarea></td>
                        </tr>
                    </table>
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="依頼する"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection