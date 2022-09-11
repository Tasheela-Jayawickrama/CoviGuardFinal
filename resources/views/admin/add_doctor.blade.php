<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo.png">
    @include('layouts.all-css')
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
<div class="container" style="width: 100vw;display: flex;align-items: center;justify-content: center;">
    <div class="main-outer" style="width: 500px">
        <h1 class="text-center" style="font-size: 50px">Add Doctors</h1>
        <div class="form-area">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif


            <form action="{{route('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Doctor Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Doctor Mobile</label>
                    <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Mobile" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Doctor ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Identity" name="doctor_id" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Doctor Hospital</label>
                    <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Hospital" name="hospital" required>
                </div>
                <select class="form-select" aria-label="Default select example" name="speciality">
                    <option value="Eye">Eye</option>
                    <option value="skin">Skin</option>
                    <option value="brain">Brain</option>
                    <option value="cancer">Cancer</option>
                </select>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Doctor Image</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="file" name="file" required>
                </div>
                <button type="submit" class="btn" style="width: 150px; background-color: blue; color: white">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
