@extends('User.Master.main')
@section('content')
@section('css')
<style>
   .form-bg5{
   background: darkgrey;
   border-radius: 15px;
   padding-top: 20px;
   padding-bottom: 20px;  
   }
   .form-bg5 input{
   border-radius: 7px;
   background: none;
   }
   .form-bg5 select{
   border-radius: 7px;
   background: none;
   }
   .form-bg5 select option{
   border-radius: 7px;
   background: none;
   }
   .input5{
   margin: 0;
   padding: 0;
   margin-bottom: 25px;
   border-radius: 15px;
   }
   .input5 select{
   background: none !important;
   }
   .input5 select option{
   background: none !important;
   border-radius: 7px;
   background: none;
   } 
   .bootstrap-select .dropdown-toggle{
   background: none !important;
   }
   .bootstrap-select .dropdown-toggle:hover{
   background: none !important;
   }
   .bootstrap-select option .dropdown-toggle:hover{
   background: none !important;
   }
   .bootstrap-select .dropdown-menu > li{
   background-color: rgba(37, 37, 37, 0.751);
   color: #fff;
   }
   .bootstrap-select .dropdown-menu > li > a{
   background: none !important;
   color: #fff;
   }
   .bootstrap-select .dropdown-menu > li > a:hover{
   background: none !important;
   color: #fff;
   }
   .dropdown-menu{
   background: none !important;
   }
   .bootstrap-select .dropdown-toggle {
   border: 2px solid #969a9d !important;
   background-color:none !important;
   height: 56px;
   font-size: 13px;
   color: #d1cccc;
   font-size: 16px;
   font-weight: 400;
   border-radius: 6px;
   }
   .bootstrap-select:select .dropdown-toggle {
   border: 1px solid #e7ecf1 !important;
   background-color:none !important;
   height: 40px;
   font-size: 13px;
   color: #fff;
   }  
   .bootstrap-select .dropdown-toggle::selection{
   background: none;
   }  
   .yoga-form .form-control {
   background: transparent;
   border: 2px solid rgba(255,255,255,0.3);
   border-radius: 6px !important;
   height: 60px;
   color: #fff;
   padding: 15px 25px;
   font-size: 16px;
   transition: all 0.5s;
   -moz-transition: all 0.5s;
   -webkit-transition: all 0.5s;
   margin-bottom: 20px;
   -ms-transition: all 0.5s;
   -o-transition: all 0.5s;
   line-height: 26px;}
   .bootstrap-select .dropdown-toggle {
   border: 1px solid #e7ecf1 !important;
   background-color: #none !important;
   height: 40px;
   font-size: 13px;
   color: #999;
   }
   .bootstrap-select .dropdown-toggle:after {
   display: none;
   }
   .bootstrap-select .dropdown-toggle:active,
   .bootstrap-select .dropdown-toggle:focus,
   .bootstrap-select .dropdown-toggle:hover {
   background-color: none !important;
   border: 1px solid #e9e9e9 !important;
   box-shadow: none !important;
   outline: 0px !important;
   }
   .bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*=col-]{
   padding: 0;
   margin: 0;
   background: none;
   }
   .bootstrap-select.btn-group:focus(.input-group-btn), .bootstrap-select.btn-group[class*=col-]{
   padding: 0;
   margin: 0;
   background: none;
   }
   .bootstrap-select .dropdown-toggle:hover {
   background: none !important;
   border-radius: 5px !important;
   padding-left: 25px !important;
   border-color: #a3a3a3 !important;
   border: 5px;
   }
   .bootstrap-select .dropdown-toggle:active, .bootstrap-select .dropdown-toggle:focus, .bootstrap-select .dropdown-toggle:hover{  
   background-color: none !important;
   border: 2px solid rgba(255,255,255,0.3) !important;
   } 
   .button:focus{ 
   background: none !important;
   }
</style>
@endsection
<div class="container">
   <!-- Latest blog END -->
   <div class="page-content">
		<!-- Slider Banner -->
	</div> 
 	
	<div class="clear"></div>  
	<div class="border-hed"> </div> 
   
   <div class="section-full content-inner-1" style="background-image:url(images/background/bg8.jpg);">
      <div class="container">
         <div class="section-head-2 text-center text-white">
            <h2 class="text-primary">Get Consultation</h2>
            @if(Session::has('msg'))
            <p class="alert alert-info text-warning">{{ Session::get('msg') }}</p>
         @endif
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 form-bg">
               <div class="yoga-form">
                  <form method="post" action="{{ route("user.postConsultation") }}">
                  @csrf
                  <div class="row">
                     <div class="col-md-12"> 
                        <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                     </div>
                     <div class="col-md-12" style="margin-bottom: 20px;">
                        <select style="background: none; width: 100%;" name="consultation_id">
                           @foreach ($consultations as $consultation)
                           <option value="{{ $consultation->id }}"> {{ $consultation->name }} </option>
                           @endforeach
                        </select>
                        
                     </div>
                     @if ($errors->has('consultation_id'))
                              <span class="text-danger">{{ $errors->first('consultation_id') }}</span>
                        @endif
                     <div class="col-md-12">
                        <textarea name="message"  class="form-control" cols="30" rows="10" placeholder="Write somethings about your issues"></textarea>
                     </div>
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
               <img src="{{ asset("User/images/mountainpng-1.png") }}" alt="">
            </div>
         </div>
      </div>
   </div>
</div>

@endsection