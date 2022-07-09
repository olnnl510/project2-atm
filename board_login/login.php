<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
  <title>로그인</title>
</head>
<body>
<div class="container">
    <h1>로그인</h1>
  <form action="login_proc.php" method="post">
    <div class="item"><input type="text" name="uid" placeholder="아이디"></div>
    <div class="item"><input type="password" name="upw" placeholder="비밀번호"></div>
    <div class="item"><input type="submit" value="로그인"></div>
  </form>
  <a href="join.php"><button>회원가입</button></a>
</div>
</body>
</html>