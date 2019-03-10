@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Deals - Edit</div>
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
                    <form action="/deal/edit" method="post">
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>タグ: </th>
                            <td><input type="text" class="form-control" name="tag" value="{{$form->tag}}"></td>
                        </tr>
                        <tr>
                            <th>価格: </th>
                            <td><input type="text" class="form-control" name="price" value="{{$form->price}}"></td>
                        </tr>
                        <tr>
                            <th>件数: </th>
                            <td><input type="text" class="form-control" name="number" value="{{$form->number}}"></td>
                        </tr>
                        <tr>
                            <th>メモ: </th>
                            <td><textarea class="form-control" rows="4" name="memo">{{$form->memo}}</textarea></td>
                        </tr>
                        <tr>
                            <th>受付日: </th>
                            <td><input type="text" class="form-control" name="reception_date" value="{{$form->reception_date}}"></td>
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