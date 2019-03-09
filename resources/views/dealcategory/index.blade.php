@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">DealCategories</div>
                <div class="card-body">
                    <a href="/dealcategory/add">New Category</a>
                    <table class="table">
                        <tr>
                            <th>deal_category_name</th>
                            <th>basic_price</th>
                            <th>sort_no</th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->deal_category_name}}</td>
                            <td>{{$item->basic_price}}</td>
                            <td>{{$item->sort_no}}</td>
                            <td>
                                <a href="/dealcategory/show?id={{$item->id}}">show</a> | 
                                <a href="/dealcategory/edit?id={{$item->id}}">edit</a> | 
                                <a href="/dealcategory/del?id={{$item->id}}">del</a>
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