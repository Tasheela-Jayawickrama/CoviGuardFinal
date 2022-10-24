{{-- Welcome page styles --}}

@include('layouts.welcome-page-styles')

<section id="contacts">
    <div class="contacts-page-outer">
        <div class="page-title text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="text-center"><i class="fa-solid fa-headset"></i></div>
        <div class="main-content">
            {{-- Contacts us page image --}}

            <div class="page-image">
                <img src="./images/contact-us-image.jpg" alt="contacts-page-image" width="550px">
            </div>
            {{-- Contacts us page Description --}}

            <div class="page-description" style="align-items: center">
                <div class="contact-form-inner">
                    @if(session()->has('message'))
                        <div class="alert alert-primary text-center">
                            {{session()->get('message')}}
                        </div>
                    @endif

                    {{-- Contacts us page Contacts Form --}}

                    <form action="{{route('contact_us')}}" method="POST">
                        @csrf
                        <p class="text-center cuname">Contact Us 24/7</p>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Let us Know Your Comments" name="message" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary ">Sent Your Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

