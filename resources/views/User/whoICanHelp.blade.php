@extends('User.Master.main')
@section('content')
<section class="inner-banner" style="background-image:url('{{ asset('User/images/background/bg7.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center">Symptoms</h2>
    </div>
</section>
@php
$explode1 = explode(",", $whoIcanHelp1->short_desc);
$explode2 = explode(",", $whoIcanHelp2->short_desc);
$explode3 = explode(",", $whoIcanHelp3->short_desc);
$explode4 = explode(",", $whoIcanHelp4->short_desc);
$explode5 = explode(",", $whoIcanHelp5->short_desc);
@endphp
<section class="py-5 innercontent">
    <div class="container">
        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">{{ $whoIcanHelp1->title }}</h5>
            <ul class="symptomslist">
                @foreach ($explode1 as $item1)
                    
              
                <li>{{ $item1 }}</li>
                {{-- <li>Pre-diabetes</li>
                <li>Type 2 diabetes</li>
                <li>Metabolic Syndrome</li>
                <li>Hypertension</li>
                <li>Atherosclerosis</li>
                <li>Heart failure</li>
                <li>Heart disease</li>
                <li>Unexplained obesity/weight gain</li> --}}
                @endforeach
            </ul>
        </div>
        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">{{ $whoIcanHelp2->title }}</h5>
            <ul class="symptomslist">
                @foreach ($explode2 as $item2)
                    
              
                <li>{{ $item2 }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">{{ $whoIcanHelp3->title }}</h5>
            <ul class="symptomslist">
                @foreach ($explode3 as $item3)
                    
              
                <li>{{ $item3 }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">{{ $whoIcanHelp4->title }}</h5>
            <ul class="symptomslist">
                @foreach ($explode4 as $item4)
                    
              
                <li>{{ $item4 }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">{{ $whoIcanHelp5->title }} </h5>
            <ul class="symptomslist">
                @foreach ($explode5 as $item5)
                    
              
                <li>{{ $item5 }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection