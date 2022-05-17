<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <tbody> <!-- foreach 돌면서 list배열의 내용물을 $item에다가 하나하나 넣는것-->
    <?php foreach($list as $item) { ?> <!-- 배열 as 값 -->
        <tr>
            <td><?=$item["i_board"]?></td>
            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
            <td><?=$item["nm"]?></td>
            <td><?=$item["created_at"]?></td>
        </tr>
    <?php } ?>
  </tbody>
</body>
</html>