@extends('Admin.Main.main')
@section('title', 'Testimonials |Healthhoodlum')

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

                            <th>Image</th>
                            <th>Message</th>

                            <th>Oppucation</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($testimonials as $item)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $item->name }}</td>

                                <td> @if (isset($item->image) && !empty($item->image) && File::exists(public_path('storage/testimonialsImage/' . $item->image)))
                                    <img height="80" width="100" src="{{ asset('storage/testimonialsImage/' . $item->image) }}"
                                        alt="">
                                @else
                                    <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                                @endif
                            </td>



                                <td>{{ implode(' ', array_slice(str_word_count(htmlspecialchars(trim(strip_tags($item->message))), 2), 0, 10)) }}

                                </td>



                                        


                                <td>

                                    {{ $item->occupation }}

                                </td>



                                <td>

                                    <a href="{{ route('testimonials.edit', $item->id) }}" class="text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                            class="ti-pencil font-size-18"></i></a>
                                            {{-- {{ route('testimonials.edit', $item->id) }} --}}

                                            <form method="POST" action="{{ route('testimonials.destroy', $item->id) }}" class="action-icon d-inline-block pl-2">
                                                @csrf
                                                @method("DELETE")
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

                            <th>Title</th>

                            <th>Short Description</th>

                            <th>Description</th>
                            <th>Image</th>

                            {{-- <th>Published At</th> --}}



                            <th>Action</th>

                        </tr>

                    </tfoot>

                </table>

            </div>
        </div>
    </div>
@endsection
