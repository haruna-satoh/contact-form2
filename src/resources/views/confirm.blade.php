@extends('layouts.app')

@section('content')
    <h2>お問い合わせ内容確認</h2>
<form action="/contacts" method="post">
    @csrf
    <table>
        <tr>
            <th>お名前</th>
            <td>
                <input type="text" name="name" value="{{ $contact['name'] }}" readonly >
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>
                <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
            </td>
        </tr>
    </table>

    <button type="submit">送信</button>
</form>
@endsection