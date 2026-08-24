@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('title', 'thanks')

@section('content')
    <div class="w1200">
        <div class="thanks__heading">
            <span class="thanks__bg-txt">Thank you</span>
            <h2 class="thanks__main-txt">お問い合わせありがとうございました</h2>
            <div class="form__button">
                <a class="form__button-submit" href="/">HOME</a>
            </div>
        </div>
    </div>
@endsection