@extends('Admin.Main.main')
@section('title', 'users| Healthhoodlum')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="bootstrap-data-table-panel">
                @if(Session::has('msg'))
                       <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                <div class="table-responsive">
                    {{-- <table id="bootstrap-data-table-export" class="table table-striped table-bordered dt-responsive nowrap"> --}}
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Pnone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                
                           
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td><label class="switch">
                             
                                    <input class="changeS" type="checkbox" data-id="{{ $user->slug }}"
                                        {{ $user->status == 1 ? 'checked' : '' }} data-toggle="toggle" data-size="sm">
                                      
                                    {{-- <span class="slider round"></span> --}}
                                </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->slug) }}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                class="ti-pencil font-size-18"></i></a>
                                        {{-- <a href="{{ route('users.show', $user->slug) }}" class="text-success"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i
                                                class="ti-eye font-size-18 pl-2" style="font-size: 20px"></i></a> --}}
                                        <form method="POST" action="{{ route('users.destroy', $user->slug) }}" class="action-icon d-inline-block pl-2">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <input name="_method" type="hidden" value="DELETE"> --}}
                                            <button type="submit" class="delete-icon show_confirm"
                                                data-toggle="tooltip" title='Delete'>
                                                <i class="fa fa-trash-o font-size-18 text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
@endsection
@section('userStatus')
<script>
      $(document).ready(function() {


    $(function() {
        // $('.changeS').change(function() {
            $(".changeS").bind("change", function() {

            var status = $(this).prop('checked') == true ? 1 : 0;
            var data_id = $(this).attr('data-id');
            // var data_id = $(this).data('testiidmonial_id');
            // alert(data_id);
            $.ajax({
                type: "GET",
                url: "{{ url('admin/user/changeS') }}",
                data: {
                    'status': status,
                    'slug': data_id,
                    '_token': '{{ csrf_token() }}'
                },
                dataType: "JSON",
                success: function(response) {
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
} );  


</script>

@endsection