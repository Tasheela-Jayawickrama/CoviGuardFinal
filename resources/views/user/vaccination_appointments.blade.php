<!doctype html>
<html lang="en">
<head>
    @include('user.usernavbar')
    @include('layouts.all-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .main-outer {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }

        .form-inner {
            width: 100%;
            height: 100%;
        }

        .vaccinationid-inner {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .vac-id {
            font-size: 70px;
            font-weight: 900;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="main-outer">
        <div class="form-inner">
            <h1 class="text-center">Make An Appointment For Vaccination</h1>
            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="form-outer">
                <form action="{{route('vaccination_appointments_save')}}" method="post">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name"
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" aria-label="address" placeholder="address"
                                   name="address">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Division</label>
                            <select class="form-select" aria-label="Default select example" name="division" required>
                                <option value="------Select Your Division------" selected disabled>choose</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Kaluthara">Kaluthara</option>
                                <option value="Mahanuwara">Mahanuwara</option>
                                <option value="Matale">Matale</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Galle">Galle</option>
                                <option value="Matara">Matara</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Yapanaya">Yapanaya</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Mannarama">Mannarama</option>
                                <option value="Vavniyawa">Vavniyawa</option>
                                <option value="Mulathuv">Mulathuv</option>
                                <option value="Madakalapuwa">Madakalapuwa</option>
                                <option value="Ampara">Ampara</option>
                                <option value="Thrikunamalaya">Thrikunamalaya</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Puttalama">Puttalama</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Rathnapura">Rathnapura</option>
                                <option value="Kegalle">Kegalle</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile"
                                   required>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Identity</label>
                            <input type="text" class="form-control" id="identity" name="identity"
                                   placeholder="NIC/Passport" required>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Self Test Results</label>
                        <a href="{{route('lung_test')}}">Click here to test your-self</a>
                        <select class="form-select" aria-label="Default select example" name="test_result" required>
                            <option value="------Select Your Self-Test Results------" selected disabled>choose</option>
                            <option value="Red" style="color: red;">Red</option>
                            <option value="Yellow" style="color: yellow">Yellow</option>
                            <option value="Green" style="color: green">Green</option>
                            <option value="Blue" style="color: blue">Blue</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Date(current date)</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Vaccine type</label>
                            <select class="form-select" aria-label="Default select example" name="vaccine_type"
                                    required>
                                <option value="------Select Your Self-Test Results------" selected disabled>choose
                                </option>
                                <option value="Synaphame">Synaphame</option>
                                <option value="Moderna">Moderna</option>
                                <option value="Sputnic">Sputnic</option>
                                <option value="Pfizer">Pfizer</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
        <div class="vaccinationid-inner">
            @if(session()->has('vaccination_id'))
                <div class="vac-id">
                    {{session()->get('vaccination_id')}}
                </div>
                <div class="vac-id-text">
                    <p>Please remember or write down this code for your vaccination purposes.</p>
                </div>
            @endif
                @if(session()->has('cust_id'))
                    <div class="vac-id">
                        {{session()->get('cust_id')}}
                    </div>
                    <div class="vac-id-text">
                        <p>Please remember or write down this code for your vaccination purposes.</p>
                    </div>
                @endif
        </div>
    </div>
</div>

</body>
</html>


