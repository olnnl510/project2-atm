<?php
    session_start();
    $login_user = $_SESSION["login_user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/9abf43b298.js" crossorigin="anonymous"></script>
  <title>main1</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="a_header">
        <div class="a_header_1">
          <div class="a_header_1_1">
            <img src="img/profile/atm_basic.png" class="profile">
          </div>
          <div class="a_header_1_2">
            <a href="login.php">로그인</a>
            <a href="logout.php">로그아웃</a>
            <a href="join.php">회원가입</a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="a_main">
        <div class="a_main1">
          <div class="a_main1-1">
            <span class="a_main1_11">본인주소본인주소본인주소</span>
            <span>
              <a href="#"><img src="img/fb_share.png" class="shareimg1"></a>
              <a href="#"><img src="img/tw_share.png" class="shareimg2"></a>
              <a href="#"><img src="img/kt_share.png" class="shareimg3"></a>
              <a href="#"><img src="img/url_share.png" class="shareimg4"></a>
            </span>
          </div>
          <div class="a_main1-2">
            <form action="write_proc.php" method="post">
              <div><textarea name="question" placeholder="질문을 입력해주세요."></textarea></div>
              <div>
                  <input type="submit" value="질문하기">
                  <input type="reset" value="초기화">
              </div>
            </form>
          </div>
        </div>
        <div class="a_main2">
          <!-- 페이지나누기 기능 -->
          <!-- <button>답변완료질문</button>
          <button>새질문</button> -->
          <div class="a_main2_1">답변완료</div>
          <div class="a_main2_2">새질문</div>
        </div>
        <div class="a_main3">
          <!-- 리스트 뿌리기 -->
          <table>
            <thead>
              <tr>
                <th>글번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>등록일시</th>
              </tr>
            <thead>
              <tbody>
                <tr>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                </tr>
                <tr>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                </tr>
                <tr>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                </tr>
                <tr>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                </tr>
                <tr>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                  <td>db연결</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </main>
    <footer class="a_footer">
        <div class="a_footer1"><a href="href.php"><i class="fa-solid fa-house"></i></a></div>
        <div class="a_footer2"><a href="myprofile.php"><i class="fa-solid fa-user"></i></a></div>
        <div class="a_footer3"><a href="new_noti.php"><i class="fa-solid fa-bell"></i></a></div>
    </footer>
  </div>
</body>
</html>