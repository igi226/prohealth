@extends('User.Master.main')
@section('content')

<section class="inner-banner" style="background-image:url('{{ asset('User/images/background/bg7.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center">{{ $whoIam->title }}</h2>
    </div>
</section>

<section class="py-5 innercontent">
    <div class="container">
        <p>{{ $whoIam->short_desc }}  </p>
        <div class="mb-3 col-lg-6 float-right">
            @if (isset($whoIam->image) && !empty($whoIam->image) && File::exists(public_path('storage/CmsImage/' . $whoIam->image)))
            <img src="{{ asset('storage/CmsImage/' . $whoIam->image) }}"
               alt="" class="rounded shadow">
            @else
            <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="rounded shadow">
            @endif
        </div>
        <p><?php echo html_entity_decode($whoIam->description );?></p>
    </div>
</section>
@endsection