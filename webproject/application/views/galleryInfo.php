<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Gallery</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/galleryInfo.css" rel="stylesheet">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1 col-xs-1"></div>
      <div class="col-sm-9 col-xs-9" id="col">
        <div class="row">
          <header class="g_menu">
            <h2 id="g2menu">갤러리</h2>
          </header>

          <div class="row">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="caro">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/resource/img/1.jpeg">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="/resource/img/2.jpeg">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>

                <div class="item">
                  <img src="/resource/img/3.jpeg">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>

                <div class="item">
                  <img src="/resource/img/4.jpeg">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="col-sm-1 col-xs-1"></div>
    </div>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">

  </script>

  <script src="/js/bootstrap.min.js">
    $(“.carousel”).carousel({
      interval: 5000
    });

  </script>
</body>
</html>