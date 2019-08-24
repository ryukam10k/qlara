@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><a href="/users/"><i class="fas fa-list-alt"></i> ユーザー</a> ／ 追加</div>
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
                    <form action="{{ url('users') }}" method="post">
                    @csrf
                    @method('POST')
                    <table class="table">
                        <tr>
                            <th>氏名</th>
                            <td><input type="text" class="form-control" name="name" value="{{old('name')}}" required></td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td><input type="text" class="form-control" name="email" value="{{old('email')}}" required></td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td><input type="text" class="form-control" name="password" value="{{old('password')}}" required></td>
                        </tr>
                        <tr>
                            <th>customer</th>
                            <td>
                                <select name="customer_id" id="customers" class="form-control">
                                    @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>role</th>
                            <td>
                                <select name="role_id" id="roles" class="form-control">
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
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