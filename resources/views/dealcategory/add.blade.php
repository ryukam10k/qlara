@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">DealCategory - Add</div>
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
                            <th>deal_category_name: </th>
                            <td><input type="text" class="form-control" name="deal_category_name" value="{{old('deal_category_name')}}"></td>
                        </tr>
                        <tr>
                            <th>basic_price: </th>
                            <td><input type="text" class="form-control" name="basic_price" value="{{old('basic_price')}}"></td>
                        </tr>
                        <tr>
                            <th>sort_no: </th>
                            <td><input type="text" class="form-control" name="sort_no" value="{{old('sort_no')}}"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="send"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection