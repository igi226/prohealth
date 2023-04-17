@extends('Admin.Main.main')
@section('title', 'Edit-Testimonials |Healthhoodlum')

@section('content')
<div class="">

    <div class="row">

       <div class="col-lg-1"></div>

       <div class="col-lg-9">

           <div class="card">

               <div class="card-title">

                   <h4>Create A Testimonials</h4>

                   

               </div>

               <div class="card-body">

                   <div class="basic-form">

                       <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">

                           @csrf

                           <div class="form-group">

                            <label>Name</label>

                            <input type="text" class="form-control" placeholder="Enter Name....." name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif

                            </div>

                            

                            <div class="form-group">

                                <label>Message</label>

                                <textarea id="summernote" type="text" class="form-control" placeholder="Enter description....." name="message" value="{{ old('message') }}"></textarea>

                               

                                @if ($errors->has('message'))

                                    <span class="text-danger">{{ $errors->first('message') }}</span>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Image</label>

                                <input type="file" class="form-control" name="image">

                                @if ($errors->has('image'))

                                    <span class="text-danger">{{ $errors->first('image') }}</span>

                                @endif

                            </div>

                           
                            <div class="form-group">

                                <label>Oppucation</label>
    
                                <input type="text" class="form-control" placeholder="Enter Name....." name="occupation" value="{{ old('occupation') }}">
    
                                @if ($errors->has('occupation'))
    
                                    <span class="text-danger">{{ $errors->first('occupation') }}</span>
    
                                @endif
    
                                </div>
   

                           

   

                           <div class="text-center">

                           <button type="submit" class="btn btn-default btn-sm">Create</button>

                           <button onclick="{{ route('testimonials.index') }}" class="btn btn-danger btn-sm">Cancel</button>

                        </div>

                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>
@endsection