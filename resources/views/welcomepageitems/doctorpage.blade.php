<!doctype html>
<html lang="en">
<head>
    @include('layouts.all-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .btn-primary{
            width: 200px;
        }
        .card{
            box-shadow: 0 0 10px black;
            margin: 20px;
        }
        .title{
            color: darkblue;
            font-weight: 900;
            font-size: 50px;
            font-family: Ubuntu, serif;
        }
        .home-outer{
            display: flex;
        }
        .card-img-top{
            width: 100%;
            height: 170px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="title text-center">Doctors</h1>
    <div class="home-outer">
        @foreach($doctors as $doctor)
            <div class="card" style="width: 18rem;">
                <img src="doctorimage/{{$doctor->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <i class="fa-solid fa-house-user"></i><p class="card-title">{{$doctor->name}}</p>
                    <i class="fa-solid fa-envelope-circle-check"></i><p class="card-text">{{$doctor->email}}</p>
                    <i class="fa-solid fa-blender-phone"></i><p class="card-text">{{$doctor->phone}}</p>
                    <p>{{$doctor->speciality}}</p>
                    <div class="btn-area">
                        <button class="btn btn-primary">Contact Doctor</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

