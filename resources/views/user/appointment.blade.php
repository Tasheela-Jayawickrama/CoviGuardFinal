@include('user.usernavbar')
@include('layouts.all-css')
<div class="container">
        <div class="main-outer" style="width: 500px">
                <h1>Make An Appointment</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                        {{session()->get('message')}}
                </div>
                @endif
                <div class="form-outer">
                        <form action="{{url('appointment')}}" method="post">

                                @csrf

                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">address</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                                        <input type="text" class="form-control" id="doctor_name" name="doctor_name">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                </div>
        </div>
</div>
