@extends('User.Master.main')
@section('content')
<section class="inner-banner5" style="background-image:url('{{ asset("User/images/background/privacy.jpg") }}')">
    <div class="container">
        <h2 class="privac-cont2 text-center"> What is integrative functional care </h2>  
    </div>
</section>

<section class="py-5 innercontent"> 
    <div class="container">
        <h2 class="about-cont2"><i class="fa fa-chevron-right" aria-hidden="true"></i>  {{ $integrative1->title }}</h2> 

        <p class="about-contp"> <?php echo html_entity_decode($integrative1->description );?></p>

            <h2 class="about-cont2"><i class="fa fa-chevron-right" aria-hidden="true"></i>   {{ $integrative2->title }}</h2> 

           <p class="about-contp"> <?php echo html_entity_decode($integrative2->description );?></p>

            <h2 class="about-cont2"><i class="fa fa-chevron-right" aria-hidden="true"></i>   {{ $integrative3->title }}</h2> 

           <p class="about-contp"><?php echo html_entity_decode($integrative3->description );?>  <br>
            </p>
            
            <h2 class="about-cont2"><i class="fa fa-chevron-right" aria-hidden="true"></i>   {{ @$integrative4->title }}</h2> 

           <p class="about-contp"> <?php echo html_entity_decode(@$integrative4->description );?></p>
    </div>
</section>
@endsection