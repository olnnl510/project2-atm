<?php 
    include_once "db/db_user.php";
    session_start();
    //login.php 에서 넘어오는 값을 적절한 변수에 담는다.
    //변수의 값을 출력.
    $email = $_POST["email"];
    $upw = $_POST["upw"];

    echo "email : ", $email, "<br>";
    echo "upw : ", $upw, "<br>";

    $param = [
        "email" => $email,        
    ];

    $result = sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die;
    }

    echo "i_user : " , $result["i_user"], "<br>";
    echo "pw : " , $result["upw"], "<br>";   
    
    //비밀번호가 맞으면 "main_1.php로 주소 이동"
    //비밀번호가 다르면 "login.php로 주소 이동"

    if($upw === $result["upw"]) { //로그인 성공!!       
        $_SESSION["login_user"] = $result;
        header("Location: main_1.php");
    } else {
        header("Location: login.php");
    }
