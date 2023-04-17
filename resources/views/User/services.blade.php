@extends('User.Master.main')
@section('content')
<section class="inner-banner" style="background-image:url('{{ asset('User/images/background/bg7.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center">Services</h2>
    </div>
</section>
<section class="py-5 innercontent">
    <div class="container">
        <div class="serviceblock">
            <div class="col-lg-5 mb-3 float-right">
                @if (isset($serviceCms1->image) && !empty($serviceCms1->image) && File::exists(public_path('storage/CmsImage/' . $serviceCms1->image)))
                <img src="{{ asset('storage/CmsImage/' . $serviceCms1->image) }}"
                   alt="" class="serviceImg">
                @else
                <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="serviceImg">
                @endif
            </div>
            <h4 class="font-weight-500 h4">{{ $serviceCms1->title }}</h4>
            <p><?php echo html_entity_decode($serviceCms1->description );?></p>
        </div>
        <div class="serviceblock">
            <div class="col-lg-5 mb-3 float-right">
                @if (isset($serviceCms2->image) && !empty($serviceCms2->image) && File::exists(public_path('storage/CmsImage/' . $serviceCms2->image)))
                <img src="{{ asset('storage/CmsImage/' . $serviceCms2->image) }}"
                   alt="" class="serviceImg">
                @else
                <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="serviceImg">
                @endif
            </div>
            <h4 class="font-weight-500 h4">{{ $serviceCms2->title }}</h4>
            <p><?php echo html_entity_decode($serviceCms2->description );?></p>
        </div>
        <div class="serviceblock">
            <div class="col-lg-5 mb-3 float-right">
                @if (isset($serviceCms3->image) && !empty($serviceCms3->image) && File::exists(public_path('storage/CmsImage/' . $serviceCms3->image)))
                <img src="{{ asset('storage/CmsImage/' . $serviceCms3->image) }}"
                   alt="" class="serviceImg">
                @else
                <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="serviceImg">
                @endif
            </div>
            <h4 class="font-weight-500 h4">{{ $serviceCms3->title }}</h4>
            <p><?php echo html_entity_decode($serviceCms3->description );?></p>
        </div>
        <div class="serviceblock">
            <div class="col-lg-5 mb-3 float-right">
                @if (isset($serviceCms4->image) && !empty($serviceCms4->image) && File::exists(public_path('storage/CmsImage/' . $serviceCms4->image)))
                <img src="{{ asset('storage/CmsImage/' . $serviceCms4->image) }}"
                   alt="" class="serviceImg">
                @else
                <img  src="{{ asset('noimg.png') }}" alt="no-p_image" class="serviceImg">
                @endif
            </div>
            <h4 class="font-weight-500 h4">{{ $serviceCms4->title }}</h4>
            <p><?php echo html_entity_decode($serviceCms4->description );?></p>
        </div>
        <div class="serviceblock">
            <h4 class="font-weight-500 h4">{{ $serviceCms5->title }}</h4>
            @php
                $explode = explode(",", $serviceCms5->short_desc);
            @endphp
            <ul class="symptomslist">
                @foreach ($explode as $item)
                <li class="w-100">{{ $item }}</li>
                @endforeach
            
                {{-- <li class="w-100">There is no charge for the Initial visits are generally 60 minutes, but may be 30 minutes in some cases.</li>
                <li class="w-100">We do not participate in any insurance programs.</li>
                <li class="w-100">Superbills will be provided, but reimbursement varies across carriers.</li> --}}
            </ul>
        </div>
    </div>
</section>
@endsection