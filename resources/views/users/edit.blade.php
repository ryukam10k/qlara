@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header"><a href="/users/"><i class="fas fa-list-alt"></i> ユーザー</a> ／ 編集</div>
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
                    <form action="{{ url('users/'.$user->id) }}" method="post">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <table class="table">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>氏名</th>
                            <td><input type="text" class="form-control" name="name" value="{{$user->name}}" required></td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td><input type="text" class="form-control" name="email" value="{{$user->email}}" required></td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td><input type="text" class="form-control" name="password" value="{{$user->password}}" required></td>
                        </tr>
                        <tr>
                            <th>customer_id</th>
                            <td><input type="text" class="form-control" name="customer_id" value="{{$user->customer_id}}" required></td>
                        </tr>
                        <tr>
                            <th>role_id</th>
                            <td><input type="text" class="form-control" name="role_id" value="{{$user->role_id}}" required></td>
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