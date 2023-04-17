@extends('Admin.Main.main')
@section('title', 'Cms |Healthhoodlum')

@section('content')
<section class="hero-section hero-section-3 pt-50 hero-container">

    <!--animated circle shape start-->



    <!--animated circle shape end-->

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <div class="col-md-12 col-lg-12 text-center">

                <div class="top-heading ptb-100">

                    <h2 class="font-weight-bold top-heading"> Content Details</h2>

                  

                </div>

            </div>

        

        

        </div>

    </div>



    

    <!--shape image end-->

</section>





<div class="module ptb-100">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12">

                <!-- Post-->

                <article class="post">

                    <div class="post-preview text-center">

                        

                        @if (isset($cms->image) && !empty($cms->image) && File::exists(public_path("storage/CmsImage/" . $cms->image)))

                            <img  src="{{ asset('storage/CmsImage/'.$cms->image)}}" alt="article" class="img-fluid">

                        @else

                            <img height="80" width="100" src="{{asset('noimg.png')}}" alt="no-p_image" class="img-fluid">

                        @endif  

                    </div>

                    <div class="post-wrapper">

                        <div class="post-header">

                            <h1 class="post-title">{{ $cms->title }}</h1>

                            {{-- <ul class="post-meta"> --}}

                               

                                {{-- <li>{{  Carbon\Carbon::parse($cms->created_at)->format('D, d M Y H:i') }}</li> --}}

                                {{-- <li>In <a href="#">Branding</a>, <a href="#">Design</a></li>

                                <li><a href="#">3 Comments</a></li> --}}

                            {{-- </ul> --}}

                        </div>

                        <div class="post-content">

                        

                       {{ $cms->short_desc }}

                        </div>

                        <div class="post-content">

                        

                            <?php echo html_entity_decode($cms->description);?>

                        </div>

                       

                    </div>

                </article>

               

            </div>

           

          

        </div>

        <div class="text-center">



      

        <a href="{{ route('cms.index') }}" class="btn btn-danger btn-sm">Cancel</a>

    </div>

    </div>

</div>
@endsection