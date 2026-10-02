@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title', 'contact')

@section('content')
    <div class="w1200">
    <div class="form__heading content__heading">
        <h2>Contact</h2>
    </div>
    <form action="/confirm" class="form" method="post" novalidate>
        @csrf
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                    <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                </div>
            </div>
            <div class="form__error">
                @if ($errors->has('last_name'))
                <p class="form__error-message">{{ $errors->first('last_name') }}</p>
                @endif
                @if ($errors->has('first_name'))
                <p class="form__error-message">{{ $errors->first('first_name') }}</p>
                @endif
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <label class="form__group--radio">
                    <input type="radio" name="gender" value="1" {{ old('gender')==1 || old('gender')==null ? 'checked' : ''}}>
                    <span class="form__label-txt">男性</span>
                </label>
                <label class="form__group--radio">
                    <input type="radio" name="gender" value="2" {{ old('gender')==2 ? 'checked' : ''}}>
                    <span class="form__label-txt">女性</span>
                </label>
                <label class="form__group--radio">
                    <input type="radio" name="gender" value="3" {{ old('gender')==3 ? 'checked' : ''}}>
                    <span class="form__label-txt">その他</span>
                </label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}">
                    <span class="hyphen">-</span>
                    <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}">
                    <span class="hyphen">-</span>
                    <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}">
                </div>
            </div>
            <div class="form__error">
                @if ($errors->has('tel_1'))
                {{ $errors->first('tel_1') }}
                @elseif ($errors->has('tel_2'))
                {{ $errors->first('tel_2')}}
                @else
                {{$errors->first('tel_3')}}
                @endif
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                </div>
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                </div>
            </div>
            <div class="form__error">
                @error('building')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <select name="category_id">
                        <option value="" selected>選択してください</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->content }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__error">
                @error('category_id')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">お問い合わせの内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <textarea name="detail" id="" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                </div>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
    </div>
<div class="renewal">
    <p class="renewal__txt">現在、オリジナルページへのリニューアルに向けてメンテナス中です</p>
</div>
@endsection
