@include('layouts.all-css')
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
<div class="container" style="width: 100%; height:100%;">
    <div class="form-area" style="width: 500px">

        @if(session()->has('message'))
            <div class="alert alert-success text-center">
                {{session()->get('message')}}
            </div>
        @endif

        <form action="{{route('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="font-size: 50px">Update Doctor Details</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->name}}" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Mobile</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="phone" value="{{$data->phone}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{$data->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Speciality</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="speciality" value="{{$data->speciality}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Id</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="doctor_id" value="{{$data->doctor_id}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn" style="background-color: blue; color: white; width: 150px; height: 50px;">Update<i class="fa-solid fa-address-book" style="margin: 0 0 0 5px"></i></button>
                </div>
        </form>
    </div>
</div>
