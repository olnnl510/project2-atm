<?php
include_once "db.php";

function ins_user(&$param) {
    $email = $param["email"];
    $upw = $param["upw"];
    $nm = $param["nm"];
    $intro = $param["intro"];

    $conn = get_conn();
    $sql = 
    "   INSERT INTO t_user 
        (email, upw, nm)
        VALUES
        ('$email', '$upw', '$nm')
    ";        
    $result = mysqli_query($conn, $sql);
    //쿼리를 실행하기 위해서는 커넥션 정보$conn와 실행시킬 쿼리$sql가 있어야함
    mysqli_close($conn);
    return $result;
 }

function sel_user(&$param) {
    /*선언부는 안 바뀌면 좋음 바뀔때는 변수가 달라질때임
    얘는 섭종까지 살아숨쉬는 유기물.
    */
    //& 주소값 복제, 안 하면 전부다 복사됨
    $email = $param["email"];
    $sql = 
    "   SELECT i_user, email, upw, nm, intro, profile_img
        FROM t_user
        WHERE email = '$email'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
    //$result를 호출한 곳(mysqli_fetch_assoc)으로 리턴(return)한다
 }

 //
 function upd_profile_img(&$param) {
    $sql ="UPDATE t_user
            SET profile_img = '{$param['profile_img']}'
            WHERE i_user = {$param["i_user"]}";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
 }