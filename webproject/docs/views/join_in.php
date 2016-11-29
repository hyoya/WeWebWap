<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>회원가입 페이지</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="/front/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/bootstrap-3.3.2-dist/css/join_in.css" rel="stylesheet">

</head>
<body>

  <div class="total panel panel-danger">

    <div class="theader-title panel-heading"><h2>회원가입</h2></div>

    <div class="tbody panel-body">
      <form class="form-horizontal" action=" " method="post">

        <div class="form-group"><div class="col-sm-1"></div>
        <label for="id" class="col-sm-3 control-label">아이디</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="id" placeholder="아이디">
        </div><div class="col-sm-3"></div>
      </div>

      <div class="form-group"><div class="col-sm-1"></div>
      <label for="password" class="col-sm-3 control-label">비밀번호</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="password" placeholder="비밀번호">
      </div><div class="col-sm-3"></div>
    </div>

    <div class="form-group"><div class="col-sm-1"></div>
    <label for="name" class="col-sm-3 control-label">이름</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="name" placeholder="이름">
    </div><div class="col-sm-3"></div>
  </div>

  <div class="form-group"><div class="col-sm-1"></div>
  <label for="birth" class="col-sm-3 control-label">생년월일</label>
  <div class="col-sm-4">
    <input type="date" class="form-control" id="birth" placeholder="생년월일">
  </div>
  <div class="checkbox col-sm-4">
    <label><input type="checkbox" name="gender" value="man" >남자&nbsp;</label>
    <label><input type="checkbox" name="gender" value="female">여자</label>
  </div>
</div>

<div class="form-group"><div class="col-sm-1"></div>
<label for="phonenumber" class="col-sm-3 control-label">휴대폰 번호</label>
<div class="col-sm-5">
  <input type="text" class="form-control" id="phonenumber" placeholder="휴대폰 번호">
</div><div class="col-sm-3"></div>
</div>

<div class="form-group"><div class="col-sm-1"></div>
<label for="email" class="col-sm-3 control-label">이메일</label>
<div class="col-sm-5">
  <input type="email" class="form-control" id="email" placeholder="이메일">
</div><div class="col-sm-3"></div>
</div>

<div class="form-group"><div class="col-sm-1"></div>
<label for="introduction" class="col-sm-3 control-label">소개<br></label>
<div class="col-sm-5">
  <textarea id="introduction"  class="form-control" rows="6" cols="40" placeholder="자기소개 입력!"></textarea>
</div><div class="col-sm-3"></div>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-default" value="회원가입">&nbsp;
  <a href="#" class="btn btn-default">취소</a>
</div>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/front/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

</body>
</html>