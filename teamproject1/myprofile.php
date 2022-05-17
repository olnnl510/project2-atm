
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필설정</title>
    <style>
    .Title__top--name {
            font-size: 17px;
            font-weight: bold;
            color: #fff;
            background-color: #0aaaaa;
            text-align: center;
            line-height: 50px;
        }
    .Profile {
        color: #fff;
        background-color: #ffffff;
        text-align: center;
        line-height: 50px;
        }
    </style>
</head>
<body class="body">
    <div class="Title">
        <div class="Title__top--name">프로필설정</div>
    </div>
    <form action="myprofile_proc.php" method="post">
        <div class="Profile">
            <img src="img/ATM_basic.png">
            <!--
                db t_user 해당 로우의 profile_img 컬럼 값 불러오기
                css 가운데정렬
            -->
            <input type="file" name="img" accept="image/*">
            <!--
                db t_user 해당 로우의 profile_img 컬럼 값 불러오기(하단 저장하기 버튼 클릭시 입력되어있는 값으로 db 해당 row의 값 수정됨)
                css 프로필사진 우측 하단에 겹쳐 띄우기, 버튼 스타일 없애기, 선택된 파일 없음 문구 없애기.
            -->
        </div>
        <div>
        <!--css 이메일~소개 같은 클래스-->    
            <a>이메일 </a>
            <!--css 이메일, 주소 같은 클래스-->
            <a>회원이메일</a>
            <!--
                db t_user 해당 row의 email 값 불러오기
                css 
            -->
        </div>
        <div>
        <!--css 비밀번호 변경, 회원탈퇴 같은 클래스-->    
            <a>주소 </a>
            <!--css 이메일, 주소 같은 클래스-->
            <a>http://asktm.kr/$i_user</a>
            <!--
                $i_user 부분에 db t_user 해당 row의 i_user 값 불러오기
                css 
            -->
        </div>
        <div>
        <!--css 비밀번호 변경, 회원탈퇴 같은 클래스-->    
            <a>닉네임 </a>
            <!--css 닉네임, 소개, 비밀번호 변경, 회원탈퇴 같은 클래스-->
            <input type="text" value="회원 닉네임">
            <!--
                디폴트 value값 db t_user 해당 row의 nm 값, 수정가능. 하단 저장버튼 클릭시 입력되어있는 값으로 db 해당 row 값 수정됨.
                css 텍스트박스 테두리 없애기
            -->
        </div>
        <div>
        <!--css 비밀번호 변경, 회원탈퇴 같은 클래스-->    
            <a>소개 </a>
            <!--css 닉네임, 소개, 비밀번호 변경, 회원탈퇴 같은 클래스-->
            <input type="text" value="회원 소개글">
            <!--
                디폴트 value값 db t_user 해당 row의 intro 값, 수정가능. 하단 저장버튼 클릭시 입력되어있는 값으로 db 해당 row 값 수정됨.
                css 텍스트박스 테두리 없애기
            -->
        </div>
        <!-- 디폴트값 해당 회원 소개글 뜨도록, null일 시 '소개글을 작성해주세요. 뜨게. 수정가능 -->
        <div>개인정보</div>
        <!--css 단독 클래스--> 
        <div>
        <!--css 비밀번호 변경, 회원탈퇴 같은 클래스-->    
            <a>비밀번호 변경</a>
            <!--css 닉네임, 소개, 비밀번호 변경, 회원탈퇴 같은 클래스-->
            <input type="button" value=">" onClick="location.href='chg_pw.php'">
            <!--
                chg_pw.php페이지(비밀번호변경창)로 이동
                css
            -->
        </div>
        <div>
        <!--css 비밀번호 변경, 회원탈퇴 같은 클래스-->    
            <a>회원탈퇴</a>
            <!--css 닉네임, 소개, 비밀번호 변경, 회원탈퇴 같은 클래스-->
            <input type="button" value=">" onClick="location.href='delete_login.php'">
            <!--
                delete_login.php페이지(회원탈퇴창)로 이동
                css
            -->
        </div>
        <input type="submit" value="저장하기">
        <!-- 저장하기 버튼 클릭시 myprofile_proc.php 동작하면서 입력되어있는 내용으로 수정됨 -->
    </form>
    <div>
        <a href="">내질문함</a>
        <a href="">프로필설정</a>
        <a href="">알림</a>
        <!-- 메인 페이지랑 공유, 후순위로 구현 -->
    </div>
</body>
</html>