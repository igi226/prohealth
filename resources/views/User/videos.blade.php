@extends('User.Master.main')
@section('content')
<section class="inner-banner5" style="background-image:url('{{ asset("User/images/background/block-bg-vid.jpg") }}')">
    <div class="container">
        <h2 class="privac-cont2 text-white text-center"> Our Videos </h2>    
    </div>
</section>

<section class="py-5 innercontent"> 
  @foreach ($videos as $video)
      
  
    <div class="container video-bd">
        <h2 class="video-bd-h1">{{ $video->title }}</h2>
        <p class="video-bd-p"> {{ $video->description }}</p>
        <div class="embed-responsive">
          {{-- <iframe class="embed-responsive-item" src=""></iframe> --}}
          <?php echo html_entity_decode($video->youtube_link );?>
        </div>
    </div>
    @endforeach
</section>
@endsection