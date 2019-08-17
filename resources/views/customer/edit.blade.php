@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">顧客 > 編集</div>
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
                    {!! Form::open([ 'action' => 'CustomerController@edit' , 'class'=>'' , 'method' => 'POST' ]) !!}
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>顧客名</th>
                            <td><input type="text" class="form-control" name="name" value="{{$form->name}}"></td>
                        </tr>
                        <tr>
                            <th>名略称</th>
                            <td><input type="text" class="form-control" name="short_name" value="{{$form->short_name}}"></td>
                        </tr>
                        <tr>
                            <th>正式名称（会社名）</th>
                            <td><input type="text" class="form-control" name="full_name" value="{{$form->full_name}}"></td>
                        </tr>
                        <tr>
                            <th>グループ名</th>
                            <td><input type="text" class="form-control" name="group_name" value="{{$form->group_name}}"></td>
                        </tr>
                        <tr>
                            <th>口座名義</th>
                            <td><input type="text" class="form-control" name="transfer_name" value="{{$form->transfer_name}}"></td>
                        </tr>
                        <tr>
                            <th>源泉徴収有り</th>
                            <td>
                                {{ Form::hidden('has_tax_with_holding', '0') }}
                                {{ Form::checkbox('has_tax_with_holding', true, $form->has_tax_with_holding) }}
                            </td>
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