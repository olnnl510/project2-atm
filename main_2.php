<?php
//$list 안에 atm이미지 / $question / $que_at / form action="del.php"

// 배경, 입력창 #eee 
// 민트 #0aaaaa
// 흰색 #fff
// 기본 글자 #666666
//    * 수정 삭제 알림 등의 버튼, 상 하단 푸터 글자는 흰색

// atm로고 사이즈 500px * 500px
// atm 기본 프사 로고 사이즈 200px * 200px
// 아이콘 사이즈 200px * 200px

include_once "db_board.php";
session_start();

if(isset($_SESSION["login_user"])) {
    $login_user=$_SESSION["login_user"];
    $nm=$login_user["nm"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9abf43b298.js" crossorigin="anonymous"></script>
    <title>ATM 익명질문</title>
    <style>
        .tab_menu{position:relative;}
        .tab_menu .list{overflow:auto;}
        .tab_menu .list li{float:left; margin-right:14px;}
        .tab_menu .list .btn{font-size:13px;}
        .tab_menu .list .cont{display:none; position:absolute; background:#eee; color:#fff; text-align:center; width:250px; height:100px; line-height:100px;}
        .tab_menu .list li.is_on .btn{font-weight:bold; background-color:#0aaaaa; color:#fff;}
        .tab_menu .list li.is_on .cont{display:block;}
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <div>
                <?php
                    $session_img=$_SESSION["login_user"]["profile_img"];
                    $profile_img=$session_img==null 
                    ? "basic.jpg" 
                    : $_SESSION["login_user"]["i_user"]."/".$session_img;
                ?>
                <div class="circular__img wh40">
                    <img src="/atm/img/profile/<?=$profile_img?>">
                </div>
                <?=isset($_SESSION["login_user"]) ? "<div>".$nm."</div><br>".$intro : "익명"?>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="join.php">회원가입</a>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <div class="main1">
                <div>
                    <?= "https://asktm.kr/$i_user" ?>
                    <a href="#"><img src="https://asked.kr/img/fb_share.png" class="shareimgfir"></a>
                    <a href="#"><img src="https://asked.kr/img/tw_share.png" class="shareimg"></a>
                    <a href="#"><img src="https://asked.kr/img/kt_share.png" class="shareimg"></a>
                    <a href="#"><img src="https://asked.kr/img/url_share.png" class="shareimg"></a>
                </div>          
                <form action="write_proc.php" method="post">    
                    <div>
                        <textarea name="question" placeholder="질문을 입력해주세요."></textarea>
                        <input type="submit" value="질문하기">
                    </div>
                </form>
            </div>
            <div class="main2">
                <div class="tab_menu">
                    <ul class="list">
                        <li class="is_on">
                            <a href="#tab1" class="btn">답변완료</a>
                            <a href="detail.php"> 
                                <div id="tab1" class="cont">
                                    <table>
                                        <?php foreach($list as $item) { ?>
                                            <td><img src="img/atm_basic.png"><?=$item["question"]?></td>
                                            <td><img src="/atm/img/profile/<?=$profile_img?>"><?=$item["nm"]?><?=$item["ans_at"]?><?=$item["answer"]?></td>;
                                            <td><a href="del.php"><img src="img/del.png"></a></td>
                                        <?php } ?>
                                    </table>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2" class="btn">새질문</a> 
                            <a href="answer.php">
                                <div id="tab2" class="cont">
                                    <table>
                                        <?php foreach($list as $item) { ?>
                                            <td><img src="img/atm_basic.png"></td>
                                            <td><?=$item["question"]?></td>;
                                            <td><?=$item["que_at"]?></td>
                                            <td><a href="del.php"><img src="img/del.png"></a></td>
                                        <?php } ?>
                                    </table>
                                </div>
                            </a>
                        </li>
                     </ul>
                 </div>
            </div>
        </main>
        <footer>
            <a href="main.php"><i class="fa-solid fa-house"></i><br>내질문함<br></a>
            <a href="myprofile.php"><i class="fa-solid fa-user"></i><br>프로필설정<br></a>
            <a href="new_noti.php"><i class="fa-solid fa-bell"></i><br>알림<br></a>
        </footer>
    </div>

    <script>
        const tabList = document.querySelectorAll('.tab_menu .list li');
        
        for(var i = 0; i < tabList.length; i++){
        tabList[i].querySelector('.btn').addEventListener('click', function(e){
            e.preventDefault();
            for(var j = 0; j < tabList.length; j++){
            tabList[j].classList.remove('is_on');
            }
            this.parentNode.classList.add('is_on');
        });
        }
  </script>
</body>
</html>