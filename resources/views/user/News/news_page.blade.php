@include('layouts.all-css')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Ubuntu, serif;
        }

        .slider-row {
            padding: 10px;
        }

        .card-body {
            width: 100%;
            height: 200px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5)), url("https://thumbs.dreamstime.com/b/rainbow-love-heart-background-red-wood-60045149.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 5px;
        }

        .col,
        .row {
            padding: 0;
            margin: 0;
        }

        .title-row {

        }
        .news-title-text{
            font-family: Ubuntu;
            color: blue;
            font-weight: 900;
        }
        .news-navbar{
            background-color: #ccddff;

        }
    </style>
</head>
<body>
{{--------------------------------news navbar-------------------------------------------}}
<nav class="navbar navbar-expand-lg news-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" width="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-news">
                        <button class="btn btn-outline-primary">Local News</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#global-news">
                        <button class="btn btn-outline-primary">Global News</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('userDashBoard')}}">
                        <button class="btn btn-outline-primary">Dash Board</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{--------------------------------news navbar-------------------------------------------}}
{{--------------------------------carousal page-------------------------------------------}}
<div class="container-fluid">
    <div class="row">
        <div class="col-7 slider-row">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img
                            src="https://media.istockphoto.com/photos/mountain-landscape-picture-id1170655400?k=20&m=1170655400&s=612x612&w=0&h=Cz9OZXmfgtjEb-0yAkSG1j_Yb182jlUfuTuuia3LGQQ="
                            class="d-block w-100" alt="..." height="617px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img
                            src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w="
                            class="d-block w-100" alt="..." height="617px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="2000">
                        <img
                            src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?b=1&k=20&m=517188688&s=612x612&w=0&h=x8h70-SXuizg3dcqN4oVe9idppdt8FUVeBFemfaMU7w="
                            class="d-block w-100" alt="..." height="617px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-5">
            <div class="row pt-2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-light">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row title-row mt-5" id="local-news">
        <h1 class="news-title-text">Local Covid News</h1>
    </div>
    <div class="row local-news-row">
        <div class="col-8">
            @include('user.News.news-page-carousal')
        </div>
        <div class="col-4">
            @include('user.News.news_page_local-contacts')
        </div>
    </div>
    <div class="row title-row mt-5" id="global-news">
        <h1 class="news-title-text">Global Covid News</h1>
    </div>


    <div class="row world-news">
        @include('user.News.world_news_page')
    </div>
</div>
</div>
{{--------------------------------carouseal page-------------------------------------------}}

@include('layouts.all-js')
</body>
</html>
