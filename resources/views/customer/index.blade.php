@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Customers</div>
                <div class="card-body">
                    <a href="/customer/add">New Customer</a>
                    <table class="table">
                        <tr>
                            <th>name</th>
                            <th>short_name</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->short_name}}</td>
                            <td>
                                <a href="/customer/show?id={{$item->id}}">show</a> | 
                                <a href="/customer/edit?id={{$item->id}}">edit</a> | 
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