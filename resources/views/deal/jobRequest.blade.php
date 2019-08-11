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
                    <form action="/deal/add" method="post">
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
                            <th>件数</th>
                            <td><input type="text" class="form-control" name="number" value="{{old('number')}}"></td>
                        </tr>
                        <tr>
                            <th>メモ</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{old('memo')}}</textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="依頼する"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection