<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쇼핑몰</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function check_input(){
            if(!document.member.id.value){
                alert("아이디를 입력하세요!");
                document.member.id.focus();
            return;  
            }
            if(!document.member.pass.value) {
                alert("비밀번호를 입력하세요!");
                document.member.pass.focus();
            return;
            }
            if(!document.member.pass_confirm.value) {
                alert("비밀번호확인을 입력하세요!");
                document.member.pass_confirm.focus();
            return;
            }
            if(!document.member.email.value) {
                alert("이메일 주소를 입력하세요!");
                document.member.email.focus();
            return;
            }
            if(document.member.pass.value !=document.member.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.member.pass.focus();
                document.member.pass_select();
                return;
            }
            document.member,submit();
        }
    </script>
</head>
<body>
<form name="member" action="insert.php" methot="post"></form>
<h2>회원가입</h2>
<ul class="join_form">
    <li>
        <span class="coll">아이디</span>
        <span class="col2"><input type="text" name="id"></span>
        <span class="col3"><button type="button" onclick="check_id()">중복체크
    </button></span>
    </li>
    <li>
        <span class="coll">비밀번호</span>
        <span class="col2"><input type="password" name="pass"></span>
    </li>
    <li>
        <span class="coll">비밀번호 확인</span>
        <span class="col2"><input type="password" name="pass"></span>
    </li>
    <li>
        <span class="coll">이름</span>
        <span class="col2"><input type="text" name="name"></span>
    </li>
    <li>
        <span class="coll">이메일</span>
        <span class="col2"><input type="text" name="email"></span>
        <span class="col3"></span>
    </li>
</ul>
<ul class="buttons">
    <li><button type="button" onclick="check_input()">저장하기
</button></li>
    <li><button type="button" onclick="reset_form()">취소하기
</button></li>
</ul>
</body>
</html>