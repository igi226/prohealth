
@extends('User.Dashboard.mainDashboard')
@section('dashboard')
<div>
    <div>
        <div class="d-flex justify-content-between">
            <h3  class="das">Edit Profile</h3> 
        </div>

        <div class="dashboard-profile profileform">
            <form method="POST" action="{{ route("user.updateProfile") }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label> Name</label>
                        <input type="text" class="form-control" name="name" placeholder="First Name" value="{{ auth()->user()->name }}">
                    </div>
                    
                    <div class="col-lg-6 mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label>Update Profile Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label>Bio</label>
                        <textarea class="form-control" name="bio">{{ auth()->user()->bio }}</textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button class="btn btn-primary">Update Profile</button>
                    </div>
                </div> 
            </form>

        </div>
    </div>
</div>
@endsection