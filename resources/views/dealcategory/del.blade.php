@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/dealcategory/">依頼カテゴリー</a> > 削除</div>

                <div class="card-body">
                    <p>本当に削除しますか？</p>
                    <form action="/dealcategory/del" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <table class="table">
                            <tr>
                                <th>依頼カテゴリー</th>
                                <td>{{$form->deal_category_name}}</td>
                            </tr>
                        </table>
                        <hr>
                        <div><input type="submit" class="btn btn-danger btn-block" value="削除する"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection