@extends('Admin.Main.main')
@section('title', 'Site Info | Healthhoodlum')
@section('content')
<div class="row">
   <div class="col-lg-10 align-center">
      <div class="card">
         <div class="card-title">
            <h4>Site Information</h4>
         </div>
         @if(Session::has('msg'))
                       <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
         <div class="card-body">
            <div class="basic-form">
               <form method="POST" action="{{ route('admin.siteSettingsupdate') }}" style="width: 43rem;" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label>Site Name:</label>
                     <input type="text" class="form-control" placeholder="Site name" name="site_name" value="{{ $siteInfos->site_name }}">
                     @if ($errors->has('site_name'))
                     <span class="text-danger">{{ $errors->first('site_name') }}</span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Address:</label>
                     <input type="text" class="form-control" placeholder="Address" name="site_address" value="{{ $siteInfos->site_address }}">
                     @if ($errors->has('site_address'))
                     <span class="text-danger">{{ $errors->first('site_address') }}</span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Site Email:</label>
                     <input type="email" class="form-control" placeholder="email" name="site_email" value="{{ $siteInfos->site_email }}">
                     @if ($errors->has('site_email'))
                     <span class="text-danger">{{ $errors->first('site_email') }}</span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Phone:</label>
                     <input type="number" class="form-control" placeholder="+1234567890" name="site_phone" value="{{ $siteInfos->site_phone }}">
                     @if ($errors->has('site_phone'))
                     <span class="text-danger">{{ $errors->first('site_phone') }}</span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Current Logo Image:</label>
                     @if (isset($siteInfos->site_logo) && !empty($siteInfos->site_logo) && asset("storage/app/public/SiteImages/.$siteInfos->site_logo ")) 
                     <img height="50" width="150" src="{{ asset('storage/SiteImages/'. $siteInfos->site_logo) }}" alt=""><br><br>
                     @else
                     <img height="80" width="100" src="{{asset('noimg.png')}}" alt="no-p_image">    
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Logo Image:</label>
                     <input name="site_logo" class="form-control font-weight-light text-muted" type="file" id="example-text-input">
                     @if ($errors->has('site_logo'))
                     <span class="text-danger">{{ $errors->first('site_logo') }}</span>
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Current Favicon Image:</label>
                     @if (isset($siteInfos->site_favicon) && !empty($siteInfos->site_favicon))
                     <img height="50" width="150" src="{{ asset('storage/SiteImages/'. $siteInfos->site_favicon) }}" alt=""><br><br>
                     @else
                     <img height="80" width="100" src="{{asset('noimg.png')}}" alt="no-p_image">    
                     @endif
                  </div>
                  <div class="form-group">
                     <label>Favicon Image:</label>
                     <input  name="site_favicon" class="form-control font-weight-light text-muted" type="file" >
                     @if ($errors->has('site_favicon'))
                     <span class="text-danger">{{ $errors->first('site_favicon') }}</span>
                     @endif
                  </div>
            </div>
            <div class="form-group">
                <label>About:</label>
                <textarea type="text" class="form-control" placeholder="about" name="site_about">{{ $siteInfos->site_about }}</textarea>
                @if ($errors->has('site_about'))
                <span class="text-danger">{{ $errors->first('site_about') }}</span>
                @endif
            </div>
            <div class="form-group">
            <label>Twitter:</label>
            <input type="text" class="form-control" placeholder="https://twitter.com/" name="twitter" value="{{ $siteInfos->twitter }}">
            @if ($errors->has('twitter'))
            <span class="text-danger">{{ $errors->first('twitter') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label>Facebook:</label>
            <input type="text" class="form-control" placeholder="https://www.facebook.com/" name="facebook" value="{{ $siteInfos->facebook }}">
            @if ($errors->has('facebook'))
            <span class="text-danger">{{ $errors->first('facebook') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label>YouTube:</label>
            <input type="text" class="form-control" placeholder="https://www.youtube.com/" name="youtube" value="{{ $siteInfos->youtube }}">
            @if ($errors->has('youtube'))
            <span class="text-danger">{{ $errors->first('youtube') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label>Instagram:</label>
            <input type="text" class="form-control" placeholder="https://www.instagram.com/" name="instagram" value="{{ $siteInfos->instagram }}">
            @if ($errors->has('instagram'))
            <span class="text-danger">{{ $errors->first('instagram') }}</span>
            @endif
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>


@endsection
