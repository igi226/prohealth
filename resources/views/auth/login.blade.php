@extends('User.Master.main')
@section('content')
<div class="clear"></div>
<div class="border-hed"> </div>
<!-- Latest blog END -->
<div class="section-full content-inner-1" style="background-image:url({{ asset("User/images/background/bg6.jpg") }}); 
background-size:cover;background-position-y: -170px;">
<div class="container">
   <div class="section-head-2 text-center text-white">
      <h2 class="text-primary">Login Form</h2>
   </div>
   <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 form-bg2"></div>
      <div class="col-lg-6 col-md-12 col-sm-12 form-bg2">
         <div class="yoga-form">
            <div class="dzFormMsg"></div>
            <form method="POST" action="{{ route('login') }}">
               @csrf
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group margin-5">
                        <div class="input-group">
                           <input type="email" name="email" value="{{ old('email') }}"   class="form-control" placeholder="Enter email address">
                        </div>
                        @if ($errors->has('email'))
                        <span class="text-warning">{{ $errors->first('email') }}</span>
                        @endif
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="input-group">
                           <input type="password" name="password" class="form-control" placeholder="Passward">
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-warning">{{ $errors->first('password') }}</span>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="row padd10">
                  <div class="col-md-6 text-center margin-5">
                     <a href="#" class="forget">Forgot Password </a> 
                  </div>
                  <div class="col-md-6 text-center margin-5">
                     <button type="submit" class="site-button">Submit</button>
                  </div>
               </div>
               <div class="col-md-12">
              Don't have an account yet? <a href="{{ route('register') }}"> Sign up.</a>
             </div>
         </div>
        
         </form>
        
      </div>
   </div>
   <div class="col-lg-3 col-md-12 m-b30 align-self-center">
   </div>
</div>
</div>
</div>
</div>
@endsection