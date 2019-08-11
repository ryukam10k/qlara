@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><a href="/dealcategory/">依頼カテゴリー</a> > 新規登録</div>
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
                    <form action="/dealcategory/add" method="post">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>依頼カテゴリー</th>
                            <td><input type="text" class="form-control" name="deal_category_name" value="{{old('deal_category_name')}}"></td>
                        </tr>
                        <tr>
                            <th>標準価格</th>
                            <td><input type="text" class="form-control" name="basic_price" value="{{old('basic_price')}}"></td>
                        </tr>
                        <tr>
                            <th>表示順</th>
                            <td><input type="text" class="form-control" name="sort_no" value="{{old('sort_no')}}"></td>
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