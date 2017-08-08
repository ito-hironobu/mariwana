@extends('layouts.default')

@section('content')
<h2>ログイン完了</h2>
<form method="post" action="{{ url('/game') }}">
  {{ csrf_field() }}
  <p>
    <input type="hidden" name="email" value="{{ $email }}">
  </p>
  <p>
    <input type="hidden" name="password" value="{{ $password }}">
  </p>
  <p>
    <input type="submit" name="start" value=" ゲームスタート ">
  </p>
</form>
@endsection
