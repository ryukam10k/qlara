@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header"><a href="/customers/"><i class="fas fa-list-alt"></i> 顧客</a> ／ 編集</div>
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
                    <form action="{{ url('customers/'.$customer->id) }}" method="post">
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <table class="table">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>顧客名</th>
                            <td><input type="text" class="form-control" name="name" value="{{$customer->name}}" required></td>
                        </tr>
                        <tr>
                            <th>名略称</th>
                            <td><input type="text" class="form-control" name="short_name" value="{{$customer->short_name}}" required></td>
                        </tr>
                        <tr>
                            <th>正式名称（会社名）</th>
                            <td><input type="text" class="form-control" name="full_name" value="{{$customer->full_name}}" required></td>
                        </tr>
                        <tr>
                            <th>グループ名</th>
                            <td><input type="text" class="form-control" name="group_name" value="{{$customer->group_name}}"></td>
                        </tr>
                        <tr>
                            <th>口座名義</th>
                            <td><input type="text" class="form-control" name="transfer_name" value="{{$customer->transfer_name}}"></td>
                        </tr>
                        <tr>
                            <th>源泉徴収有り</th>
                            <td>
                                {{ Form::hidden('has_tax_with_holding', '0') }}
                                {{ Form::checkbox('has_tax_with_holding', true, $customer->has_tax_with_holding) }}
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="保存"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection