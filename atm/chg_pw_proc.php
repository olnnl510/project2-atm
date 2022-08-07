<?php
//chg_pw.php에서 저장하기 버튼 누를시 동작하며 t_user 해당 row의 upw 컬럼 수정됨
//동작 후 myprofile.php로 돌아감

include_once "db/db_user.php";
session_start();
$login_user = &$_SESSION["login_user"];
$i_user = $login_user["i_user"];

$upw = $_POST["upw"];
$new_upw = $_POST["new_upw"];
$confirm_new_upw = $_POST["confirm_new_upw"];
$param = [
    // "upw" => $upw,
    "new_upw" => $new_upw,
    // "confirm_new_upw" => $confirm_new_upw,
    "i_user" => $i_user,
];

// print $upw . "<br>";
print $login_user["upw"] . "<br>";
// print $new_upw . "<br>";
// print $confirm_new_upw . "<br>";

// 입력한 비밀번호와 현재 비밀번호가 일치하는지
if ($upw === $login_user["upw"] && $new_upw === $confirm_new_upw) {

    $result = upd_upw($param);

    Header("Location: main.php?i_user=$i_user");

    // echo "비밀번호 변경 성공!";
} else {
    echo "비밀번호 변경 실패!";
}
