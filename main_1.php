<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>리스트</title>
</head>
<body>
    <h1><a href="main_1.php">마이피드</a></h1>
        <ol>
          <?php
          $list = scandir('data');
          $i = 0;
          while($i<count($list)){
            if($list[$i] != '.'){
              if($list[$i] != '..'){
              ?>
              <li><a href="main_1.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
              <?php
            }
          }
          $i = $i +1;
        }
        ?>
        </ol>
        <h2>
          <?php
          if(isset($_GET['id'])){
            echo $_GET['id'];}
          else {echo "Welcome";}
          ?>
        </h2>
        <?php
        if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']); // echo data/id 값에 해당하는 파일의 내용, file_get_contents:전체파일을 문자열로 읽어들이는 PHP 함수
        }
        else {echo "Hello, PHP";}
        ?>
</body>
</html>
