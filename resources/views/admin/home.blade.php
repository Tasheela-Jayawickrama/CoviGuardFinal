<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png">
    <title>Admin</title>
    <style>

        .inner-items {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;


        }

        .left {
            width: 100%;
            height: 100%;
        }

        .navbar-brand {
            font-family: Ubuntu;
            font-size: 30px;
            font-weight: 900;
        }

        .navbar-nav .nav-link {
            font-family: Ubuntu;
            font-weight: 900;
            color: darkblue;
        }

        .component-area {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            margin: 10px 20px;
            width: 450px;
            height: 550px;
            background-size: cover;
            background-position: center;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .box a {
            color: white;
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 5px;

        }

        .doc-box {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/admin-doctor.jpg');

        }

        .citi-box {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/admin-citizen.jpg');

        }

        .appoint-box {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/admin-appointment.jpg');

        }

    </style>
</head>


<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('main_page')}}"><img src="images/logo.png" class="logo-image" alt="logo"
                                                                   width="50px"></a>
        <a class="navbar-brand" href="{{route('admin_dashboard')}}">Admin DashBoard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('add_doctor_view')}}">Manage Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Manage Citizens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('show_appointment')}}">Manage Appointments</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div>
                <x-app-layout></x-app-layout>
            </div>
        </div>
    </div>
</nav>
<div class="body-pane">
    <div class="row">
        <div class="inner-items col-lg-12 col-md-8 col-sm-6">
            <div class="row left">
                <div class="col-lg-12 col-md-8 col-sm-6">
                    <div class="component-area">
                        <div class="box doc-box">
                            <a href="{{route('add_doctor_view')}}">Doctors</a>
                        </div>
                        <div class="box citi-box">
                            <a href="">Citizens</a>
                        </div>
                        <div class="box appoint-box">
                            <a href="{{route('show_appointment')}}">Appointments</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
