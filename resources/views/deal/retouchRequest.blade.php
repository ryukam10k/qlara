@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><a href="/deal/"><i class="fas fa-tasks"></i> 仕事依頼</a> ／ 写真加工依頼</div>
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
                    <form action="/deal/add" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="deal_category_id" value="1" />
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>ファイル添付</th>
                            <td><input type="file" name="file" id="file" multiple></td>
                        </tr>
                        <tr>
                            <th>件数</th>
                            <td><input type="text" class="form-control" name="number" value="{{old('number')}}"></td>
                        </tr>
                        <tr>
                            <th>納品希望日</th>
                            <td>
                                <div>
                                    <input id="datepicker" type="text" class="form-control" name="" value="">
                                </div>
                                <div style="font-size: .8em;">
                                    料金：
                                    <span>7日以内：通常料金</span>
                                    <span>3日以内：+20％</span>
                                    <span>24時間以内：+50％</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>希望記入欄</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{old('memo')}}</textarea></td>
                        </tr>
                    </table>
                    <hr>
                    参考見積：3,000円
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="依頼する"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection