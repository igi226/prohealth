@extends('User.Master.main')
@section('content')
<div class="section-full content-inner-1" style="background-image:url('{{ asset('User/images/background/bg8.jpg') }}'); background-size: cover;">
    <div class="container">
        <div class="section-head-cont text-center text-white">
            <h2 class="section-head-conth2">{{@$contact->title}} </h2>
            <p><?php echo html_entity_decode(@$contact->description );?></p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="yoga-form">
                    <div class="dzFormMsg"> @if(Session::has('msg'))
                        <p class="alert text-warning">{{ Session::get('msg') }}</p>
                     @endif</div>
                    <form method="post" class="" action="{{ route("user.submitQuery") }}">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="name" type="text" required class="form-control"
                                            placeholder="Your Name">
                                            @if ($errors->has('name'))
    
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
    
                                @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="email" type="email" class="form-control" required
                                            placeholder="Your Email Id">
                                            @if ($errors->has('email'))
    
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
            
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="phone"  type="text" required
                                            class="form-control" placeholder="Phone" value="{{ old("phone") }}">
                                            @if ($errors->has('phone'))
    
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
            
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="subject" type="text" required
                                            class="form-control" placeholder="Subject" value="{{ old("subject") }}">
                                            @if ($errors->has('subject'))
    
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
            
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="message" rows="4" class="form-control" required
                                            placeholder="Your Message...">{{ old("message") }}</textarea>
                                            @if ($errors->has('message'))
    
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
            
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="site-button">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mt-30">
                <div class="contp-con">
                          <h2> {{ $site_infos->site_name }} </h2>
                        <h1> Mobile </h1>
                        <p> {{ $site_infos->site_phone }} (24/7 Support Line) </p>

                        <h1> Email  </h1>
                        <p> {{ $site_infos->site_email }}</p>
                        
                        <h1> Address  </h1>
                        <p>  {{ $site_infos->site_address }}   </p>
                    
                </div>
            </div>  
        </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 mt-30">
            <iframe src="{{@$contact->short_desc}}" 
            width="100%" height="300" style="border: solid 3px #fff; margin-top: 4%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div> 
    </div>


    </div>
</div>
@endsection