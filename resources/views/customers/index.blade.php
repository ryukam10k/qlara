@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-list-alt"></i> 顧客</div>
                <div class="card-body">
                    <a href="/customers/create"><i class="fas fa-plus"></i> 顧客を追加する</a>
                    <table class="table">
                        <tr>
                            <th>名称</th>
                            <th>略称</th>
                            <th>正式名称(会社名)</th>
                            <th>源泉徴収有り</th>
                            <th></th>
                        </tr>
                        @foreach ($customers as $customer)
                        <tr>
                            <td><a href="{{ url('customers/'.$customer->id) }}">{{$customer->name}}</a></td>
                            <td>{{$customer->short_name}}</td>
                            <td>{{$customer->full_name}}</td>
                            <td>{{$customer->has_tax_with_holding}}</td>
                            <td>
                                <a href="{{ url('customers/'.$customer->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
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