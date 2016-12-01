<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Board Editor</title>
  <!-- Make sure the path to CKEditor is correct. -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
  <script src="/nicEdit/nicEdit.js">
  </script>
</head>
<body>
  <div class="row" id="wrapper">
    <!--Sidebar-->
    <div id="sidebar" class="col-sm-3 col-xs-3" >
      <div class="inner">
        <div class="row">
          <header class="h_menu">
            <h2 id="h2menu">Menu</h2>
          </header>
        </div>
        <!--Menu-->
        <nav id="sidemenu">
          <ul class="nav">
            <li><a class="sideli" href="#">공지게시판</a></li>
            <li><a class="sideli" href="#">자유게시판</a></li>
            <li><a class="sideli" href="#">프로젝트</a></li>
          </ul>
        </nav>


        <div class="wrap">
          <form class="form-inline">
            <input id="searchText" type="text" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-default" id="searchBtn">
              <div class="glyphicon glyphicon-search"></div>
            </button>
          </form>
        </div>
      </div>
    </div>

    <!--main-->
    <div id="main" class="col-sm-9 col-xs-9">

      <div class="row">
        <header class="h_info">
          <h2 id="h2info">글쓰기</h2>
        </header>
      </div>

      <div class="row">

        <div class="col-sm-1 col-xs-1"></div>
        <div class="col-sm-9 col-xs-9">
        <form>
          <B>제목</B> : <input type="text" class="form-control" placeholder="Text input">
            <hr/>
            <textarea name="editor1" id="editor1" cols="108%" rows="20%">
            </textarea>

          </form>
          <hr/>
          <input type="text" class="form-control" placeholder="Text input">
          <button type="button" class="btn btn-default">글쓰기</button>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-1 col-xs-1"></div>

    <script>
      bkLib.onDomLoaded(function() {
        nicEditors.editors.push(new nicEditor().panelInstance(document.getElementById('editor1')));});

    </script>
  </body>
  </html>