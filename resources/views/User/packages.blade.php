@extends('User.Master.main')
@section('content')
<div class="border-hed"> </div>
<!-- Latest blog END -->
<div class="section-full content-inner-1"
   style="background-image:url({{ asset('User/images/background/bg8.jpg') }}); padding-bottom: 0; background-repeat: no-repeat;">
   <div class="container">
      <div class="section-head-2 text-center text-white">
         <h2 class="text-primary">Package</h2>
         @if(Session::has('msg'))
            <p class="alert text-warning">{{ Session::get('msg') }}</p>
         @endif
      </div>
      <div class="row">
         @forelse ($packages as $item)
         <div class="col-lg-3 col-md-12 col-sm-12 form-bg">
            <div class="bg-white p-3 growimg">
               <h5 class="text-center text-black"> {{ $item->package_name }} </h5>
               <div class="bgprlight">
                  <h1 class="rscol">
                     <sup> $</sup>
                     {{ $item->package_price }}
                     <sub>-{{ $item->package_type }}</sub>
                  </h1>
               </div>
               <div class="p-1 p-ul">
                  @php
                  $features = explode(',', $item->package_features);
                  @endphp
                  <ul>
                     @foreach ($features as $feature)
                     <li>{{ $feature }}</li>
                     @endforeach
                  </ul>
               </div>
			   @php
				   $running = DB::table("order_histories")->where("user_id", auth()->id())->where("end_date", ">", date('Y-m-d'))->select("package_id")->first();
				//    dd($running->package_id);
			   @endphp
			   @if (@$running->package_id == $item->id)
			   <button type="button" class="mt-2 btn btn-primary aligncenter but-hov"> Ongoing</button> 
			   @else
			   <a href="{{ route("user.buyPlan", $item->id) }}"><button type="button" class="mt-2 btn btn-primary aligncenter but-hov"> Buy Now</button> </a> 
			   @endif
              
            </div>
         </div>
         @empty
         @endforelse
      </div>
   </div>
</div>
</div>
@endsection