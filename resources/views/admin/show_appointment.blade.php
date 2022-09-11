
<html lang="en">
<link rel="icon" href="images/logo.png">
<head>
    @include('layouts.all-css')
    <style>

        td,
        th{
            padding: 10px;
            border: 1px solid black;
            text-align: center;

        }

        .fa-solid{
            font-size: 30px;
        }
        .fa-thumbs-up{
            color: blue;
        }
        .fa-thumbs-down{
            color: red;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
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
                    <a class="nav-link" aria-current="page" href="{{route('vaccination_appointments_show')}}">Vaccination Appointments</a>
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
            <thead>

            <tr>
                <th>Custemer Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>doctor</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Approve</th>
                <th>Cancel</th>
            </tr>

            </thead>
            <tbody>

            @foreach($data as $appoint)
            <tr>
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor_name}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td class="text-center"><a href="{{route('approved',$appoint->id)}}" ><i class="fa-solid fa-thumbs-up "></i></a></td>
                <td class="text-center"><a href="{{route('canceled',$appoint->id)}}" ><i class="fa-solid fa-thumbs-down "></i></a></td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
