  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
       <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/board.css" rel="stylesheet">
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

          <div class="container-fluid" id="table">
            <div class="table-responsive">
              <table class="table table-hover ">
                <tr id="tr1">
                  <td class="td1">번호</td>
                  <td class="td2">제목</td>
                  <td class="td3">글쓴이</td>
                </tr>
                <tr>
                  <td class="td1">1</td>
                  <td class="td2"><a href="#">공지1</a></td>
                  <td class="td3">이현영</td>
                </tr>
                <tr>
                  <td class="td1">2</td>
                  <td class="td2"><a href="#">공지2</a></td>
                  <td class="td3">서효정</td>
                </tr>
                <tr>
                  <td class="td1">3</td>
                  <td class="td2"><a href="#">공지3</a></td>
                  <td class="td3">정재훈</td>
                </tr>
              </table>
            </div>
            <div id="write_btn">
              <a href="textEdit.html"><button type="button" class="btn btn-default">글쓰기</button></a>
            </div>
          </div>


          <div class="row" id="pagenation">
            <nav><ul class="pagination">
              <li><a href="#"><<</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">>></a></li>
            </ul></nav>
          </div>
        </div>

      </div>
  </body>
  </html>