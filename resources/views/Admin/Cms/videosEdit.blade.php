@extends('Admin.Main.main')
@section('title', 'video |Healthhoodlum')

@section('content')

<div class="">

    <div class="row">

       <div class="col-lg-3"></div>

       <div class="col-lg-6">

           <div class="card">

               <div class="card-title">

                   <h4>Edit Video</h4>

                   

               </div>

               <div class="card-body">

                   <div class="basic-form">

                       <form action="{{ route('videosUpdate', $video->id) }}" method="POST">

                           @csrf

                           {{-- @method('PUT') --}}

                           <div class="form-group">

                            <label>Title</label>

                            <input type="text" class="form-control" placeholder="Enter Name....." name="title" value="{{ $video->title }}">

                            @if ($errors->has('title'))

                                <span class="text-danger">{{ $errors->first('title') }}</span>

                            @endif

                            </div>

                            <div class="form-group">

                                <label>Description</label>

                                <input type="text" class="form-control" placeholder="Enter  Desc....." name="description" value="{{ $video->description }}">

                                @if ($errors->has('description'))

                                    <span class="text-danger">{{ $errors->first('description') }}</span>

                                @endif

                                </div>

                            

                           

                            <div class="form-group">

                                <label>Video link</label>

                                <input type="text" class="form-control"name="youtube_link" value="{{ $video->youtube_link }}">

                               

                            </div>

   

                           

   

                           <div class="text-center">

                           <button type="submit" class="btn btn-default btn-sm">Update</button>

                           <a href="{{ route('videos') }}" class="btn btn-danger btn-sm">Cancel</a>

                        </div>

                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>



  

@endsection
