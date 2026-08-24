@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title', 'confirm')

@section('content')
    <div class="w1200">
        <div class="form__heading content__heading">
            <h2>Confirm</h2>
        </div>
        <form action="/thanks" class="form" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__txt">
                            {{ $contact['last_name'] }}
                            {{ $contact['first_name'] }}
                            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__txt">
                            @if($contact['gender'] == 1)
                            男性
                            @elseif($contact['gender'] == 2)
                            女性
                            @else
                            その他
                            @endif
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__txt">
                            {{ $contact['email'] }}
                            <input type="hidden" name="email" value="{{ $contact['email'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__txt">
                            {{ $contact['tel_1'] }}
                            {{ $contact['tel_2'] }}
                            {{ $contact['tel_3'] }}
                            <input type="hidden" name="tel_1" value="{{ $contact['tel_1'] }}">
                            <input type="hidden" name="tel_2" value="{{ $contact['tel_2'] }}">
                            <input type="hidden" name="tel_3" value="{{ $contact['tel_3'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__txt">
                            {{ $contact['address'] }}
                            <input type="hidden" name="address" value="{{ $contact['address'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__txt">
                            {{ $contact['building'] }}
                            <input type="hidden" name="building" value="{{ $contact['building'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__txt">
                            {{ $category->content }}
                            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの内容</th>
                        <td class="confirm-table__txt">
                            {{ $contact['detail'] }}
                            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <button type="submit" value="back" name="back" class="form__button-correction">修正</button>
            </div>
        </form>
    </div>
@endsection