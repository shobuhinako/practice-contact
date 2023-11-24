@extends('layouts.app')

@section('content')
<div class="main__header">
    <h2 class="main__title">お問い合わせ</h2>
</div>

<div class="main__form">
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <label class="name__label">お名前
            <input class="name" type="text" name="name" value="テスト太郎" />
        </label>
        @error('name')
        <p style="background-color: red">{{$errors->first('name')}}</p>
        @enderror
        <label class="email__label">メールアドレス
            <input class="email" type="email" name="email" value="test@example.com" />
        </label>
        @error('email')
        <p style="background-color: red">{{$errors->first('email')}}</p>
        @enderror
        <label class="tel__label">電話番号
            <input class="tel" type="tel" name="tel" value="09012345678" />
        </label>
        @error('tel')
        <p style="background-color: red">{{$errors->first('tel')}}</p>
        @enderror
        <label class="textarea__label">お問い合わせ内容
            <input class="textarea" type="textarea" name="content" value="資料をいただきたいです" />
        </label>
        @error('content')
        <p style="background-color: red">{{$errors->first('content')}}</p>
        @enderror
        <input class="submit__button" type="submit" name="submit" />
@endsection


