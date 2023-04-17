@extends('User.Master.main')
@section('content')
<div class="border-hed"> </div>
<!-- Latest blog END -->
<div class="section-full content-inner-1"
   style="background-image:url({{ asset('User/images/background/bg8.jpg') }}); padding-bottom: 0; background-repeat: no-repeat;">
   <div class="container">
      <div class="section-head-2 text-center text-white">
         <h2 class="text-primary">Buy {{ $package->package_name }}</h2>
      </div>
      <form action="{{ route("user.proceedToPay") }}" method="POST">
        @csrf
      <div class="row">
         <div class="col-lg-8 col-md-12 col-sm-12 form-bg offset-lg-2">
            <div class="bg-white p-3 growimg">
               <h5 class="text-center text-black"> {{ $package->package_name }} </h5>
               <div class="bgprlight">
                  <h1 class="rscol">
                     <sup> $</sup>
                     {{ $package->package_price }}
                     <sub>-{{ $package->package_type }}</sub>
                  </h1>
               </div>
               <div class="p-1 p-ul">
                  @php
                  $features = explode(',', $package->package_features);
                  @endphp
                  <ul>
                     @foreach ($features as $feature)
                     <li>{{ $feature }}</li>
                     @endforeach
                  </ul>
               </div>
               <input type="hidden" name="package_id" value="{{ $package->id }}">
               <button type="submit" class="mt-2 btn btn-primary aligncenter but-hov"> Proceed to pay</button>
            </div>
         </div>
        </form>
   </div>
</div>

@endsection