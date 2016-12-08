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
        <h4><b>댓글</b></h4>
        <thead>
          <tr class="row">
            <th class="col-md-2 col-xs-2">번호</th>
            <th class="col-md-6 col-xs-6">내용</th>
            <th class="col-md-2 col-xs-2">등록일</th>
            <th class="col-md-2 col-xs-2">게시판</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-md-2 col-xs-2">15</td>
            <td class="col-md-6 col-xs-6">댓글쓰기1</td>
            <td class="col-md-2 col-xs-2">2000.01.01</td>
            <td class="col-md-2 col-xs-2">게시판</td>
          </tr>
          <tr class="row">
            <td class="col-md-2 col-xs-2">21</td>
            <td class="col-md-6 col-xs-6">댓글쓰기2</td>
            <td class="col-md-2 col-xs-2">2000.02.02</td>
            <td class="col-md-2 col-xs-2">게시판</td>
          </tr>
          <tr class="row">
            <td class="col-md-2 col-xs-2">13</td>
            <td class="col-md-6 col-xs-6">댓글쓰기3</td>
            <td class="col-md-2 col-xs-2">2000.03.03</td>
            <td class="col-md-2 col-xs-2">갤러리</td>
          </tr>
          <tr class="row">
            <td class="col-md-2 col-xs-2">16</td>
            <td class="col-md-5 col-xs-5">댓글쓰기4</td>
            <td class="col-md-2 col-xs-2">2000.04.04</td>
            <td class="col-md-3 col-xs-3">갤러리</td>
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
