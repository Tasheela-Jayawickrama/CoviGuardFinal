<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/jpg">
    <title>CitizenRegistration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .body-outer {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('images/background2.png');
            background-size: cover;
            background-position: center;
        }

        .body-inner {
            width: 1000px;
            height: 600px;
            border-radius: 25px;
            box-shadow: 0 0 10px black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left-side {
            width: 400px;
            height: 600px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .right-side {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 600px;
            height: 600px;
        }

        .back {
            width: 100%;
            height: 50px;
        }

        .desc {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 400px;
        }

        .buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 150px;
        }

        .backarrow {
            width: 30px;
            border: 2px solid black;
            border-radius: 50%;
            margin: 5px 5px;
        }

        .name h4 {
            font-family: Ubuntu, serif;
            font-size: 25px;
            font-weight: 900;
            color: blue;
        }

        .helps {
            font-family: Ubuntu, serif;
            font-weight: 900;
            color: blue;
        }

        .form-area {
            width: 450px;
            height: 600px;
        }

        .form-control {
            font-family: Ubuntu, serif;
            font-weight: 300;
        }

        .exists-acc {
            text-align: center;
            font-size: 10px;
            font-family: Ubuntu, serif;
            font-weight: 900;
            color: blue;
        }

        .title {
            color: blue;
            font-family: Ubuntu, serif;
            font-size: 45px;
            font-weight: 900;
        }

        .error {
            font-family: Ubuntu, serif;
            font-size: 10px;
            font-weight: 900;
        }

        .note {
            margin-top: 5px;
            font-family: Ubuntu, serif;
            font-size: 15px;
            font-weight: 900;
            text-align: center;
        }

        .btns {
            font-family: Ubuntu, serif;
            font-weight: 500;
            color: white;
            text-decoration: none;
        }

        .all {
            margin: 5px;
        }

    </style>
</head>
<body>
<div class="body-outer">
    <div class="body-inner">
        <div class="left-side">
            <div class="back"><a href="{{route('main_page')}}"><img src="images/backarrow.svg" alt=""
                                              class="backarrow"></a></div>
            <div class="desc">
                <div class="logo"><img src="images/logo.png" alt="" width="250px"></div>
                <div class="name">
                    <h4>Welcome to CoviGuard</h4>
                </div>
            </div>
            <div class="buttons">
                <div class="helps"><p>Need any help?...</p></div>
                <div class="help-buttons">
                    <img src="images/phoneicon.png" alt="" width="50px">
                    <img src="images/mailicon.png" alt="" width="50px">
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="form-area">
                <form action="" method="post">

                    @if (Session::get('success'))
                        <div class="alert alert-primary note">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger note">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <h2 class="text-center title">Register</h2> <br>
                    <div class="row">
                        <div class="col-12 all">
                            <input type="text" class="form-control" placeholder="First name" name="name"
                                   aria-label="name" value="{{ old('name') }}">
                            <span class="text-danger error">@error('name'){{ $message }}  @enderror</span>
                        </div>
                        <div class="col-12 all">
                            <input type="text" class="form-control" placeholder="email" name="email"
                                   aria-label="email" value="{{ old('email') }}">
                            <span class="text-danger error">@error('email'){{ $message }}  @enderror</span>
                        </div>
                        <div class="col-12 all">
                            <input type="text" class="form-control" placeholder="address" name="address"
                                   value="{{ old('address') }}">
                            <span class="text-danger error">@error('address'){{ $message }}  @enderror</span>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col all">
                                <input type="text" class="form-control" placeholder="Identity" aria-label="identity"
                                       name="nic">
                                <span class="text-danger error">@error('nic'){{ $message }}  @enderror</span>
                            </div>
                            <div class="col all">
                                <input type="date" class="form-control" placeholder="Phone" aria-label="dob"
                                       name="dob">
                                <span class="text-danger error">@error('dob'){{ $message }}  @enderror</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col all">
                                <input type="text" class="form-control" placeholder="Phone" aria-label="phone"
                                       name="phone">
                                <span class="text-danger error">@error('phone'){{ $message }}  @enderror</span>
                            </div>
                            <div class="col all">
                                <select class="form-select" aria-label="gender" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col all">
                                <input type="text" class="form-control" placeholder="Password" name="password"
                                       aria-label="Password">
                                <span class="text-danger error">@error('password'){{ $message }}  @enderror</span>
                            </div>
                            <div class="col all">
                                <input type="text" class="form-control" placeholder="Confirm-Password"
                                       name="password_confirmation" aria-label="Confirm-Password">
                                <span
                                    class="text-danger error">@error('password_confirmation'){{ $message }}  @enderror</span>
                            </div>
                        </div>
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success btns" type="submit">Register</button>
                        <div class="exists-acc">Already Have An Account?</div>
                        <button class="btn btn-primary" type="button"><a href="{{ route('login') }}"
                                                                         class="btns"> Login</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
