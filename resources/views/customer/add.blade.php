@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Customers - Add</div>
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
                    {!! Form::open([ 'action' => 'CustomerController@add' , 'class'=>'' , 'method' => 'POST' ]) !!}
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>customer_name: </th>
                            <td><input type="text" class="form-control" name="customer_name" value="{{old('customer_name')}}"></td>
                        </tr>
                        <tr>
                            <th>customer_short_name: </th>
                            <td><input type="text" class="form-control" name="customer_short_name" value="{{old('customer_short_name')}}"></td>
                        </tr>
                        <tr>
                            <th>源泉徴収有り: </th>
                            <td>{!! Form::checkbox('tax_with_holding_flag'); !!}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="send"></td>
                        </tr>
                    </table>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection