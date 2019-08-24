@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header"><a href="/users/"><i class="fas fa-list-alt"></i> ユーザー</a> ／ 詳細</div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <table class="table">
                        <tr>
                            <th>氏名</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>customer</th>
                            <td>
                                {{$user->customer->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>role</th>
                            <td>
                                {{$user->role->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>email_verified_at</th>
                            <td>{{$user->email_verified_at}}</td>
                        </tr>
                        <tr>
                            <th>password</th>
                            <td>{{$user->password}}</td>
                        </tr>
                        <tr>
                            <th>remember_token</th>
                            <td>{{$user->remember_token}}</td>
                        </tr>
                        <tr>
                            <th>created_at</th>
                            <td>
                                {{$user->created_at}}
                            </td>
                        </tr>
                        <tr>
                            <th>updated_at</th>
                            <td>
                                {{$user->updated_at}}
                            </td>
                        </tr>
                    </table>
                    <hr>
                    @component('components.btn-del')
                        @slot('model', 'users')
                        @slot('id', $user->id)
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection