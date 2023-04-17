@extends('Admin.Main.main')
@section('title', 'Appointments | Healthhoodlum')
@section('content')
<div class="row">
   <div class="col-lg-12">
      @if(Session::has('msg'))
      <p class="alert alert-info">{{ Session::get('msg') }}</p>
      @endif
      <div class="card">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Consultation name</th>
                  <th>Message</th>
                  <th>Status</th>
                  <th>Appointment date</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($appoinments as $item)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ @$item->users->name }}</td>
                  <td>{{ @$item->consultations->name }}</td>
                  <td>{{ $item->message ?? "No message" }}</td>
                  <td>
                     <select name="status" class="form-control" id="{{ $item->id }}"  onchange="GetSelectedTextValue(this, {{ $item->id }})">
                     <option value="1" @if($item->status == 1) selected @endif>Approved</option>
                     <option value="0" @if($item->status == 0) selected @endif>Pending</option>
                     </select>
                  </td>
                  <td>{{  Carbon\Carbon::parse($item->appointment_date)->format('D, d M Y') }}</td>
                  <td>
                     <a href="{{ route('appointments.edit', $item->id) }}" class="text-primary"

                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i

                            class="ti-pencil font-size-18"></i></a>
                     <form action="{{ route('appointments.destroy', $item->id) }}" method="POST" class="action-icon d-inline-block pl-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-icon show_confirm"
                           data-toggle="tooltip" title='Delete'>
                        <i class="fa fa-trash-o font-size-18 text-danger"></i>
                        </button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Consultation name</th>
                  <th>Message</th>
                  <th>Status</th>
                  <th>Appointment date</th>
                  <th>Action</th>
               </tr>
            </tfoot>
         </table>
      </div>
      <!-- /# card -->
   </div>
   <!-- /# column -->
</div>
@endsection
@section('changePS')
<script>
  
    function GetSelectedTextValue(industry, appointment_id) {
        //  alert(appointment_id);
        function ajaxCall() {
        $.ajax({

            type: "GET",
            url: "{{ url('admin/appointments/changeS') }}",
            data: {
                'status': industry.value,
                'appointment_id': appointment_id,
                '_token': '{{ csrf_token() }}'
            },
            dataType: "JSON",
            
            success: function (data) {
                setTimeout(function() {
                    swal({
                        title: "Success!",
                        text: data.msg,
                        type: "success"
                    }, );
                }, 1000);
            },
            error: function (error) {
                console.log(`Error ${error}`);
            }
        });
    }
    ajaxCall();
   
    }
   
 
   

</script>

@endsection