@extends('Admin.Main.main')
@section('title', 'Add-users| Healthhoodlum')

@section('content')

<div class="">

    <div class="row">

       <div class="col-lg-3"></div>

       <div class="col-lg-6">

           <div class="card">

               <div class="card-title">

                   <h4>Add New User</h4>

                   

               </div>

               <div class="card-body">

                   <div class="basic-form">

                       <form action="{{ route('users.store') }}" method="post">

                           @csrf

                           <div class="form-group">

                            <label>Name</label>

                            <input type="text" class="form-control" placeholder="Enter Name....." name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif

                            </div>

                            <div class="form-group">

                                <label>Email</label>

                                <input type="email" class="form-control" placeholder="Enter email....." name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))

                                    <span class="text-danger">{{ $errors->first('email') }}</span>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Phone</label>

                                <input type="number" class="form-control" placeholder="Enter number....." name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))

                                    <span class="text-danger">{{ $errors->first('phone') }}</span>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Password</label>

                                <input type="password" class="form-control" placeholder="Enter Strong Password....." name="password">

                                @if ($errors->has('password'))

                                    <span class="text-danger">{{ $errors->first('password') }}</span>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Status</label>

                               <select name="status" class="form-control" id="">

                                    <option value="1"> Select Status </option>

                                    <option value="1">Active</option>

                                    <option value="0">Inactive</option>

                               </select>

                                @if ($errors->has('status'))

                                    <span class="text-danger">{{ $errors->first('status') }}</span>

                                @endif

                            </div>

   

                           

   

                           <div class="text-center">

                           <button type="submit" class="btn btn-default btn-sm">Create</button>

                           <button onclick="{{ route('users.index') }}" class="btn btn-danger btn-sm">Cancel</button>

                        </div>

                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>



  

@endsection
