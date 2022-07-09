<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<title>프로필</title>
</head>
<body>
  <div class="container">
  <h1>프로필 이미지 디스플레이</h1>
  <form action="profile_proc.php" method="POST" enctype="multipart/form-data">
    <div class="item"><label>이미지 : <input class="file" type="file" accept="image/*" name='img'></label></div>
    <div class="item"><input type="submit" value="이미지 업로드"></div>
  </form>
</div>
</body>
</html>