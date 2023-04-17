@extends('Admin.Main.main')
@section('title', 'Packages | Healthhoodlum')
@section('content')
<div class="">
    <div class="row">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
           <div class="card">
               <div class="card-title">
                   <h4>Edit Package</h4>
               </div>
               <div class="card-body">
                   <div class="basic-form">
                       <form action="{{ route('consultations.update', $consultation->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method("PUT")
                           <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter name....." name="name" value="{{ $consultation->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" placeholder="Write a few words" name="short_description" value="{{ $consultation->short_description}}">
                                @if ($errors->has('short_description'))
                                    <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                @if (isset($consultation->image) && !empty($consultation->image) && File::exists(public_path('storage/ConsultImage/' . $consultation->image)))
                                        <img height="80" width="100" src="{{ asset('storage/ConsultImage/' . $consultation->image) }}"
                                            alt="">
                                    @else
                                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                                    @endif
                            </div>
                
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            
                            
   
                           
   
                           <div class="text-center">
                           <button type="submit" class="btn btn-default btn-sm">Update</button>
                           <a href="{{ route('consultations.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

  
@endsection
