@extends('Admin.Main.main')
@section('title', 'Quizzes | Healthhoodlum')
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
                <th>Question</th>
                <th>Ans1</th>
                <th>Ans2</th>
                {{-- <th>Ans3</th> --}}
                <th>Correct answer</th>
                <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($quizzes as $item)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->question }}</td>
                  <td>{{ $item->ans1 }}</td>
                  <td>{{ $item->ans2 }}</td>
                  {{-- <td> {{ $item->ans3 }} </td> --}}
                  @php
                      $columns = \Schema::getColumnListing('quizzes');
                      foreach($columns as $col_name){
                        if ($col_name == $item->correct_ans) {
                            $correct_ans = DB::table("quizzes")->where("id", $item->id)->value("$col_name");
                        }
                      }
                  @endphp
                  <td> {{ $correct_ans }}</td>
                  <td>
                     <a href="{{ route('quizzes.edit', $item->id) }}" class="text-primary"

                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i

                            class="ti-pencil font-size-18"></i></a>
                     <form action="{{ route('quizzes.destroy', $item->id) }}" method="POST" class="action-icon d-inline-block pl-2">
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
                  <th>Question</th>
                  <th>Ans1</th>
                  <th>Ans2</th>
                  {{-- <th>Ans3</th> --}}
                  <th>Correct answer</th>
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
{{-- @section('changePS')
<script>
  
    function GetSelectedTextValue(industry, appointment_id) {
        //  alert(appointment_id);
        function ajaxCall() {
        $.ajax({

            type: "GET",
            url: "{{ url('admin/quizzes/changeS') }}",
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

@endsection --}}