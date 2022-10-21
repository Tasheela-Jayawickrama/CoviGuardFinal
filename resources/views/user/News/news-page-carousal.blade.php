<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        @-webkit-keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .slider {
            background: transparent;
            height: 400px;
            margin: 0;
            overflow: hidden;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .slider .slide-track {
            -webkit-animation: scroll 120s linear infinite;
            animation: scroll 120s linear infinite;
            display: flex;
            width: calc(250px * 10);
        }

        .slider-outer{
            padding: 0 20px;
            border: 1px solid black;
            border-radius: 5px;
        }

        .news-box {
            width: 200px;
            height: 300px;
            border: 2px solid black;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="slider-outer">
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>

            <div class="slide">
                <div class="news-box">

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
