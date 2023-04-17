@extends('Admin.Main.main')
@section('title', 'testimonials |Healthhoodlum')

@section('content')

<div class="">

    <div class="row">

       <div class="col-lg-3"></div>

       <div class="col-lg-6">

           <div class="card">

               <div class="card-title">

                   <h4>Edit Testimonial</h4>

                   

               </div>

               <div class="card-body">

                   <div class="basic-form">

                       <form action="{{ route('testimonials.update', $testimonials->id) }}" method="POST" enctype="multipart/form-data">

                           @csrf

                           @method('PUT')

                           <div class="form-group">

                            <label>Name</label>

                            <input type="text" class="form-control" placeholder="Enter Name....." name="name" value="{{ $testimonials->name }}">

                            @if ($errors->has('name'))

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif

                            </div>

                            <div class="form-group">

                                <label>Occupation</label>

                                <input type="text" class="form-control" placeholder="Enter occupation...." name="occupation" value="{{ $testimonials->occupation }}">

                                @if ($errors->has('occupation'))

                                    <span class="text-danger">{{ $errors->first('occupation') }}</span>

                                @endif

                                </div>

                            <div class="form-group">

                                <label>Description</label>

                                <textarea id="summernote" type="text" class="form-control" placeholder="Enter message....." name="message">{{ $testimonials->message }}</textarea>

                               

                                @if ($errors->has('message'))

                                    <span class="text-danger">{{ $errors->first('message') }}</span>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Current Image</label>

                                @if (isset($testimonials->image) && !empty($testimonials->image) && File::exists(public_path("storage/testimonialsImage/" . $testimonials->image)))

                                <img height="80" width="100" src="{{ asset('storage/testimonialsImage/'.$testimonials->image)}}" alt="">

                                @else

                                <img height="80" width="100" src="{{asset('noimg.png')}}" alt="no-p_image"> 

                                @endif    

                            </div>

                            <div class="form-group">

                                <label>Image</label>

                                <input type="file" class="form-control"name="image" value="{{ $testimonials->image }}">

                               

                            </div>

   

                           

   

                           <div class="text-center">

                           <button type="submit" class="btn btn-default btn-sm">Update</button>

                           <button onclick="{{ route('testimonials.index') }}" class="btn btn-danger btn-sm">Cancel</button>

                        </div>

                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>



  

@endsection
