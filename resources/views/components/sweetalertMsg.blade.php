@section('sweet_alrt_msg')

<script>

    @if($msg = session('msg'))

    setTimeout(function() {

        swal("Good job!", "You clicked the button!", "success");

    }, 1000);

    @endif

</script>

@endsection