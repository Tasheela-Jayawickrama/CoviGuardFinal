<html lang="en">
<link rel="icon" href="images/logo.png">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        th {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
        td{
            text-align: center;
            padding: 10px;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }
        .container .btn-success{
            background-color: green;
            color: white;
        }
        .container .thead-dark{
            background-color: black;
            color: white;
        }
        .container .btn-danger{
            background-color: red;
            color: white;
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
                    <a class="nav-link" aria-current="page" href="{{route('add_doctor_view')}}">Add Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('show_doctor_view')}}">Show Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('show_appointment')}}">Manage Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('vaccination_appointments_show')}}">Vaccination
                        Appointments</a>
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
<div class="container">
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
                            <a href="{{route('cancel_vaccination_appointment',$appointment_data->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('are you Sure ?')">Delete</button></a>
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
