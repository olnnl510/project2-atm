<?php
include_once "db/db_board.php"; // include = import = require

session_start();
$nm = "";
if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}
$list = sel_board_list($param); // 밑에서 반복문으로 뿌림
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>

<body>
    <div id="container">
        <header>
            <?= isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <a href="list.php">리스트</a>
                <?php if (isset($_SESSION["login_user"])) { ?>
                    <!-- isset 변수값이 존재한다면-->
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>글쓴이</th>
                        <th>등록일시</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach 돌면서 list배열의 내용물을 $item에다가 하나하나 넣는것-->
                    <?php foreach ($list as $item) { ?>
                        <!-- 배열 as 값 -->
                        <tr>
                            <td><?= $item["i_board"] ?></td>
                            <td><a href="detail.php?i_board=<?= $item["i_board"] ?>"><?= $item["title"] ?></a></td>
                            <td><?= $item["nm"] ?></td>
                            <td><?= $item["created_at"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>

<!--
    / 붙이면 앞에꺼 다 사라지고 절대주소값 (root에 위치해야함)
    즉 처음부터 주소값 다 써줘야함.
    / 안붙이면 1차주소 살아있음~

    - 3항식 문법 (if else 문을 간단하게 바꿔놓은것)
    num2 = num1? 100 : 200;

    while($row = mysqli_fetch_assoc($list))
                    {
                        $i_board = $row['i_board'];
                        $title = $row['title'];
                        $nm = $row['nm'];
                        $created_at = $row['created_at'];
                        print "<tr>";
                        print "<td>${i_board}</td>";
                        print "<td>${title}</td>";
                        print "<td>${nm}</td>";
                        print "<td>${created_at}</td>";
                        print "</tr>";
                    }

                    < ? p h p foreach($list as $item) {
                        print "<tr>";
                        print "<td>$item['i_board']</td>";
                        print "<td>$item['title']</td>";
                        print "<td>$item['nm']</td>";
                        print "<td>$item['created_at']</td>";
                        print "</tr>";
                    }
-->

<!--
    PHP에서 foreach 문은 배열의 원소나, 객체의 프로퍼티 수만큼 반복하여 동작하는 구문입니다.
foreach는 배열의 원소나, 객체의 프로퍼티에 값 하나하나에 대해 처리하는 경우에 for 문보다 깔끔한 코드를 만들어 낼 수 있습니다.

방법1 : Value만 가져오는 경우
foreach($array as $value)

출처: https://extbrain.tistory.com/24 [확장형 뇌 저장소]
-->