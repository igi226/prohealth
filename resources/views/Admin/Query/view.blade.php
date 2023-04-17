@extends('Admin.Main.main')
@section('title', 'Query |Healthhoodlum')

@section('content')
<section class="hero-section hero-section-3 pt-50 hero-container">

    <!--animated circle shape start-->



    <!--animated circle shape end-->

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <div class="col-md-12 col-lg-12 text-center">

                <div class="top-heading ptb-100">

                    <h2 class="font-weight-bold top-heading"> Query Details</h2>

                  

                </div>

            </div>

        

        

        </div>

    </div>



    

    <!--shape image end-->

</section>





<div class="module ptb-100">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-14">

                <!-- Post-->

                <article class="post">

                   

                    <div class="post-wrapper">

                        <div class="post-header">

                            <b class="post-title">{{ $query->name }}</b>

                           

                        </div>
                        
                        <div class="post-content">

                            <label for=""><b>Email:</b></label> 

                       {{ $query->email }}

                        </div>
                        

                        <div class="post-content">

                            <label for=""><b>Phone:</b></label>

                            {{ $query->phone }}
     
                             </div>
                       

                             <div class="post-content">

                        
                                <label for=""><b>Subject:</b></label>
                                {{ $query->subject }}
         
                                 </div>

                        <div class="post-content">

                            <label for=""><b>Message:</b></label>

                            <?php echo html_entity_decode($query->message);?>

                        </div>

                       

                    </div>

                </article>

               

            </div>

           

          

        </div>

        <div class="text-center">



      

        <a href="{{ route('admin.queries') }}" class="btn btn-danger btn-sm">Cancel</a>

    </div>

    </div>

</div>
@endsection