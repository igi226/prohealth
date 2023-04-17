@extends('Admin.Main.main')
@section('title', 'Queries |Healthhoodlum')

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

                            <th>Email</th>
                            <th>Phone</th>

                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($queries as $item)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ @$item->name }}</td>
                                <td>{{ @$item->email }}</td>
                                <td>{{ @$item->phone }}</td>
                                <td>{{ @$item->subject }}</td>

                                <td>{{ implode(' ', array_slice(str_word_count(htmlspecialchars(trim(strip_tags(@$item->message))), 2), 0, 10)) }}

                                </td>
                                <td>

                                    <a href="{{ route('admin.queriesView', $item->id) }}" class="text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i
                                            class="ti-eye font-size-18"></i></a>
                                            

                                            <form method="POST" action="{{ route('admin.queriesDelete', $item->id) }}" class="action-icon d-inline-block pl-2">
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

                            <th>Name</th>

                            <th>Email</th>
                            <th>Phone</th>

                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                </table>

            </div>
        </div>
    </div>
@endsection
