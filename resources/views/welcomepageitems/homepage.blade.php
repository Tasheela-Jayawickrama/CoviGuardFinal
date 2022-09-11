<!doctype html>
<html lang="en">
<head>
    @include('layouts.all-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .home-page-outer{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }
        .row{
            padding: 30px;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .description{
            text-align: justify;
        }
        .home-page-right{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .home-title{
            font-size:50px;
            text-transform: capitalize;
            color: blue;
            font-weight: 900;
        }
    </style>
</head>
<body>
<section id="home-section">
    <div class="home-page-outer outer-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-page-left">
                    <h1 class="home-title">together we fight against to covid-19.</h1>
                    <p class="description">Coronavirus disease 2019 (covid-19 or simply covid) is a contagious
                        disease
                        caused by severe acute respiratory syndrome coronavirus 2 (sars-cov-2).
                        The first known case was identified in Wuhan, China, in December 2019.
                        The disease has since spread worldwide, leading to an ongoing pandemic. Symptoms of covid 19
                        are variable
                        ,but often include fever cough, headache, fatigue, breathing difficulties, and loss of smell
                        and taste.
                        Symptoms may begin one to fourteen days after exposure to the virus.
                        at least a third of people who are infected do not develop noticeable symptoms.
                    </p>
                    <div class="home-page-button">
                        <button class="btn btn-primary">see more</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg12">
                <div class="home-page-right">
                    <img src="images/home-page-image.png" alt="Home-page-image" class="home-image" width="400px">
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
