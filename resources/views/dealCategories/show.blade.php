@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header"><a href="/dealCategories/"><i class="fas fa-list-alt"></i> 依頼区分</a> ／ 詳細</div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{$dealCategory->id}}">
                    <table class="table">
                        <tr>
                            <th>名称</th>
                            <td>{{$dealCategory->name}}</td>
                        </tr>
                        <tr>
                            <th>標準価格</th>
                            <td>{{$dealCategory->basic_price}}</td>
                        </tr>
                        <tr>
                            <th>並び順</th>
                            <td>{{$dealCategory->sort_no}}</td>
                        </tr>
                        <tr>
                            <th>登録日時</th>
                            <td>{{$dealCategory->created_at}}</td>
                        </tr>
                        <tr>
                            <th>更新日時</th>
                            <td>{{$dealCategory->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>削除日時</th>
                            <td>
                                {{$dealCategory->deleted_at}}
                            </td>
                        </tr>
                    </table>
                    <hr>
                    @component('components.btn-del')
                        @slot('model', 'dealCategories')
                        @slot('id', $dealCategory->id)
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection