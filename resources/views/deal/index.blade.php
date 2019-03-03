@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Deals</div>
                <div class="card-body">
                    <a href="/tag/add">New Deal</a>
                    <table class="table">
                        <tr>
                            <th></th>
                            <th>tag</th>
                            <th>price</th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->tag}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="/deal/show?id={{$item->id}}">show</a> | 
                                <a href="/deal/edit?id={{$item->id}}">edit</a> | 
                                <a href="/deal/del?id={{$item->id}}">del</a>
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