@extends('layouts.default')

@section('content')
<h2>ログイン</h2>
<form method="post" action="{{ url('/game') }}">
  <p>
    Email: <input type="text" name="email" placeholder="example@...">
  </p>
  <p>
    password: <input type="text" name="password" placeholder="4〜8文字で入力">
  </p>
  <p>
    <input type="submit" name="login" value="ログイン">
  </p>
</form>
@endsection
