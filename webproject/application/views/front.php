<!DOCTYPE html>
<html>
<head>
    <title>WWW</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/front_css.css" rel="stylesheet">
</head>
<body class="container-fluid">

<div id="head" class="container-fluid">
    <a href="#"><img class="img-responsive col-sm-3 col-xs-5" src="/resource/icon/wwwMark2.png" id="logo"></a>
</div>



<div class="container">
    <section id="box" class='row'>
        <div id="information" class="col-md-5 col-sm-10 col-sm-offset-1 col-xs-12">

            <form action="./inside.php">
             <div class="form-group">
                <label class="logLabel" for="inputID">ID</label>
                <input type="id" class="form-control" id="inputID" placeholder="아이디를 입력하세요">
              </div>
              <div class="form-group">
                <label for="inputPwd" class="logLabel">Password</label>
                <input type="password" class="form-control" id="inputPwd" placeholder="비밀번호를 입력하세요">
              </div>
              <div id="info_box" class="form-group">
                <button type="submit" class="btn btn-primary">로그인</button>
                <button class="btn btn-info">가입하기</button>
                </div>
            </form>

        </div>

        <div id="caption" class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12">
            <div id="cap_box">
                <h1>WeWebWap</h1>
                <h4>코딩이 하고싶은</br></h4>
                <h4>개발자들의 이야기.</h4>
            </div>
        </div>
    </section>
</div>

</body>
</html>