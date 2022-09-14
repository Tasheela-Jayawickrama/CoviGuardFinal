<!doctype html>
<html lang="en">
<head>
    <style>
        .col {
            height: 250px;
            border: 2px solid black;
            margin: 10px;

        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .col h1 {
            font-size: 30px;
            font-weight: 900;
            text-transform: capitalize;
        }

        .fa-solid {
            font-size: 100px;
            margin: 5px;
        }

        .fa-puzzle-piece {
            color: blue;
        }

        .fa-microscope {
            color: yellow;
        }

        .fa-vial-virus {
            color: red;
        }

        .fa-stethoscope {
            color: orange;
        }

        .fa-globe {
            color: green;
        }

        .fa-comment-medical {
            color: purple;
        }

        .fa-truck-medical {
            font-size: 80px;
            color: red;
            font-weight: 900;
        }

        .fa-phone-flip {
            font-size: 30px;
            color: #2563eb;
        }

        .emergency_row {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .emergency_text h1 {
            letter-spacing: 10px;

        }

        .emergency_text_number {
            font-size: 50px;
            font-weight: 900;
            color: blue;
            letter-spacing: 2px;
        }

    </style>
</head>
<body>

<div class="user-body-outer">
    <div class="main-box">
        <div class="container text-center">
            <div class="row">
                <div class="col box">
                    <h1>Symptoms</h1>
                    <a href="{{route('symptoms')}}"><i class="fa-solid fa-puzzle-piece"></i></a>
                </div>
                <div class="col box">
                    <h1>Testing Services</h1>
                    <a href="{{route('lung_test')}}"><i class="fa-solid fa-microscope"></i></a>

                </div>
                <div class="col box">
                    <h1>Vaccination Appointment</h1>
                    <a href="{{route('vaccination_appointments')}}"><i class="fa-solid fa-vial-virus"></i></a>

                </div>
            </div>
            <div class="row">
                <div class="col box">
                    <h1>Contact Doctor</h1>
                    <a href="{{route('appointmentpage')}}"><i class="fa-solid fa-stethoscope"></i></a>
                </div>
                <div class="col box">
                    <h1>News</h1>
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="col box">
                    <h1>Chat With Us</h1>
                    <a href="{{route('chatify')}}"><i class="fa-solid fa-comment-medical"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col emergency_row">
                    <a href=""><i class="fa-solid fa-truck-medical"></i></a><span class="emergency_text"><h1>For Emergencies Call <a
                                href="tel:1990"><span class="emergency_text_number">1990</span><i
                                    class="fa-solid fa-phone-flip"></i></a></h1></span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
