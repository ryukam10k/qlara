@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">顧客 > 追加</div>
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
                            <th>名称</th>
                            <td><input type="text" class="form-control" name="name" value="{{old('name')}}"></td>
                        </tr>
                        <tr>
                            <th>略称</th>
                            <td><input type="text" class="form-control" name="short_name" value="{{old('short_name')}}"></td>
                        </tr>
                        <tr>
                            <th>正式名称（会社名）</th>
                            <td><input type="text" class="form-control" name="full_name" value="{{old('full_name')}}"></td>
                        </tr>
                        <tr>
                            <th>グループ名</th>
                            <td><input type="text" class="form-control" name="group_name" value="{{old('group_name')}}"></td>
                        </tr>
                        <tr>
                            <th>口座名義</th>
                            <td><input type="text" class="form-control" name="transfer_name" value="{{old('transfer_name')}}"></td>
                        </tr>
                        <tr>
                            <th>源泉徴収有り</th>
                            <td>
                                {{ Form::hidden('has_tax_with_holding', '0') }}
                                {{ Form::checkbox('has_tax_with_holding') }}
                            </td>
                        </tr>
                        <tr>
                            <th>メモ</th>
                            <td><textarea class="form-control" rows="3" name="memo">{{old('memo')}}</textarea></td>
                        </tr>
                    </table>
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="保存"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection