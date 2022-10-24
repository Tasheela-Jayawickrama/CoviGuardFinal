@include('admin.admin_body')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .count {
            padding-top: 10px;
        }

        .count .fa-solid {
            font-size: 25px;
        }

        .card-subtitle {
            color: black;
            width: 100%;
        }

        .count .fa-user {
            background-color: blue;
        }

        .count .fa-user-doctor {
            background-color: green;
        }

        .count .fa-hand-holding-medical {
            background-color: yellow;
        }

        .count .fa-virus {
            background-color: red;
        }

        .card-user {
            border: 2px solid blue
        }

        .card-doctor {
            border: 2px solid green;
        }

        .card-doc-app {
            border: 2px solid yellow;
        }

        .card-vac-app {
            border: 2px solid red;
        }

        .count h1 {
            font-size: 25px;
            color: black;
            font-weight: 900;
        }

        .count .fa-solid {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            border-radius: 5px;
        }

        .content-home {
            z-index: -20;
        }

        .card-body-name {
            display: flex;
            align-items: center;
        }

        .card-title {
            padding-right: 10px;
        }
    </style>
</head>
<body>

    {{-- Admin Page Content --}}
<div class="content content-home">
    <div class="row count">

        {{-- All users count--}}
        <div class="col">
            <div class="card card-user">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Users</h6>
                    </div>
                    <h1>{{ $all_users }}</h1>
                </div>

            </div>
        </div>

        {{-- All Doctors count --}}
        <div class="col">
            <div class="card card-doctor">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user-doctor"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Doctors</h6>
                    </div>
                    <h1>{{ $all_doctors }}</h1>
                </div>
            </div>
        </div>

        {{-- All Doctor appointments count --}}
        <div class="col">
            <div class="card card-doc-app">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Doctor Appointments</h6>
                    </div>
                    <h1>{{ $all_doctor_appointments }}</h1>
                </div>
            </div>
        </div>

        {{-- All Vaccination appointments count --}}
        <div class="col">
            <div class="card card-vac-app">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-virus"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Vaccination Appointments</h6>
                    </div>
                    <h1>{{ $all_vaccination_appointments }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
