<!doctype html>
<html lang="en">
<link rel="icon" href="images/logo.png">
<head>
    @include('layouts.all-css')
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        td,
        th{
            padding: 5px 30px;
            border-bottom: 1px solid black;
        }
        .fa-solid{
            font-size: 30px;
        }
        .fa-address-book{
            color: green;
        }
        .fa-trash-can{
            color: red;
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
<div class="container text-center">
    <div class="main-outer">
        <table>
            <thead>
            <tr>
                <th>Doctor Image</th>
                <th>Name</th>
                <th>phone</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>Doctor Id</th>
            </tr>

            </thead>
            <tbody>

            @foreach($data as $doctor)
                <tr>
                    <td ><img src="doctorimage/{{$doctor->image}}" alt="doctor_image"
                             style="width: 100px;height: 100px;border-radius: 50%"></td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->doctor_id}}</td>
                    <td><a href="{{route('update_doctor',$doctor->id)}}"><i class="fa-solid fa-address-book"></i></a></td>
                    <td><a href="{{route('delete_doctor',$doctor->id)}}" onclick="return confirm('Are You Sure')"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

