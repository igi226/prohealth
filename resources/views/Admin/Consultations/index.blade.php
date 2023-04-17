@extends('Admin.Main.main')
@section('title', 'Consultations | Healthhoodlum')
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
                        <th>Short description</th>

                        
                        <th>Image</th>
                        
                    
                        <th>Action</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultations as $item)
                        
                   
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->short_description }}</td>
                       
                        <td>
                            @if (isset($item->image) && !empty($item->image) && File::exists(public_path('storage/ConsultImage/' . $item->image)))
                                        <img height="80" width="100" src="{{ asset('storage/ConsultImage/' . $item->image) }}"
                                            alt="">
                                    @else
                                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                                    @endif
                        </td>

                        <td> 
                            <a href="{{ route('consultations.edit', $item->id) }}" class="text-primary"
                           
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                    class="ti-pencil font-size-18"></i></a>
                           
                            <form action="{{ route('consultations.destroy', $item->id) }}" class="action-icon d-inline-block pl-2" method="POST">
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
                        <th>Short description</th>

                        
                        <th>Image</th>
                        
                    
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
        
        $(function() {
            $('.changePS').change(function() {

                var status = $(this).prop('checked') == true ? 1 : 0;
                var data_id = $(this).attr('data-id');
                // var data_id = $(this).data('testiidmonial_id');
                //alert(data_id);
                $.ajax({
                    type: "GET",
                    url: "{{ url('admin/packages/changePS') }}",
                    data: {
                        'status': status,
                        'id': data_id,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        // alert('updated');
                        // location.reload();
                        setTimeout(function() {
                            swal({
                                title: "Success!",
                                text: response.msg,
                                type: "success"
                            }, function() {
                                window.location
                            });
                        }, 1000);
                    }
                });
            })
        })
    </script>



@endsection