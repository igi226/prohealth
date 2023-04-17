@extends('Admin.Main.main')
@section('title', 'Edit-Users |Healthhoodlum')

@section('content')
<div class="">

    <div class="row">

       <div class="col-lg-1"></div>

       <div class="col-lg-9">

           <div class="card">

               <div class="card-title">

                   <h4>Create A Video CMS</h4>

                   

               </div>

               <div class="card-body">

                   <div class="basic-form">

                       <form action="{{ route('videosStore') }}" method="post">

                           @csrf

                           <div class="form-group">

                            <label>Title</label>

                            <input type="text" class="form-control" placeholder="Enter Name....." name="title" value="{{ old('title') }}">

                            @if ($errors->has('title'))

                                <span class="text-danger">{{ $errors->first('title') }}</span>

                            @endif

                            </div>

                            <div class="form-group">

                                <label>Description</label>

                                <input type="text" class="form-control" placeholder="Enter Short Desc....." name="description" value="{{ old('description') }}">

                                @if ($errors->has('description'))

                                    <span class="text-danger">{{ $errors->first('description') }}</span>

                                @endif

                                </div>

                            

                            <div class="form-group">

                                <label>Video link</label>

                                <input type="text" class="form-control" name="youtube_link">

                                @if ($errors->has('youtube_link'))

                                    <span class="text-danger">{{ $errors->first('youtube_link') }}</span>

                                @endif

                            </div>

                           

   

                           

   

                           <div class="text-center">

                           <button type="submit" class="btn btn-default btn-sm">Create</button>

                           <a href="{{ route('videos') }}" class="btn btn-danger btn-sm">Cancel</a>

                        </div>

                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>
@endsection