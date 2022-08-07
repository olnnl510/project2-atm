<?php
include_once "db/db_user.php";
include_once "db/db_board.php";

//detail.php의 삭제버튼 클릭시 데이터베이스에서 t_board 해당 row 삭제

// 1. t_board에서 $i_user 관련 데이터 모두 삭제 (fk)
// 2. t_user에서 $i_user 삭제


session_start();
$login_user = $_SESSION["login_user"];
$i_user = $login_user["i_user"];

$email = $_POST["email"];
$upw = $_POST["upw"];

$param = [
    "i_user" => $i_user,
    "email" => $email,
    "upw" => $upw
];
if ($email === $login_user["email"] && $upw === $login_user["upw"]) {
    $result = del_board2($param);
    $result2 = del_user($param);
    // echo "성공적으로 탈퇴되었습니다.";

    header("Location: login.php");
} else {
    // header("Location: del_user.php");
    echo "회원정보가 일치하지 않습니다.";
}
?>

<!--
함수호출시
return값 있으면 =
없으면 그냥
-->