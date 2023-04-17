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
         <form action="#" method="">
         {{-- {{ route('admin.changePassword') }} --}}
            @csrf
            <div class="card-body">
               <div class="user-profile">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="">
                           <div>
                              <div>
                                 <div class="">
                                    <span class="contact-title">Current Password:</span>
                                    <input type="password" name="old_password" class="form-control"><br>
                                    @if ($errors->has('old_password'))
                                <span class="text-danger">{{ $errors->first('old_password') }}</span>
                              @endif
                                    <div class="">
                                       <span class="contact-title">Enter New Password:</span>
                                       <input type="password" name="new_password" class="form-control">
                                       @if ($errors->has('new_password'))
                                            <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                        @endif
                                    </div>

                                    <div class="">
                                        <span class="contact-title">Confirm New Password:</span>
                                        <input type="password" name="confirm_password" class="form-control">
                                        @if ($errors->has('confirm_password'))
                                             <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
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
