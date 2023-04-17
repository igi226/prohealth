
@extends('User.Master.main')
@section('content')
<div class="page-content">
    <!-- Slider Banner -->
</div> </div> 
 
<div class="clear"></div>  
<div class="border-hed"> </div>   
  
    <!-- Latest blog END -->
    <div class="section-full content-inner-1" style="padding-top: 0;"> 
        <div class="container-fluid">  
            <div class="section-head-2 text-center text-white" style="background-image:url({{ asset('User/images/background/bg6.jpg') }}); 
            background-size:cover; background-position-y: bottom; line-height: 150px;">   
                <h2 class="text-primary g-lin">Blog </h2>     
                  
            </div>   
            @foreach ($blogs as $item)
                
            
            <div class="row bg-main-b">  
                @if ($item->id % 2 == 0)
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                    <a href="{{ route("user.viewBlogs",$item->slug ) }}">   
                     <img src="{{ asset('storage/BlogImage/'. $item->image) }}" alt="img" class="img-responsive img2"/> 
                     </a>
                </div>    
                @endif
               
                <div class="col-lg-6 col-md-6 col-sm-12">    
                    <a href="{{ route("user.viewBlogs",$item->slug ) }}"> 
                   <h1 class="bg-title">{{$item->title}}</h1>  
                    </a> 

                    <p class="bg-p">    
                        <i class="fa fa-quote-left"></i>
                        {{implode(' ', array_slice(str_word_count(htmlspecialchars(trim(strip_tags($item->description))),2),0,100))}} 
                
                    <i class="fa fa-quote-right"></i>  

                   </p>    
                   <a href="{{ route("user.viewBlogs",$item->slug ) }}" class="site-button bg-redmor"  target="_blank">Read More</a>
                </div>	
                @if ($item->id % 2 != 0)
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                    <a href="{{ route("user.viewBlogs",$item->slug ) }}">   
                     <img src="{{ asset('storage/BlogImage/'. $item->image) }}" alt="img" class="img-responsive img2"/> 
                     </a>
                </div>    
                @endif

            </div> 
            @endforeach 

            {{-- <div class="row bg-main-b">  
                 
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                    <a href="">  
                   <h1 class="bg-title">Restore Your Health 
                    Restore Your </br>Quality of Life</h1>  
                    </a> 

                    <p class="bg-p">    
                        <i class="fa fa-quote-left"></i>
                        We are a leading functional medicine health clinic that restores health and quality of 
                    life for people around the world. We use the latest advancements in diagnostic 
                    testing to uncover underlying dysfunctions.​​​​
                    We are able to uncover often overlooked factors that have a dramatic impact on your health. 
                    </br></br>
                    We are a leading functional medicine health clinic that restores health and quality of 
                    life for people around the world. We use the latest advancements in diagnostic 
                    testing to uncover underlying dysfunctions.​​​​
                    We are able to uncover often overlooked factors that have a dramatic impact on your health. 
                
                    <i class="fa fa-quote-right"></i>  

                   </p> 
                   <a href="#" class="site-button bg-redmor"  target="_blank">Read More</a> 
                </div>	
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                    <a href="">    
                    <img src="{{ asset('User/images/blog/grid/pic2.jpg') }}" alt="img" class="img-responsive img3"/> 
                    </a>
                </div>   
            </div> 
            


            <div class="row bg-main-b">  
                <div class="col-lg-6 col-md-6 col-sm-12">   
                    <a href="">   
                    <img src="{{ asset('User/images/blog/grid/pic1.jpg') }}" alt="img" class="img-responsive img2"/> 
                    </a>
                </div>  
                <div class="col-lg-6 col-md-6 col-sm-12">  
                    <a href=""> 
                   <h1 class="bg-title">Restore Your Health 
                    Restore </h1>   
                    </a>
                    <p class="bg-p">    
                        <i class="fa fa-quote-left"></i>
                        We are a leading functional medicine health clinic that restores health and quality of 
                    life for people around the world. We use the latest advancements in diagnostic 
                    testing to uncover underlying dysfunctions.​​​​
                    We are able to uncover often overlooked factors that have a dramatic impact on your health. 
                    </br></br>
                    We are a leading functional medicine health clinic that restores health and quality of 
                    life for people around the world. We use the latest advancements in diagnostic 
                    testing to uncover underlying dysfunctions.​​​​
                    We are able to uncover often overlooked factors that have a dramatic impact on your health. 
                
                    <i class="fa fa-quote-right"></i>  

                   </p>  
                   <a href="#" class="site-button bg-redmor" target="_blank">Read More</a>  
                </div>	

            </div>     --}}





        </div>
    </div>
</div>
@endsection