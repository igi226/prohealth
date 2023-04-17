@extends('User.Master.main')
@section('content')
<div class="page-content">
    <!-- Slider Banner -->
</div> </div> 
 
<div class="clear"></div>  
<div class="border-hed"> </div>   
  
    <!-- Latest blog END -->
    <div class="section-full content-inner-1" style="padding-top: 0;"> 
        <div class="container-fluid" style="padding: 0;">  
            <div class="section-head-2 text-center text-white block-view">    
                  
            </div>     
            
            <div class="container"> 
            <div class="row bg-main-b">  
                <h1 class="boog-titl5">{{$blog->title}}</h1>   
               
                <div class="col-lg-12 col-md-12 col-sm-12">    
                    <p class="bg-p">  
                        <img src="{{ asset('storage/BlogImage/'. $blog->image) }}" alt="img" class="img-responsive img2-blog"/>   
                        <i class="fa fa-quote-left"></i>  
                        <?php echo html_entity_decode($blog->description);?>
                    <i class="fa fa-quote-right"></i>  
                   </p>     
                
                </div>
            </div> 

            {{-- <div class="row bg-main-b">  
                <h1 class="boog-titl5">Restore Your Health 
                    Restore Your Quality of Life</h1>   
                <div class="col-lg-12 col-md-12 col-sm-12">      
                    <p class="bg-p">    
                        <img src="{{ asset("user-asset/images/blog/grid/pic1.jpg") }}" alt="img" class="img-responsive img2-blog3"/>   
                        <i class="fa fa-quote-left"></i>  
                        
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    </br></br>  
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                     </br></br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                    industry's standard dummy text ever since the been when an unknown printer.
                </br></br>  
                Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the 
                industry's standard dummy text ever since the been when an unknown printer.

                    <i class="fa fa-quote-right"></i>  
                   </p>     
                
                </div>
            </div>  --}}


        </div>   

        </div>
    </div>
</div>
@endsection