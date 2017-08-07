@extends('layouts.default')

@section('content')
<form action="{{ url('/login') }}">
  <input type="submit" name="login" value=" ログイン ">
</form>
<form action="{{ url('/register') }}">
  <input type="submit" name="register" value=" 新規登録 ">
</form>
@endsection
