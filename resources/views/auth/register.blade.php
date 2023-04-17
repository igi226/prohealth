@extends('User.Master.main')
@section('content')
<div class="clear"></div>  
<div class="border-hed"> </div>   
  
    <!-- Latest blog END -->
    <div class="section-full content-inner-1" style="background-image:url({{ asset('User/images/background/bg8.jpg') }});">
        <div class="container">
            <div class="section-head-2 text-center text-white">  
                <h2 class="text-primary">Registration Form</h2>
                
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-12 col-sm-12 form-bg">    
                    <div class="yoga-form">
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" value="Contact" name="dzToDo" >
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group margin-5">
                                        <div class="input-group">
                                            <input type="text" name="name" :value="old('name')" autofocus class="form-control" placeholder="Name">
                                          

                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 mb-0 alert" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <input type="email" name="email" :value="old('email')"   placeholder="Your Email Id" class="form-control">
                                         
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 mb-0 alert" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <div class="input-group">
                                            <input name="phone" type="text" class="form-control" placeholder="Number">
                                        </div>
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2 mb-0 alert" />
                                    </div>
                                </div>
                                <div class="col-md-12">  
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input  type="password"
                                            name="password"  placeholder="Password" class="form-control">
    

                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 mb-0 alert" />
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password"
                                            name="password_confirmation"  placeholder="Password"  value="FakePSW" id="myInput" class="form-control">


                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 mb-0 alert" />
                                    </div>
                                </div>
                                 
                               
                                
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="dzMessage" rows="4" class="form-control" placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>-->  
                                <div class="col-md-12 text-center margin-5">
                                    <button name="submit" type="submit" value="Submit" class="site-button">
                                        Submit  
                                    </button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 m-b30 align-self-center">
                    <img src="{{ asset('User/images/mountainpng-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection