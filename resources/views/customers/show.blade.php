@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header"><a href="/customers/"><i class="fas fa-list-alt"></i> 顧客</a> ／ 詳細</div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <table class="table">
                        <tr>
                            <th>顧客名</th>
                            <td>{{$customer->name}}</td>
                        </tr>
                        <tr>
                            <th>名略称</th>
                            <td>{{$customer->short_name}}</td>
                        </tr>
                        <tr>
                            <th>正式名称（会社名）</th>
                            <td>{{$customer->full_name}}</td>
                        </tr>
                        <tr>
                            <th>グループ名</th>
                            <td>{{$customer->group_name}}</td>
                        </tr>
                        <tr>
                            <th>口座名義</th>
                            <td>{{$customer->transfer_name}}</td>
                        </tr>
                        <tr>
                            <th>源泉徴収有り</th>
                            <td>
                                {{$customer->has_tax_with_holding}}
                            </td>
                        </tr>
                    </table>
                    <hr>
                    @component('components.btn-del')
                        @slot('model', 'customers')
                        @slot('id', $customer->id)
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection