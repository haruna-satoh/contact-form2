@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <h2>お問い合わせ</h2>
    <form action="/contacts/confirm" method="post">
        @csrf
        <div>
            <span>お名前</span>
            <span>必須</span>
            <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <span>メールアドレス</span>
            <span>必須</span>
            <input type="text" name="email" placeholder="test@example.com" value="{{ old('email') }}">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div>
            <span>電話番号</span>
            <span>必須</span>
            <input type="text" name="tel" placeholder="09012345678" value="{{ old('tel') }}">
            @error('tel')
                {{ $message }}
            @enderror
        </div>
        <div>
            <span>お問い合わせ内容</span>
            <textarea name="content" cols="30" rows="10" placeholder="資料をいただきたいです"></textarea>
        </div>
        <button type="submit">送信</button>
    </form>
@endsection


