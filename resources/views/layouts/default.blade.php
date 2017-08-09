<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>家庭栽培ゲーム 〜マリワナくん〜</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  @if (session('flash_message'))
  <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
  @endif
  <div class="container">
    <h1>家庭栽培ゲーム 〜マリワナくん〜</h1>
    @yield('content')
  </div>
</body>
</html>
