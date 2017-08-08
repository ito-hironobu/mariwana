@extends('layouts.default')

@section('content')
<h2>新規登録</h2>
<h2 class="error">登録済みのメールアドレスです。</h2>
<form method="post" action="{{ url('/register_complete') }}">
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
    <input type="submit" name="register" value=" 新規登録 ">
  </p>
</form>
@endsection
