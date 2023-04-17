@extends('User.Master.main')
@section('content')
<section class="inner-banner" style="background-image:url('{{ asset('User/images/background/bg7.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center">What We Do at Health Hoodlum</h2>
    </div>
</section>

<section class="py-5 innercontent">
    <div class="container">
        <p>Health Hoodlum is an educational body.  We teach lay people how to better care for themselves, their family and how to institute advanced health measures that prevent conditions before they manifest.  We also provide knowledge that enables participants to interpret data, scrutinize research and make excellent health decisions, rather than mindlessly following instructions given by providers that are many years or decades behind the research.</p>
        <p>Health Hoodlum represents a no BS approach to functional care that makes the issues easy to understand and the supportive measures simple to implement.</p>
        <div class="mb-3 col-lg-6 float-right">
            <img src="{{ asset('User/images/overcome-adversity.jpg') }}" class="rounded shadow">
        </div>
        <p>We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur. </p>
        <p>We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.  </p>
        <p>Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</p>
    </div>
</section>
@endsection