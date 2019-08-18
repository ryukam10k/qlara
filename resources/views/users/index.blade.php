@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">ユーザー一覧</div>
                <div class="card-body">
                    <a href="/retouchRequest"><i class="fas fa-plus"></i> 写真加工のご依頼はこちら</a>
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>ユーザー名</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="/deal/show?id={{$user->id}}">{{$user->id}}</a></td>
                                <td>{{$user->name}}</td>
                                <td>
                                    <a href="/deal/edit?id={{$user->id}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
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