<?php
  include_once "db/db_board.php";
  $i_board = $_GET['i_board'];
  $param = ["i_board" => $i_board];

  $result = sel_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mod.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<title>글수정</title>
</head>
<body>
  <div class="container">
  <h1>글수정</h1>
  <form action="mod_proc.php" method="post">
    <div class="item"><input class="title" type="text" name="title" value="<?=$result['title']?>"></div>
    <div class="item"><textarea class="ctnt" name="ctnt"><?=$result['ctnt']?></textarea></div>
    <input type="hidden" name="i_board" value="<?=$i_board?>">
    <div class="item">
      <input type="submit" value="글수정">
      <input type="reset" value="초기화">
    </div>
  </form>
</div>
</body>
</html>