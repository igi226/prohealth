@extends('Admin.Main.main')
@section('title', 'Cms |Healthhoodlum')

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

                            <th>Title</th>

                            <th> Description</th>

                            
                            <th>Video Link</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($videos as $item)
                            <tr>

                                <td>#</td>

                                <td>{{ $item->title }}</td>

                                <td>{{ $item->description }}</td>

                                <td>{{ $item->youtube_link}}</td>



                                <td>

                                    <a href="{{ route('videosEdit', $item->id) }}" class="text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                            class="ti-pencil font-size-18"></i></a>
                                            {{-- {{ route('cms.edit', $item->slug) }} --}}

                                            <form method="POST" action="{{ route('videosDelete', $item->id) }}" class="action-icon d-inline-block pl-2">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="delete-icon show_confirm"
                
                                                    data-toggle="tooltip" title='Delete'>
                
                                                    <i class="fa fa-trash-o font-size-18 text-danger"></i>
                
                                                </button>
                
                                            </form>



                            </tr>
                        @endforeach



                    </tbody>

                    <tfoot>

                        <tr>

                            <th>#</th>

                            <th>Title</th>

                            <th> Description</th>

                            
                            <th>Video Link</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                </table>

            </div>
        </div>
    </div>
@endsection
