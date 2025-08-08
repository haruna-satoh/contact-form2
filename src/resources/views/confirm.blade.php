@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__title">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        @csrf
        <table class="confirm-table__inner">
            <tr>
                <th class="confirm-table__title">お名前</th>
                <td class="confirm-table__item">
                    <input type="text" name="name" value="{{ $contact['name'] }}" readonly >
                </td>
            </tr>
            <tr>
                <th class="confirm-table__title">メールアドレス</th>
                <td class="confirm-table__item">
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th class="confirm-table__title">電話番号</th>
                <td class="confirm-table__item">
                    <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th class="confirm-table__title">お問い合わせ内容</th>
                <td class="confirm-table__item">
                    <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
                </td>
            </tr>
        </table>
        <div class="confirm-button">
            <button class="confirm-button__submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection