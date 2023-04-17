@extends('Admin.Main.main')
@section('title', 'Appointments | Healthhoodlum')
@section('content')
<div class="">
    <div class="row">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
           <div class="card">
               <div class="card-title">
                   <h4>Edit appointments</h4>
               </div>
               <div class="card-body">
                   <div class="basic-form">
                       <form action="{{ route('appointments.update', $appointments->id) }}" method="post">
                           @csrf
                           @method("PUT")
                           <div class="form-group">
                            <label>Name</label>
                            <input  class="form-control" value="{{ $appointments->users->name }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>Consultation name</label>
                                <select name="consultation_id" id="" class="form-control">
                                    @php
                                        $consultations = DB::table("consultations")->get();
                                    @endphp
                                    @foreach ($consultations as $consultation)
                                    <option {{  $consultation->id == $appointments->consultation_id ? "selected" : ""  }} value="{{ $consultation->id }}">{{ $consultation->name }}</option>
                                    @endforeach
                                    
                                </select>
                                </div>

                            
                            <div class="form-group">
                                <label>Status</label>
                                
                            
                            <select name="status" class="form-control">
                                <option {{  $appointments->status == "1" ? "selected" : ""  }} value="1">Approved</option>
                                <option {{  $appointments->status == "0" ? "selected" : ""  }} value="0">Pending</option>
                                
                            </select>
                            @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                
                            <div class="form-group">
                                <label>Message</label>
                                <input type="text" class="form-control" name="message" value="{{ $appointments->message }}">
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <input type="date" class="form-control" name="appointment_date" value="{{ $appointments->appointment_date }}">
                                @if ($errors->has('appointment_date'))
                                    <span class="text-danger">{{ $errors->first('appointment_date') }}</span>
                                @endif
                            </div>
                            
                           
                            
                            
   
                           
   
                           <div class="text-center">
                           <button type="submit" class="btn btn-default btn-sm">Update</button>
                           <a href="{{ route('appointments.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

  
@endsection
