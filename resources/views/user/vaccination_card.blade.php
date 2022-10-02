<!doctype html>
<html lang="en">
<head>
    @include('layouts.all-css')
    <link rel="icon" href="images/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .container{
            display: grid;
            grid-template-columns: auto auto;
            font-family: Ubuntu, serif;
        }
        .col-form-label{
            font-weight: 900;
            text-transform: capitalize;
            font-size: 20px;
        }
        .card{
            width: 600px;
            margin: 10px;
        }
        .card h5{
            font-size: 35px;
            font-weight: 900;
            color: blue;
        }

    </style>
</head>
<body>
@include('user.usernavbar')

<div class="container">
    @foreach($vaccine_details as $details)
    <div class="card">
        <h5 class="card-header">{{$details->vaccination_id}}</h5>
        <div class="card-body" style="width: 700px">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Name</label>
                <div class="col-sm-10">
                    <p>{{$details->name}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Identity</label>
                <div class="col-sm-10">
                    <p>{{$details->identity}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Vaccine Type</label>
                <div class="col-sm-10">
                    <p>{{$details->vaccine_type}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Appointment Place Date</label>
                <div class="col-sm-10">
                    <p>{{$details->date}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Your Vaccination Date</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control bg-success text-center text-white" id="staticEmail" value="{{$details->vaccination_date}}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-12 col-form-label">Your Vaccination Center</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control bg-success text-center text-white" id="staticEmail" value="{{$details->center}}" disabled>
                </div>
            </div>

        </div>
    </div>
        @endforeach
</div>

</body>
</html>
