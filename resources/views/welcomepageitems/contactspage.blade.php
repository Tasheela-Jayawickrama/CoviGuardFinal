<!doctype html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .title{
            color: darkblue;
            font-weight: 900;
            font-size: 50px;
            font-family: Ubuntu, serif;
        }
        .contact-page-outer{
            width: 100%;
            height: 100vh;

        }
        .contact-details{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .row{
            width: 100%;
            height: 100%;
        }
        .contact-form-outer{
            width: 400px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .contact-form-inner{
            width: 350px;
        }
        .cuname{
            font-size: 25px;
            color: purple;
            font-weight: 900;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<section id="contact-section">
    <h1 class="title text-center">Contacts</h1>
    <div class="contact-page-outer outer-1">

        <div class="contact-details">
            <div class="contact-left row">
                <img src="images/contact-us-image.jpg" alt="contactImage" class="contact-us-img">
            </div>
            <div class="contact-right row">
                <div class="contact-form-outer">
                    <div class="contact-form-inner">
                        @if(session()->has('message'))
                            <div class="alert alert-primary text-center">
                                {{session()->get('message')}}
                            </div>
                        @endif
                        <form action="{{route('contact_us')}}" method="POST">
                            @csrf
                            <p class="text-center cuname">Contact Us 24/7</p>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Name" name="name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Email Address" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                          placeholder="Let us Know Your Coments" name="message"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary " id="btn3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
