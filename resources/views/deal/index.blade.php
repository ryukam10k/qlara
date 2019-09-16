@extends('layouts.app')

@section('content')
<style>
    .no_col {
        text-align: center;
        width: 80px;
    }
    td.no_col {
        padding: 0 !important;
    }
    td.no_col a {
        display: block !important;
        padding: 0.25rem;
        transition: all .3s;
    }
    td.no_col a:hover {
        color: #fff;
        background-color: #3490dc;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-tasks"></i> 仕事依頼</div>
                <div class="card-body">
                    <a href="/retouchRequest"><i class="fas fa-plus"></i> 写真加工のご依頼はこちら</a>
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th class="no_col">依頼No</th>
                                <th>依頼内容</th>
                                <th>お客様名</th>
                                <th>ご担当者名</th>
                                <th>ご依頼日</th>
                                <th>納品希望日</th>
                                <th>ステータス</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="no_col"><a href="/deal/show?id={{$item->id}}">#{{$item->id}}</a></td>
                                <td>{{$item->dealCategory->name}}</td>
                                <td>{{$item->customer->name}}</td>
                                <td>{{$item->requestUser->name}} 様</td>
                                <td>{{$item->created_at->format('Y/m/d')}}</td>
                                <td>{{$item->due_date()}}</td>
                                <td>{{$item->status()}}</td>
                                <td>
                                    @if (Auth::user()->role->is_admin == true || $item->reception_date == null)
                                    <a href="/deal/edit?id={{$item->id}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                    @endif
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
