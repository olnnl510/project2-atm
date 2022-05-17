<?php
    include_once "db/db_board.php";

    session_start();
    $login_user = $_SESSION["login_user"];

    $list = sel_board_list($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>main1</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="a_header">
        <div class="a_header_1">
          <div class="a_header_profile">
            <img src="img/profile/atm_basic.png" class="profile">
          </div>
          <nav class="a_header_menu">
          <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="logout.php">로그아웃</a>
          <?php } else { ?>
            <a href="login.php">로그인</a>
            <a href="join.php">회원가입</a>
          <?php } ?>   
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="a_main">
        <div class="a_main_write">
          <div class="a_main_write_1">
            <span class="a_main_write_1_url">본인주소본인주소본인주소</span>
            <span class="abc">
              <a href="#"><img src="img/fb_share.png" class="shareimg"></a>
              <a href="#"><img src="img/tw_share.png" class="shareimg"></a>
              <a href="#"><img src="img/kt_share.png" class="shareimg"></a>
              <a href="#"><img src="img/url_share.png" class="shareimg"></a>
            </span>
          </div>
          <div class="a_main_write_2">
            <form action="write_proc.php" method="post">
              <div class="a_main_write_2_txt"><textarea name="question" placeholder="질문을 입력해주세요."></textarea></div>
              <div class="a_main_write_2_button">
                  <input type="submit" value="질문하기">
                  <input type="reset" value="초기화">
              </div>
            </form>
          </div>
        </div>
        <div class="main_list">
          <!-- 리스트 뿌리기 -->
          <div class="tabs">
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">답변완료</label>
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">새질문</label>

            
            <div class="tab_content" id="all_content">

              <table>
                <tbody>
                <?php foreach($list as $item) { ?> <!-- 배열 as 값 -->
                    <tr>
                        <td>
                          <a href="detail.php">
                            <img src="img/profile/atm_basic.png" class="main_list_img">
                            <?=$item["question"]?>
                          </a>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <?=$item["profile_img"]?>
                        <?=$item["nm"]?>
                        <?=$item["ans_at"]?>
                        <?=$item["answer"]?>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>
            <div class="tab_content" id="programming_content">
                우원님 코드 주시면 붙이기
            </div>
          </div>

        </div>
      </div>
    </main>
    <footer class="a_footer">
        <div class="a_footer_answer"><a href="main_1.php"><img src="img/answer.png" class="a_footer_answer_img"></a></div>
        <div class="a_footer_profile"><a href="myprofile.php"><img src="img/profile.png" class="a_footer_profile_img"></a></div>
        <div class="a_footer_notice"><a href="new_noti.php"><img src="img/notice.png" class="a_footer_notice_img"></a></div>
    </footer>
  </div>
</body>
</html>