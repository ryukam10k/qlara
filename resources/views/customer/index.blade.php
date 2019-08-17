@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">顧客</div>
                <div class="card-body">
                    <a href="/customer/add"><i class="fas fa-plus"></i> 顧客を追加する</a>
                    <table class="table">
                        <tr>
                            <th>名称</th>
                            <th>略称</th>
                            <th>正式名称(会社名)</th>
                            <th>源泉徴収有り</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="/customer/edit?id={{$item->id}}">{{$item->name}}</a></td>
                            <td>{{$item->short_name}}</td>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->has_tax_with_holding}}</td>
                            <td>
                                <a href="/customer/del?id={{$item->id}}">del</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection