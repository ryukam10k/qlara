@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">ユーザー</div>
                <div class="card-body">
                    <a href="{{ url('users/create') }}"><i class="fas fa-plus"></i> ユーザーを追加する</a>
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>ユーザー名</th>
                                <th>email</th>
                                <th>顧客</th>
                                <th>role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ url('users/'.$user->id) }}">{{$user->id}}</a></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->customer->name}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>
                                    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection