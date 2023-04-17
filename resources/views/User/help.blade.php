@extends('User.Master.main')
@section('content')
<section class="inner-banner5" style="background-image:url('{{ asset('User/images/background/block-bg-vid.jpg') }}')">
    <div class="container">
        <h2 class="privac-cont2 text-center text-white"> Help </h2>  
    </div>
</section>

<section class="innercontent"> 
    <div class="container qui2acc">
        <h2 class="about-cont2"> {{ $help->title }} </h2> 
        <p class="accordion-p text-center">  {{ $help->short_desc }}  </p>

        <button class="accordion active">{{ $help1->title }}</button>
        <div class="panel" style="max-height:200px">
            <p class="accordion-p">  <?php echo html_entity_decode($help1->description );?>
            
            </p>
        </div>
        
        <button class="accordion">{{ $help2->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help2->description );?>
            </p>
        </div>
        
        <button class="accordion">{{ $help3->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help3->description );?>
        </p>
        </div>

        <button class="accordion">{{ $help4->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help4->description );?>
            </p>
        </div>

        <button class="accordion">{{ $help5->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help5->description );?>
            </p>
        </div>

        <button class="accordion">{{ $help6->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help6->description );?></p>
        </div>

        <button class="accordion">{{ $help7->title }}</button>
        <div class="panel">
            <p class="accordion-p"><?php echo html_entity_decode($help7->description );?></p>
        </div>



    </div>
</section>
@endsection