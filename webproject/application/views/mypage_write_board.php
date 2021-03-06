<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Page - 내가 쓴 글</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mypage_write.css" rel="stylesheet">
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
    <div class="theader-write-nav">
      <a href="#" class="btn btn-sm btn-warning">게시판</a>
      <a href="#" class="btn btn-sm btn-warning">갤러리</a>
      <a href="#" class="btn btn-sm btn-warning">댓글</a>
    </div>
    <div class="tbody">
      <table class="table">
        <h4><b>게시판</b></h4>
        <thead>
          <tr class="row">
            <th class="col-md-2 col-xs-2">번호</th>
            <th class="col-md-6 col-xs-6">제목</th>
            <th class="col-md-4 col-xs-4">등록일</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-md-2 col-xs-2">1</td>
            <td class="col-md-6 col-xs-6">게시판 제목1</td>
            <td class="col-md-4 col-xs-4">2000.01.01</td>
          </tr>
          <tr class="row">
            <td class="col-md-2 col-xs-2">2</td>
            <td class="col-md-6 col-xs-6">게시판 제목2</td>
            <td class="col-md-4 col-xs-4">2000.02.02</td>
          </tr>
          <tr class="row">
            <td class="col-md-2 col-xs-2">3</td>
            <td class="col-md-6 col-xs-6">게시판 제목3</td>
            <td class="col-md-4 col-xs-4">2000.03.03</td>
          </tr>
        </tbody>
      </table>

      <div class="btn-toolbar">
          <a href="#" class="btn btn-default btn-xs">1</a>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/css/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
