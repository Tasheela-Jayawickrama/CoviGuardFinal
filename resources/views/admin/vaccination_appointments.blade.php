<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: blue;
            color: white;
        }

        .navbar {
            position: sticky;
            top: 0;
        }

        div.content {
            margin-left: 270px;
            padding: 1px 16px;
            height: 100%;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        th {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }

        td {
            text-align: center;
            padding: 10px;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }

        .content .btn-success {
            background-color: green;
            color: white;
        }

        .content .thead-dark {
            background-color: black;
            color: white;
        }

        .content .btn-danger {
            background-color: red;
            color: white;
        }
        .nav-item{
            list-style: none;
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                DOCTOR
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('add_doctor_view')}}">Add Doctor</a></li>
                <li><a class="dropdown-item" href="{{route('show_doctor_view')}}">View Doctor</a></li>
                <li><a class="dropdown-item" href="{{route('show_doctor_view')}}">Update Doctor</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CITIZEN
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                APPOINTMENT
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('show_appointment')}}">Doctor Appointments</a></li>
                <li><a class="dropdown-item" href="{{route('vaccination_appointments_show')}}">Vaccination Appointments</a></li>
            </ul>
        </li>
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

<div class="sidebar bg-light">
    <a href="{{route('add_doctor_view')}}">Add Doctors</a>
    <a href="{{route('show_doctor_view')}}">Show Doctors</a>
    <a href="{{route('show_doctor_view')}}">Update Doctors</a>
    <a href="{{route('show_appointment')}}">Doctor Appointments</a>
    <a href="{{route('vaccination_appointments_show')}}">Vaccination Appointments</a>
    <a href="{{route('chatify')}}">Chat With User</a>
</div>

<div class="content">

    <div class="main-outer">
        <table>
            <thead class="thead-dark">

            <tr>
                <th>Name</th>
                <th>Identity</th>
                <th>Vaccination ID</th>
                <th>Test Results</th>
                <th>Date</th>
                <th>Vaccination Date</th>
                <th>Center</th>
            </tr>

            </thead>
            <tbody>

            @foreach($vaccination_appointment_data as $appointment_data)
                <tr>
                    <td>{{$appointment_data->name}}</td>
                    <td>{{$appointment_data->identity}}</td>
                    <td>{{$appointment_data->vaccination_id}}</td>
                    <td>{{$appointment_data->test_result}}</td>
                    <td>{{$appointment_data->date}}</td>
                    <form action="{{route('appointment_update',$appointment_data->id)}}" method="POST">
                        @csrf
                        <td><input type="date" class="form-control" name="vaccination_date"></td>
                        <td><input type="text" class="form-control" name="center"></td>
                        <td>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </td>
                        <td>
                            <a href="{{route('cancel_vaccination_appointment',$appointment_data->id)}}">
                                <button type="button" class="btn btn-danger" onclick="return confirm('are you Sure ?')">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </form>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
