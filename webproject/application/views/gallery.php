<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/gallery.css" rel="stylesheet">
    <title>Gallery</title>
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
                </div>

                <div class="row" id="thum">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="/index.php/Welcome/galleryInfoPage"><img src="/resource/img/1.jpeg"></a>
                            <div class="caption">
                                <a href="#"><h3>Thumbnail label</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="/resource/img/2.jpeg"></a>
                            <div class="caption">
                                <a href="#"><h3>Thumbnail label</h3></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="/resource/img/3.jpeg"></a>
                            <div class="caption">
                                <a href="#"><h3>Thumbnail label</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="/resource/img/4.jpeg"></a>
                            <div class="caption">
                                <a href="#"><h3>Thumbnail label</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="write_btn">
                    <button type="button" class="btn btn-default">글쓰기</button>
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
            <div class="col-sm-1 col-xs-1"></div>
        </div>
    </div>

</body>
</html>