@extends('layouts.default')

@section('content')
<p>
  <h1>家庭栽培ゲーム 〜マリワナくん〜</h1>
  <form action="{{ url('/???') }}">
    <input type="submit" name="login" value="ログイン">
    <input type="submit" name="register" value=" 登録 ">
  </form>
</p>
@endsection
