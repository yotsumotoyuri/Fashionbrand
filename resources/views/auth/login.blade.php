@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection


@section('link')
<a class="form__button-submit login-form__button-submit" href="/register">register</a>
@endsection

@section('content')
    <div class="bg">
    <div class="w1200">
        <div class="form__heading content__heading">
            <h2>Login</h2>
        </div>
        <form action="/login" class="login-form" method="post" novalidate>
            @csrf
            <div class="login-form__group">
                <div class="login-form__group-ttl">
                    <span class="login-form__label">メールアドレス</span>
                </div>
                <div class="login__group__content">
                    <div class="login-form__input">
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="login-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login-form__group">
                <div class="login-form__group-ttl">
                    <span class="login-form__label">パスワード</span>
                </div>
                <div class="login__group__content">
                    <div class="login-form__input">
                        <input type="password" name="password" value="{{ old('password') }}">
                    </div>
                </div>
                <div class="login-form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
    </div>
<div class="renewal">
    <p class="renewal__txt">現在、オリジナルページへのリニューアルに向けてメンテナス中です</p>
</div>
@endsection