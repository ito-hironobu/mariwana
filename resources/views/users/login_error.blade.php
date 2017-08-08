@extends('layouts.default')

@section('content')
<h2>ログイン</h2>
<h2 class="error">メールアドレスまたはパスワードが間違っています。</h2>
<form method="post" action="{{ url('/login_complete') }}">
  {{ csrf_field() }}
  <p>
    Email: <input type="text" name="email" placeholder="example@..." value="{{ old('email') }}">
    @if ($errors->has('email'))
    <span class="error">{{ $errors->first('email') }}</span>
    @endif
  </p>
  <p>
    password: <input type="text" name="password" placeholder="4〜8文字で入力" value="{{ old('password') }}">
    @if ($errors->has('password'))
    <span class="error">{{ $errors->first('password') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" name="login" value="ログイン">
  </p>
</form>
@endsection
