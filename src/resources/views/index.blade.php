@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact__content">
        <div class="contact__title">
            <h2>お問い合わせ</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__group--item">お名前</span>
                    <span class="form__group--required">必須</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}">
                    </div>
                    <div class="form__error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__group--item">メールアドレス</span>
                    <span class="form__group--required">必須</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__group--item">電話番号</span>
                    <span class="form__group--required">必須</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" name="tel" placeholder="09012345678" value="{{ old('tel') }}">
                    </div>
                    <div class="form__error">
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__group--item">お問い合わせ内容</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--textarea">
                        <textarea name="content" cols="30" rows="10" placeholder="資料をいただきたいです"></textarea>
                    </div>
                </div>
            </div>
            <div class="form__group--button">
                <button type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection


