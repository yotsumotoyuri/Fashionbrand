@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('title', 'contact')
@section('link')
    <form class="logout-form" action="/logout" method="post">
        @csrf
        <input class="form__button-submit logout-button" type="submit" value="logout">
    </form>
@endsection

@section('content')
<div class="admin">
    <h2 class="content__heading">Admin</h2>
    <div class="w1200">
        <form action="/search" method="get" class="search-form">
            @csrf
            <input type="text" class="search-form__keyword-input" name="keyword" placeholder="名前やメールアドレスを入力してください" value="">
            <div class="search-form__gender">
                <select name="gender" class="search-form__gender-select" value="{{request('gender')}}">
                    <option disabled selected>性別</option>
                    <option value="1" @if( request('gender')==1 ) selected @endif>男性</option>
                    <option value="2" @if( request('gender')==2 ) selected @endif>女性</option>
                    <option value="3" @if( request('gender')==3 ) selected @endif>その他</option>
                </select>
            </div>
            <div class="search-form__category">
                <select name="category_id" class="search-form__category-select">
                    <option disabled selected>お問い合わせの種類</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if( request('category_id')==$category->id ) selected @endif>{{$category->content}}</option>
                    @endforeach
                </select>
            </div>
            <input class="search-form__date" type="date" name="date" value="{{request('date')}}">
            <div class="search-form__actions">
                <input type="submit" class="search-form__search-btn" value="検索">
                <a href="/admin" class="search-form__reset-btn">リセット</a>
            </div>
        </form>

        <div class="export-form">
            <form action="{{'/export?'.http_build_query(request()->query())}}" method="post">
                @csrf
                <input type="submit" class="export__btn btn" value="エクスポート">
            </form>
            {{ $contacts->appends(request()->query())->links('vendor.pagination.custom') }}
        </div>

        <table class="admin__table">
            <tr class="admin__row">
                <th class="admin__label">お名前</th>
                <th class="admin__label">性別</th>
                <th class="admin__label">メールアドレス</th>
                <th class="admin__label">お問い合わせの種類</th>
                <th class="admin__label"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="admin__row">
                <td class="admin__data">{{$contact->last_name}}{{$contact->first_name}}</td>
                <td class="admin__data">
                    @if($contact->gender == 1)
                    男性
                    @elseif($contact->gender == 2)
                    女性
                    @else
                    その他
                    @endif
                </td>
                <td class="admin__data">{{$contact->email}}</td>
                <td class="admin__data">{{$contact->category->content}}</td>
                <td class="admin__data">
                    <a href="#{{$contact->id}}" class="admin__detail-btn">詳細</a>
                </td>
            </tr>

            <div class="modal" id="{{$contact->id}}">
                <a href="#!" class="modal-overlay"></a>
                <div class="modal__inner">
                    <div class="modal__content">
                        <form action="/delete" class="modal__detail-form" method="post">
                        @csrf
                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">お名前</label>
                            <p>{{$contact->last_name}}{{$contact->first_name}}</p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">性別</label>
                            <p>
                                @if($contact->gender == 1)
                                男性
                                @elseif($contact->gender == 2)
                                女性
                                @else
                                その他
                                @endif
                            </p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">メールアドレス</label>
                            <p>{{$contact->email}}</p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">電話番号</label>
                            <p>{{$contact->tel_1}}{{$contact->tel_2}}{{$contact->tel_3}}</p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">住所</label>
                            <p>{{$contact->address}}</p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">お問い合わせの種類</label>
                            <p>{{$contact->category->content}}</p>
                        </div>

                        <div class="modal-form__group">
                            <label for="" class="modal-form__label">お問い合わせ内容</label>
                            <p>{{$contact->detail}}</p>
                        </div>
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        <div class="modal-form__delete-btn">
                            <input type="submit" class="delete-btn__input" value="削除">
                        </div>
                        </form>
                    </div>

                    <a href="#" class="modal__close-btn">×</a>
                </div>
            </div>

            @endforeach
        </table>
    </div>
</div>
@endsection