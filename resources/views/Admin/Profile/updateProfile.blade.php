@extends('Admin.Main.main')
@section('title', 'Profile| Healthhoodlum')
@section('content')
<div class="row">
   <div class="col-lg-3"></div>
   <div class="col-lg-6">
      <div class="card">
        @if(Session::has('msg'))
                       <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
         <form action="{{ route('admin.profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="user-profile">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="">
                           <div>
                              <div>
                                 <div class="">
                                    <span class="contact-title">Name:</span>
                                    <input type="text" name="name" placeholder="John Doe" class="form-control" value="{{ $admin_info->name }}"><br>
                                    @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                                    <div class="">
                                       <span class="contact-title">Email:</span>
                                       <input type="email" name="email" placeholder="hello@Admin Board.com" class="form-control" value="{{ $admin_info->email }}">
                                       @if ($errors->has('email'))
                                       <span class="text-danger">{{ $errors->first('email') }}</span>
                                     @endif
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="text-center">
                  <button type="submit" class="btn btn-default btn-rounded m-b-10 btn-sm">Update</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection
@include('components.sweetalertMsg')
