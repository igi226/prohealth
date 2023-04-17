
@extends('User.Dashboard.mainDashboard')
@section('dashboard')
<div>
    <div>
        <div class="d-flex justify-content-between">
            <h3 class="das">My Profile</h3>
            @if(Session::has('msg'))
            <p class="alert alert-info">{{ Session::get('msg') }}</p>
         @endif
            <div><a href="{{ route("user.editProfile") }}" class="btn btn-primary rounded-pill">
                <i class="fa fa-pencil"></i> Edit Profile</a>
            </div>
        </div>

        <div class="dashboard-profile">
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Registration Date</div>
                <div class="dashboard-profile__content">
                    <p>{{  Carbon\Carbon::parse(auth()->user()->created_at)->format('D, d M Y H:i') }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading"> Name</div>
                <div class="dashboard-profile__content">
                    <p>{{ auth()->user()->name }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Email</div>
                <div class="dashboard-profile__content">
                    <p>{{ auth()->user()->email }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Phone Number</div>
                <div class="dashboard-profile__content">
                    <p>{{ auth()->user()->phone }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Bio</div>
                <div class="dashboard-profile__content">
                    <p>{{ auth()->user()->bio }}</p> 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection