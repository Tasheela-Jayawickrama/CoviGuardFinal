<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/jpg">
    <title>Citizen Login</title>
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
            font-family: Ubuntu, serif;
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
            font-size: 25px;
            font-weight: 900;
            color: blue;
        }

        .helps {
            font-weight: 900;
            color: blue;
        }

        .form-control {
            font-weight: 300;
            width: 300px;
        }

        .all {
            margin: 5px;
        }
        .title {
            color: blue;
            font-size: 45px;
            font-weight: 900;
        }
        .button-area{
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .btn{
            width: 200px;
        }

        .exists-acc {
            text-align: center;
            font-size: 10px;
            font-weight: 900;
            color: blue;
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
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="text-center title">Login</h2> <br>
                        <div class="col-12 all">
                            <label for="identity" class="form-label">Your Identity</label>
                            <input type="text" class="form-control" placeholder="Identity" name="nic"
                                   aria-label="nic" value="{{ old('nic') }}" required>
                            <span class="text-danger error">@error('nic'){{ $message }}  @enderror</span>
                        </div>
                        <div class="col-12 all">
                            <label for="password" class="form-label">Your Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                   aria-label="password" value="{{ old('password') }}" required autocomplete="current-password">
                            <span class="text-danger error">@error('password'){{ $message }}  @enderror</span>
                        </div>
                        <div class="button-area">
                            <button type="submit" class="btn btn-success">Login</button>
                            <p class="exists-acc">Don't have an Account?</p>
                            <a href="{{route('register')}}"><button type="button" class="btn btn-primary">Register</button></a>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
