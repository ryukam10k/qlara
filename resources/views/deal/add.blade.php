@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Deals - Add</div>
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
                    <form action="/deal/add" method="post">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>tag: </th>
                            <td><input type="text" class="form-control" name="tag" value="{{old('tag')}}"></td>
                        </tr>
                        <tr>
                            <th>price: </th>
                            <td><input type="text" class="form-control" name="price" value="{{old('price')}}"></td>
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