@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><a href="/deal/">仕事依頼</a> > 新規依頼</div>
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
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>依頼内容</th>
                            <td>
                                <select name="deal_category_id" id="dealCategories" class="form-control">
                                    @foreach($dealCategories as $dealCategory)
                                    <option value="{{$dealCategory->id}}">{{$dealCategory->deal_category_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
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
                            <td><input type="text" class="form-control" name="" value=""></td>
                        </tr>
                        <tr>
                            <th>オプション</th>
                            <td>
                                <div>
                                    <input type="checkbox" id="option1" name="option1">
                                    <label for="option1">装飾品（ピアス等）消し：+10%</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="option2" name="option2">
                                    <label for="option2">入れ墨消し：+20%</label>  
                                </div>
                                <div>
                                    <input type="checkbox" id="option3" name="option3">
                                    <label for="option3">その他：金額相談</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>その他希望記入欄</th>
                            <td><textarea class="form-control" rows="4" name="memo">{{old('memo')}}</textarea></td>
                        </tr>
                    </table>
                    <hr>
                    見積金額：3,000円
                    <hr>
                    <div><input type="submit" class="btn btn-primary btn-block" value="依頼する"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection