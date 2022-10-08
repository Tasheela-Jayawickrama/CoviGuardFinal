@include('admin.admin_body')
<div class="content">
        <div class="main-outer" style="width: 500px">
            <h1 class="text-center" style="font-size: 50px">Add Doctors</h1>
            <div class="form-area">

                @if(session()->has('message'))
                    <div class="alert alert-success text-center">
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
                    <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Doctor Speciality</label>
                    <select class="form-select" aria-label="Default select example" name="speciality">
                        <option value="Eye">Eye</option>
                        <option value="skin">Skin</option>
                        <option value="brain">Brain</option>
                        <option value="cancer">Cancer</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Doctor Image</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="file" name="file" required>
                    </div>
                    <button type="submit" class="btn" style="width: 150px; background-color: blue; color: white">Submit</button>
                </form>
            </div>
        </div>
</div>
