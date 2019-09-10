@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div style="margin:15px;">
                        LINEアカウントを利用してログインを行います。
                        <hr />
                        <div style="text-align: center;">
                            <a href="{{ url('login/line')}}" class="btn btn-social-icon btn-line">
                                <img src="{{asset('images/line/btn_login_base.png')}}">
                            </a>
                        </div>
                        <hr />
                        本システムでは、ログイン時の認証画面にて許可を頂いた場合のみ、あなたのLINEアカウントに登録されているメールアドレスを取得します。<br />
                        取得したメールアドレスは、以下の目的以外では使用いたしません。また、法令に定められた場合を除き、第三者への提供はいたしません。
                        <ul>
                            <li>アカウントのユーザーIDとして使用</li>
                        </ul>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
