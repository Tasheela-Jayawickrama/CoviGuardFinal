<!doctype html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .about-page-outer {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .row {
            width: 100%;
            height: 100%;
        }

        .about-details{
            display: flex;
            justify-content: center;
        }
        .title h1{
            color: darkblue;
            font-weight: 900;
            font-size: 50px;
            font-family: Ubuntu, serif;
        }
        .aboutus-description{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            font-family: Ubuntu, serif;
        }
        .aboutus-description h1{
            font-size: 60px;
            color: #2563eb;
        }
        .aboutus-description p{
            font-size: 17px;
            color: #1a202c;
        }
    </style>
</head>
<body>

<section id="about-section">

    <div class="title text-center"><h1>About-us</h1></div>
    <div class="about-page-outer outer-1">
        <div class="about-details">
            <div class="row">
                <img src="images/about-us-image.jpg" alt="aboutImage" class="about-us-img">
            </div>
            <div class="row">
                <div class="aboutus-description">
                    <h1>Here a little bit about covi guard</h1>
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
                </div>
            </div>
        </div>
</section>
</body>
</html>
