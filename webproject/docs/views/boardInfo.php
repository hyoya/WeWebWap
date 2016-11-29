  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="/front/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/bootstrap-3.3.2-dist/css/boardInfo.css" rel="stylesheet">
    <title>Board</title>
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
          <header class="h_info">
            <h2 id="h2info">공지게시판</h2>
          </header>

          <div class="container-fluid">
            <h3 id="file_name">파일 제목</h3>
            <hr/>
            <p id="file_content">파일 내용</p>


          </div>



        </div>

      </div>
  </body>
  </html>