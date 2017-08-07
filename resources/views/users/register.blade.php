@extends('layouts.default')

@section('content')
<h2>新規登録</h2>
<form method="post" action="{{ url('/confirm') }}">
  <p>
    Email: <input type="text" name="email" placeholder="example@...">
  </p>
  <p>
    password: <input type="text" name="password" placeholder="4〜8文字で入力">
  </p>
  <p>
    <input type="submit" name="register" value=" 新規登録 ">
  </p>
</form>
@endsection
