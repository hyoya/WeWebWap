<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입 페이지</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/register_form.css" rel="stylesheet">
  </head>
  <body>

  <div class="total panel panel-danger">

    <div class="theader-title panel-heading"><h2>회원가입</h2></div>

    <div class="tbody panel-body">
      <form id="form-validate" class="form-horizontal" action="/index.php/join" method="post">

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="id" class="col-md-3 col-xs-3 control-label">아이디</label>
          <div class="col-md-5 col-xs-5">
            <input type="text" name="ID" class="form-control" id="id" placeholder="아이디" required>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="password" class="col-md-3 col-xs-3 control-label">비밀번호</label>
          <div class="col-md-5 col-xs-5">
            <input type="password" name="PWD" class="form-control" id="password" placeholder="비밀번호" required>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="name" class="col-md-3 col-xs-3 control-label">이름</label>
          <div class="col-md-5 col-xs-5">
            <input type="text" name="Name" class="form-control" id="name" placeholder="이름" required>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="birth" class="col-md-3 col-xs-3 control-label">생년월일</label>
          <div class="col-md-4 col-xs-4">
            <input type="date" name="Birth" class="form-control" id="birth" placeholder="생년월일" required>
          </div>
          <div class="checkbox col-md-4 col-xs-4">
            <label><input type="radio" name="Gender" value="0" checked>남자</label>
            <label><input type="radio" name="Gender" value="1">여자</label>
          </div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="phonenumber" class="col-md-3 col-xs-3 control-label">휴대폰 번호</label>
          <div class="col-md-5 col-xs-5">
            <input type="text" name="PhoneNumber" class="form-control" id="phonenumber" placeholder="휴대폰 번호" required>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="email" class="col-md-3 col-xs-3 control-label">이메일</label>
          <div class="col-md-5 col-xs-5">
            <input type="email" name="Email" class="form-control" id="email" placeholder="이메일" required>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group"><div class="col-md-1 col-xs-1"></div>
          <label for="introduction" class="col-md-3 col-xs-3 control-label">소개<br></label>
          <div class="col-md-5 col-xs-5">
            <textarea id="introduction" name="Introduction" class="form-control" rows="6" cols="40" placeholder="자기소개 입력!" required></textarea>
          </div><div class="col-md-3 col-xs-3"></div>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-default" value="회원가입">&nbsp;
          <a href="#" class="btn btn-default">취소</a>
        </div>
      </form>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/css/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>
