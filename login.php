<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="layout.css">
  <title>게시판</title>
</head>
<body>
  <div class="login">
    <span>로그인</span>
    <form method='get' action='login_action.php' autocomplete='off'>
      <ul class="clearfix">
        <li class="floatLeft">ID</li>
        <li class="floatLeft"><input name="id" type="text"></li>
        <li class="floatLeft">PW</li>
        <li class="floatLeft"><input name="pw" type="password"></li>
      </ul>
      <input type="submit" value="로그인">
    </form>
    <br />
    <button id="join" onclick="location.href='./join.php'">회원가입</button>
  </div>
</body>
</html>
