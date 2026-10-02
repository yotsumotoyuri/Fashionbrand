@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('link')
<a class="form__button-submit register-form__button-submit" href="/login">login</a>
@endsection

@section('content')
    <div class="bg">
    <div class="w1200">
        <div class="form__heading content__heading">
            <h2>Register</h2>
        </div>
        <form action="/register" class="register-form" method="post" novalidate>
            @csrf
            <div class="register-form__group">
                <div class="register-form__group-ttl">
                    <span class="register-form__label">お名前</span>
                </div>
                <div class="register__group__content">
                    <div class="register-form__input">
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="register-form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__group-ttl">
                    <span class="register-form__label">メールアドレス</span>
                </div>
                <div class="register__group__content">
                    <div class="register-form__input">
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="register-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__group-ttl">
                    <span class="register-form__label">パスワード</span>
                </div>
                <div class="register__group__content">
                    <div class="register-form__input">
                        <input type="password" name="password" value="{{ old('password') }}">
                    </div>
                </div>
                <div class="register-form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
    </div>
<div class="renewal">
    <p class="renewal__txt">現在、オリジナルページへのリニューアルに向けてメンテナス中です</p>
</div>
@endsection