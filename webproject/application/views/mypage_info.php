<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Page - 개인정보</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mypage_info.css" rel="stylesheet">
  </head>
  <body>


  <div class="total panel panel-danger">

    <div class="theader row panel-heading">
      <div class="theader-title col-md-8 col-xs-8">
        <h2>My Page</h2>
      </div>
      <div class="theader-nav col-md-4 col-xs-4">
        <a href="#" class="btn btn-sm btn-warning">개인정보</a>
        <a href="#" class="btn btn-sm btn-warning">내가 쓴 글</a>
      </div>
    </div>

    <div class="tbody">

        <form class="form-horizontal" action=" " method="post">
          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="id" class="col-md-3 col-xs-3 control-label">아이디</label>
            <div class="col-md-5 col-xs-5">
              <input type="text" class="form-control" id="id" value="pknu"> <!-- value값을 DB에서 가져오기-->
            </div>
            <div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="nowpassword" class="col-md-3 col-xs-3 control-label">현재 비밀번호</label>
            <div class="col-md-5 col-xs-5">
              <input type="password" class="form-control" id="nowpassword" placeholder="현재 비밀번호를 입력하세요.">
            </div>
            <div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="newpassword1" class="col-md-3 col-xs-3 control-label">새 비밀번호</label>
            <div class="col-md-5 col-xs-5">
              <input type="password" class="form-control" id="newpassword1" placeholder="새 비밀번호를 입력하세요.">
            </div><div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="newpassword2" class="col-md-3 col-xs-3 control-label" >새 비밀번호</label>
            <div class="col-md-5 col-xs-5">
              <input type="password" class="form-control" id="newpassword2" placeholder="한번 더 입력하세요.">
            </div><div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="name" class="col-md-3 col-xs-3 control-label">이름</label>
            <div class="col-md-4 col-xs-4">
              <input type="text" class="form-control" id="name" value="홍길동">
            </div><label class="col-md-4 col-xs-4 control-label level">등급 : 일반회원</label>
          </div>

          <div class="form-group"><div class="col-sm-1"></div>
            <label for="birth" class="col-md-3 col-xs-3 control-label">생년월일</label>
            <div class="col-md-4 col-xs-4">
              <input type="date" class="form-control" id="birth" value="2000-01-01">
            </div>
            <div class="checkbox col-md-4 col-xs-4">
              <label><input type="checkbox" name="gender" value="man" checked>남자&nbsp;</label>
              <label><input type="checkbox" name="gender" value="female">여자</label>
            </div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="phonenumber" class="col-md-3 col-xs-3 control-label">휴대폰 번호</label>
            <div class="col-md-5 col-xs-5">
              <input type="text" class="form-control" id="phonenumber" value="012-3456-7890">
            </div><div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="email" class="col-md-3 col-xs-3 control-label">이메일</label>
            <div class="col-md-5 col-xs-5">
              <input type="email" class="form-control" id="email" value="pknu@pkun.com">
            </div><div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-1 col-xs-1"></div>
            <label for="introduction" class="col-md-3 col-xs-3 control-label">소개<br></label>
            <div class="col-md-5 col-xs-5">
              <textarea id="introduction"  class="form-control" rows="6" cols="40">홍길동입니다.</textarea>
            </div><div class="col-md-3 col-xs-3"></div>
          </div>

          <div class="form-group"><div class="col-md-8 col-xs-8"></div>
            <input type="submit" class="btn btn-default col-md-1 col-xs-1" value="수정">
          </div><div class="col-md-3 col-xs-3"></div>
        </form>

    </div>
  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/css/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
