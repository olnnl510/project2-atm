<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/join.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
  <title>회원가입</title>
</head>
<body>
  <div class="container">
  <h1>회원가입</h1>
  <form action="join_proc.php" method="post">
    <div class="item"><input type="text" name="uid" placeholder="아이디"></div>
    <div class="item"><input type="password" name="upw" placeholder="비밀번호"></div>
    <div class="item"><input type="password" name="confirm_upw" placeholder="비밀번호 확인"></div>
    <div class="item"><input type="text" name="nm" placeholder="이름"></div>
    <div class="item">성별: <label>여자<input type="radio" name="gender" value="0" checked></label>
               <label>남자<input type="radio" name="gender" value="1"></label>
    </div>
    <div class="item">
      <input type="submit" value="회원가입">
      <input type="reset" value="초기화">
    </div>
  </form>
  </div>
</body>
</html>