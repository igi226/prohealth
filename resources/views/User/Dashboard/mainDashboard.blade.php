@extends('User.Master.main')
@section('content')
 <!-- Content -->
 <div class="page-content">
    <!-- Slider Banner -->
</div> </div> 
 
<div class="clear"></div>  
<div class="border-hed"> </div>   
  
    <!-- Latest blog END -->
    <div class="section-full content-inner-1" style="padding-top: 0;"> 
        <div class="section-head-2 text-center text-white" style="background-image:url({{ asset('User/images/background/testi-bg.jpg') }}); 
            background-size:cover; background-position-y: bottom; line-height: 150px;">   
                <h2 class="text-primary g-lin">
                    @if (Route::currentRouteName() == "user.profile")
                    Profile
                    @elseif(Route::currentRouteName() == "user.editProfile")
                    Edit Profile
                   
                    @endif  
                  
                     </h2>     
                  
            </div>         
            
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-3 mb-3">   
                        <div class="sidebar shadow-sm"> 
                            <div class="student-user d-flex align-items-center mb-3">
                                <img src="{{ asset('storage/UserImage/'. auth()->user()->image) }}">
                                <h3 class="m-0 h5 font-weight-bold pr-f">{{ auth()->user()->name }}</h3>
                            </div>
                            <ul class="sidebar-list"> 
                                {{-- <li><a href="dashboard.html"><i class="fa fa-home"></i> Dashboard</a></li> --}}
                                <li class="{{ Route::currentRouteName() == "user.profile" ? "active" : "" }}"><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i> My Profile</a></li>
                                {{-- <li class=""><a href="#"><i class="fa fa-user"></i> Packages</a></li>
                                <li><a href="#"><i class="fa fa-book"></i> Enrolled Courses</a></li>--}}
                                <li class="{{ Route::currentRouteName() == "user.myPlan" ? "active" : "" }}"><a href="{{ route("user.myPlan") }}"><i class="fa fa-briefcase"></i> Purchase History</a></li>
                                {{-- <li><a href="#"><i class="fa fa-star"></i> Reviews</a></li> --}}
                                <li><form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="login-btn"><i class="fa fa-user-circle"></i>Log out</a>
                                    
                                </form></li>
                            </ul>
                        </div>
                    </div> 

                    <div class="col-lg-9">
                        @yield('dashboard')
                    </div>
                </div>
            </div> 
        </div>   

        </div>
    </div>
</div>
<!-- Content END-->
@endsection