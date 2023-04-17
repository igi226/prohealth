@extends('User.Master.main')
@section('content')
<section class="inner-banner5" style="background-image:url('{{ asset('User/images/background/about.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center"> About US </h2>  
    </div>
</section>

<section class="py-5 innercontent"> 
    <div class="container">
        <h2 class="about-cont"> {{ $about->title }}</h2> </br>
        <p class="about-contp"> <?php echo html_entity_decode($about->description );?></p>
        <div class="mb-3 col-lg-6 float-right">
            {{-- <img src="{{ asset("User/images/timeline/pic1.jpg") }}" class="rounded shadowab"> --}}
            @if (isset($about2->image) && !empty($about2->image) && File::exists(public_path('storage/CmsImage/' . $about2->image)))
            <img src="{{ asset('storage/CmsImage/' . $about2->image) }}"
               alt="" class="rounded shadowab">
            @else
            <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="rounded shadow">
            @endif
        </div>
        <h2 class="about-cont2"> {{ $about2->title }}</h2> </br>
        <p class="about-contp"> <?php echo html_entity_decode($about2->description );?></p>


            <div class="mb-3 col-lg-6 float-left">
                @if (isset($about3->image) && !empty($about3->image) && File::exists(public_path('storage/CmsImage/' . $about3->image)))
            <img src="{{ asset('storage/CmsImage/' . $about3->image) }}"
               alt="" class="rounded shadowab">
            @else
            <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="rounded shadow">
            @endif
            </div>
            <h2 class="about-cont2">{{ $about3->title }}</h2> </br>
            <p class="about-contp"> <?php echo html_entity_decode($about3->description );?></p>
    </div>
</section>
@endsection