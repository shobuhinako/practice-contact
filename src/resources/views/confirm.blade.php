@extends('layouts.app')

@section('content')
<div class="main__header">
    <h2 class="main__title">お問い合わせ内容確認</h2>
</div>

<div class="confirm__main">
    <table class="confirm__table" border="1">
        <tr class="confirm__name">
            <th class="confirm__name-title">お名前</th>
            <td class="confirm__name-content">{{ $contact['name'] }}</td>
        </tr>
        <tr class="confirm__email">
            <th class="confirm__email-title">メールアドレス</th>
            <td class="confirm__email-content">{{ $contact['email'] }}</td>
        </tr>
        <tr class="confirm__tel">
            <th class="confirm__tel-title">電話番号</th>
            <td class="confirm__tel-content">{{ $contact['tel'] }}</td>
        </tr>
        <tr class="confirm__content">
            <th class="confirm__content-title">お問い合わせ内容</th>
            <td class="confirm__contact-content">{{ $contact['content'] }}</td>
        </tr>
    </table>
    <form class="submit__button" action="/thanks" method="post">
        @csrf
        <input type="submit" name="button" />
        <input type="hidden" name="name" value="{{ $contact['name'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
        <input type="hidden" name="content" value="{{ $contact['content'] }}">
    </form>
</div>
@endsection