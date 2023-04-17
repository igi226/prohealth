@extends('User.Master.main')
@section('content')
    <div class="page-content">
        <!-- Slider Banner -->
        <div class="main-slider">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
                        <h1>{{ $home1->title }}.</h1>
                        <p>{{ $home1->short_desc }}</p>
                        <a href="{{ route('user.takeConsultation') }}" class="site-button radius-xl white"><i
                                class="fa fa-calendar"></i> Get a Consultation</a>
                        <a href="{{ route('user.contactUs') }}" class="site-button radius-xl black"><i
                                class="fa fa-phone"></i> Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Banner -->
        <!-- About -->
        <div class="section-full content-inner bgprlight">
            <div class="container">
                <div class="row section-head-2">
                    <div class="col-lg-6">
                        <h2 class="title">{{ $home2->title }}</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>{{ $home2->short_desc }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-bx-wraper center service-bx1 m-b30">
                            <div class="icon-xl text-primary m-b30"> <a href="{{ route('services') }}"
                                    class="icon-cell"><img src="{{ asset('User/images/icon/icon-1.png') }}"
                                        alt="" /></a> </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte">Services</h2>
                                <p>Open round the clock for convenience, quick and easy access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="icon-bx-wraper center service-bx1 m-b30">
                            <div class="icon-xl text-primary m-b30"> <a href="{{ route('user.lab') }}" class="icon-cell"><img
                                        src="{{ asset('User/images/icon/icon-2.png') }}" alt="" /></a> </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte">Lab Services</h2>
                                <p>Cost-efficient, comprehensive and clinical laboratory services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="icon-bx-wraper center service-bx1 m-b30">
                            <div class="icon-xl text-primary m-b30"> <a href="{{ route('user.quiz') }}"
                                    class="icon-cell"><img src="{{ asset('User/images/icon/icon-3.png') }}"
                                        alt="" /></a> </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte">Quiz</h2>
                                <p>Qualified and certified physicians for quality medical care.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Schedule -->
        <div class="section-full bg-white our-schedule p-t60 owl-nav-none p-b50">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12 text-center section-head">
                            <h3 class="h3"><span class="text-primary">{{ $home3->title }}</span></h3>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="m-b0">{{ $home3->short_desc }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="img-carousel-content owl-carousel mfp-gallery gallery owl-btn-center-lr col-lg-12">
                            @foreach ($consultations as $consultation)
                                <div class="item">
                                    <div class="ow-carousel-entry">
                                        <div class="ow-entry-media dez-img-effect zoom-slow">
                                            {{-- <img src="{{ asset('User/images/our-services/pic1.jpg') }}" alt=""> --}}
                                            @if (isset($consultation->image) &&
                                                    !empty($consultation->image) &&
                                                    File::exists(public_path('storage/ConsultImage/' . $consultation->image)))
                                                <img height="80" width="100"
                                                    src="{{ asset('storage/ConsultImage/' . $consultation->image) }}"
                                                    alt="">
                                            @else
                                                <img height="80" width="100" src="{{ asset('noimg.png') }}"
                                                    alt="no-p_image">
                                            @endif
                                        </div>
                                        <div class="ow-entry-content p-a15">
                                            <div class="ow-entry-title">
                                                <h5 class="m-tb0">{{ $consultation->name }}</h5>
                                            </div>
                                            <div class="ow-entry-text">
                                                <p>{{ $consultation->short_description }}</p>
                                            </div>
                                            <div class="ow-entry-button"></div>
                                            <div class="m-t10">
                                                <a href="{{ route('user.takeConsultation') }}"
                                                    class="site-button radius-xl m-r5">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- 
                  <div class="item">
                     <div class="ow-carousel-entry">
                        <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ asset('User/images/our-services/pic1.jpg') }}" alt=""></a> </div>
                        <div class="ow-entry-content p-a15">
                           <div class="ow-entry-title">
                              <h5 class="m-tb0"><a href="#">Cataract Treatment</a></h5>
                           </div>
                           <div class="ow-entry-text">
                              <p>Cataract diagnosis and treatment</p>
                           </div>
                           <div class="ow-entry-button"></div>
                           <div class="m-t10">
                              <a href="#" class="site-button radius-xl m-r5" >Book Now</a> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="ow-carousel-entry">
                        <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ asset('User/images/our-services/pic1.jpg') }}" alt=""></a> </div>
                        <div class="ow-entry-content p-a15">
                           <div class="ow-entry-title">
                              <h5 class="m-tb0"><a href="#">Laser Eye Surgery</a></h5>
                           </div>
                           <div class="ow-entry-text">
                              <p>Laser eye surgery and lens surgery</p>
                           </div>
                           <div class="ow-entry-button"></div>
                           <div class="m-t10">
                              <a href="#" class="site-button radius-xl m-r5" >Book Now</a> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="ow-carousel-entry">
                        <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ asset('User/images/our-services/pic1.jpg') }}" alt=""></a> </div>
                        <div class="ow-entry-content p-a15">
                           <div class="ow-entry-title">
                              <h5 class="m-tb0"><a href="#">General consultation</a></h5>
                           </div>
                           <div class="ow-entry-text">
                              <p>Pediatric ophthalmology and pediatric optometry</p>
                           </div>
                           <div class="ow-entry-button"></div>
                           <div class="m-t10">
                              <a href="#" class="site-button radius-xl m-r5" >Book Now</a> 
                           </div>
                        </div>
                     </div>
                  </div>
                  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Schedule END -->
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner"
            style="background-image:url(images/background/bg6.jpg); background-position:bottom; background-size:100%; background-repeat:no-repeat; ">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 m-b30">
                            <div class="m-b20">
                                <h2 class="h2">{{ $home4->title }} <br /> <span
                                        class="text-primary">{{ $home4->short_desc }} </span></h2>
                            </div>
                            <p><?php echo html_entity_decode($home4->description); ?></p>
                            <a href="{{ route('services') }}" class="site-button">Read More</a>
                        </div>
                        <div class="col-lg-4 col-md-12 m-b30 align-self-center">
                            {{-- <img src="{{ asset('User/images/yoga.png') }}" alt=""> --}}
                            @if (isset($home4->image) && !empty($home4->image) && File::exists(public_path('storage/CmsImage/' . $home4->image)))
                                <img src="{{ asset('storage/CmsImage/' . $home4->image) }}" alt="">
                            @else
                                <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full bg-white content-inner"
            style="background-image:url(images/background/bg6.jpg); background-position:bottom; background-size:100%; background-repeat:no-repeat; ">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 m-b30">
                            <div class="m-b20">
                                <h2 class="h2">{{ 'It starts here' }} <br /> <span
                                        class="text-primary">{{ 'Courses' }} </span></h2>
                            </div>
                            <p>Valuable possessions typically require care to keep them intact. Some may come with care
                                instructions or a user’s manual. The human body comes with nothing. You are left to figure
                                it out yourself. Let me give you that knowledge. Let me teach you such that you know about
                                functional wellness than the vast number of providers.</p>
                            <a href="#courses" class="site-button">Learn more >>></a>
                        </div>
                        <div class="col-lg-4 col-md-12 m-b30 align-self-center">
                            {{-- <img src="{{ asset('User/images/yoga.png') }}" alt=""> --}}
                            @if (isset($home4->image) && !empty($home4->image) && File::exists(public_path('storage/CmsImage/' . $home4->image)))
                                <img src="{{ asset('storage/CmsImage/' . $home4->image) }}" alt="">
                            @else
                                <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <div class="section-full content-inner bgprlight" id="courses">
            <div class="container">
                <div class="section-head-2 text-center">
                    <h2 class="title">{{ $home5->title }} <br />{{ $home5->short_desc }}</h2>
                    <p><?php echo html_entity_decode($home5->description); ?></p>
                </div>
                <div class="timeline">
                    <div class="timeline-bx">
                        <div class="media">
                            {{-- <img src="{{ asset('User/images/timeline/pic1.jpg') }}" alt=""> --}}
                            @if (isset($home6_a->image) &&
                                    !empty($home6_a->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $home6_a->image)))
                                <img src="{{ asset('storage/CmsImage/' . $home6_a->image) }}" alt="">
                            @else
                                <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                            @endif
                        </div>
                        <div class="info">
                            <h2 class="title">{{ $home6_a->title }}</h2>
                            <p>{{ $home6_a->short_desc }}</p>
                        </div>
                    </div>
                    <div class="timeline-bx">
                        <div class="media">
                            @if (isset($home6_b->image) &&
                                    !empty($home6_b->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $home6_b->image)))
                                <img src="{{ asset('storage/CmsImage/' . $home6_b->image) }}" alt="">
                            @else
                                <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                            @endif
                        </div>
                        <div class="info">
                            <h2 class="title">{{ $home6_b->title }}</h2>
                            <p>{{ $home6_b->short_desc }}</p>
                        </div>
                    </div>
                    <div class="timeline-bx">
                        <div class="media">
                            @if (isset($home6_c->image) &&
                                    !empty($home6_c->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $home6_c->image)))
                                <img src="{{ asset('storage/CmsImage/' . $home6_c->image) }}" alt="">
                            @else
                                <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                            @endif
                        </div>
                        <div class="info">
                            <h2 class="title">{{ $home6_c->title }}</h2>
                            <p>{{ $home6_c->short_desc }}</p>
                        </div>
                    </div>
                    {{-- Extra --}}
                    <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_b->image) && !empty($home6_b->image) && File::exists(public_path('storage/CmsImage/' . $home6_b->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_b->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "Understand Food Sensitivities" }}</h2>
                        <p>{{ "This is great to be informed on.  It negatively impacts a large part of the population, but there are also many people avoiding foods that they need not avoid.  This happens when people purchase a food sensitivity test off of the internet, receive a generic report with red, yellow and green demarcations and then incorrectly or unnecessarily remove foods.  A lot of the time, Instead of feeling better, they end up feeling the same and wasting money." }}</p>
                     </div>
                  </div>
                  <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_c->image) && !empty($home6_c->image) && File::exists(public_path('storage/CmsImage/' . $home6_c->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_c->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "Understand Detoxification and Biotransformation" }}</h2>
                        <p>{{ "The Detox regimens that people find in magazines, on websites, in blogs, on Instagram, etc. tend to cause an increase of free radicals and often times a recirculation of the discharged toxins.  They overwhelm the body’s biotransformation systems and do not typically teach a detoxifying lifestyle over abusive, intermittent “flushes”, “cleanses” and organ specific “Detoxes”.  Don’t do this wrong.  This course will teach it properly and explain the consequences other commonly marketed detox protocols." }}</p>
                     </div>
                  </div>
                  <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_b->image) && !empty($home6_b->image) && File::exists(public_path('storage/CmsImage/' . $home6_b->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_b->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "Understand Lipid labs including particle count" }}</h2>
                        <p>{{ "This is paramount to cardiovascular health and vascular inflammation.  You must be able to understand whether or not statins are necessary.  Many doctors think: ”Well, it can[t hurt so let’s just do them.”  This is incorrect.  Statins lower your CoQ10 (Ubiquinol), which every cell, especially muscle and heart cells, need to function properly.  This is the basis of the fatigue and muscle pain that often accompanies starting therapy.  Reading these labs can allow a person to track their diet and compare it to their lipid panel.  This way you can implement lifestyle changes in a way that will be predictably effective.  Oh yeah, thus can also help you avoid a heart attack.  So, there’s that." }}</p>
                     </div>
                  </div>
                  <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_c->image) && !empty($home6_c->image) && File::exists(public_path('storage/CmsImage/' . $home6_c->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_c->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "How to live your best life simply" }}</h2>
                        <p>{{ "This is a course that teaches scientifically proven dietary patterns and how to determine which one is right for your household.  Family size, time, food restrictions, health profiles, ages and cultural preferences are all taken into account.   IF you think mac n cheese is okay for your kids it isn’t.  It doesn’t matter if you got it at Whole Foods, if it is brown rice pasta or otherwise.  You might as well give them fast food.  Find out why.  Make keeping your family healthy easy." }}</p>
                     </div>
                  </div>

                  <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_b->image) && !empty($home6_b->image) && File::exists(public_path('storage/CmsImage/' . $home6_b->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_b->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "Understand Adrenal Dysfunction" }}</h2>
                        <p>{{ "This is another important topic that is discussed on every social platform and in various types of media.  It may be explained in a way that is correct, but incomplete, complete, but completely incorrect, science based, not science based, spoken on by non-professionals and professionals that are simply trying to ring the cash register.  The adrenal and thyroid courses complement one another, as they physiologically support each other as systems.  If your sleep is non-restorative, if you are holding weight in the middle without explanation," }}</p>
                     </div>
                  </div>
                  <div class="timeline-bx">
                     <div class="media">
                        @if (isset($home6_c->image) && !empty($home6_c->image) && File::exists(public_path('storage/CmsImage/' . $home6_c->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home6_c->image) }}"
                           alt="">
                        @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif
                     </div>
                     <div class="info">
                        <h2 class="title">{{ "Understand Functional Fertility problems" }}</h2>
                        <p>{{ "Fertility clinics do not test for heavy metals, for excessive free radical production, for food sensitivities that drive heightened immune activity, for mitochondrial dysfunction," }}</p>
                     </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Buy Now -->
        <div class="section-full">
            <div class="row clearfix dzseth m-lr0">
                <div class="col-lg-6 p-a0">
                    {{-- <img src="{{ asset('User/images/background/bg7.jpg') }}" class="img-cover"/> --}}
                    @if (isset($home7->image) && !empty($home7->image) && File::exists(public_path('storage/CmsImage/' . $home7->image)))
                        <img src="{{ asset('storage/CmsImage/' . $home7->image) }}" alt="" class="img-cover">
                    @else
                        <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image"
                            class="img-cover">
                    @endif
                </div>
                <div class="col-lg-6 bg-primary dis-tbl">
                    <div class="dis-tbl-cell p-b30">
                        <div class="text-white text-center max-w600 mx-auto ">
                            <h2 class="h2 m-tb30">{{ $home7->title }} <br />{{ $home7->short_desc }}</h2>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-white style-liner"></div>
                            </div>
                            <h5 class="font-weight-500"><?php echo html_entity_decode($home7->description); ?></h5>
                            <a class="site-button radius-xl white" href="{{ route('services') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Buy Now End -->
        <!-- Choose Your Package -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="h2"><span class="text-primary">{{ $home8->title }}</span></h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                    <p>{{ $home8->short_desc }}</p>
                </div>
                <div class="section-content price-table">
                    <div class="row">
                        @foreach ($packages as $package)
                            <div class="col-12 col-sm-6 col-lg-3 m-b30">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-price text-white bg-primary">
                                            <h5 class="m-t0">{{ $package->package_name }}</h5>
                                        </div>
                                        <div class="pricingtable-price-bx">
                                            <h4 class="my-3">
                                                <span>$</span>{{ $package->package_price }}-{{ $package->package_type }}
                                            </h4>
                                        </div>
                                        @php
                                            $features = explode(',', $package->package_features);
                                        @endphp
                                        <ul class="pricingtable-features">
                                            @foreach ($features as $feature)
                                                <li><i class="fa fa-check"></i> {{ $feature }} </li>
                                            @endforeach
                                        </ul>
                                        <div class="pricingtable-footer  bg-secondry-dark">
                                            @auth
                                                @php
                                                    $running = DB::table('order_histories')
                                                        ->where('user_id', auth()->id())
                                                        ->where('end_date', '>', date('Y-m-d'))
                                                        ->select('package_id')
                                                        ->first();
                                                @endphp
                                                @if (@$running->package_id == $package->id)
                                                    <a class="activeStatus">Ongoing</a>
                                                @else
                                                    <a href="{{ route('user.buyPlan', $package->id) }}"
                                                        class="site-button-link white">BUY NOW</a>
                                                @endif
                                            @else
                                                <a href="{{ route('login') }}" class="site-button-link white">SIGN UP NOW</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Your Package End -->
        <!-- Testimonials -->
        <div class="section-full bg-white content-inner-1 testimonials owl-nav-none"
            style="background-image:url(images/background/testi-bg.jpg); background-position:bottom; background-size:100%; background-repeat:no-repeat;">
            <div class="container">
                <div class="section-head-2 text-center">
                    <h2 class="title">{{ $home9->title }}</h2>
                    <p>{{ $home9->short_desc }}</p>
                </div>
                <div class="section-content">
                    <div class="testimonial-five mfp-gallery gallery owl-btn-center-lr owl-carousel owl-theme owl-loaded">
                        @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimonial-5">
                                    <div class="testimonial-text">
                                        <p class="p-b20">
                                            <?php echo html_entity_decode($testimonial->message); ?></p>
                                    </div>
                                    <div class="testimonial-detail clearfix info">
                                        <div class="testimonial-pic">
                                            @if (isset($testimonial->image) &&
                                                    !empty($testimonial->image) &&
                                                    File::exists(public_path('storage/testimonialsImage/' . $testimonial->image)))
                                                <img width="100" height="100"
                                                    src="{{ asset('storage/testimonialsImage/' . $testimonial->image) }}"
                                                    alt="">
                                            @else
                                                <img height="80" width="100" src="{{ asset('noimg.png') }}"
                                                    alt="no-p_image">
                                            @endif
                                        </div>
                                        <p class=" m-b0 "><strong>{{ $testimonial->name }}</strong>
                                            <span>{{ $testimonial->occupation }}</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="item">
                  <div class="testimonial-5">
                     <div class="testimonial-text">
                        <p class="p-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                     </div>
                     <div class="testimonial-detail clearfix info">
                        <div class="testimonial-pic"><img src="{{ asset('User/images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
                        <p class=" m-b0"><strong>David Matin</strong> <span>Businessman</span></p>
                     </div>
                  </div>
               </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        <!-- Latest blog -->
        <div class="section-full content-inner bg-white owl-nav-none "
            style="background-image:url({{ asset('User/images/background/bg8.jpg') }}); background-position:bottom; background-size:100%; background-repeat:no-repeat;">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2"><span class="text-primary">{{ $home10->title }}</span></h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                    <p>{{ $home10->short_desc }}</p>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-carousel mfp-gallery gallery owl-btn-center-lr  owl-carousel">
                                @foreach ($blogs as $blog)
                                    <div class="item equal-col m-b30">
                                        <div class="blog-post blog-grid date-style-2">
                                            <div class="dez-post-media dez-img-effect zoom-slow"> <a
                                                    href="{{ route('user.viewBlogs', $blog->slug) }}">
                                                    {{-- <img src="{{ asset('User/images/blog/grid/pic1.jpg') }}" alt=""> --}}
                                                    @if (isset($blog->image) && !empty($blog->image) && File::exists(public_path('storage/BlogImage/' . $blog->image)))
                                                        <img src="{{ asset('storage/BlogImage/' . $blog->image) }}"
                                                            alt="">
                                                    @else
                                                        <img height="80" width="100"
                                                            src="{{ asset('noimg.png') }}" alt="no-p_image">
                                                    @endif
                                                </a> </div>
                                            <div class="dez-post-info p-a20 bg-white">
                                                <div class="dez-post-title ">
                                                    <h3 class="post-title"><a
                                                            href="{{ route('user.viewBlogs', $blog->slug) }}">{{ $blog->title }}</a>
                                                    </h3>
                                                </div>
                                                <div class="dez-post-meta">
                                                    <ul>
                                                        <li class="post-date"> <i
                                                                class="far fa-calendar-alt"></i><strong>10 Aug</strong>
                                                            <span> 2022</span> </li>
                                                        {{-- <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li> --}}
                                                    </ul>
                                                </div>
                                                <div class="dez-post-text">
                                                    <p> {{ implode(' ', array_slice(str_word_count(htmlspecialchars(trim(strip_tags($blog->description))), 2), 0, 25)) }}
                                                    </p>
                                                </div>
                                                <div class="dez-post-readmore m-b0"> <a
                                                        href="{{ route('user.viewBlogs', $blog->slug) }}"
                                                        title="READ MORE" rel="bookmark" class="site-button-link">READ
                                                        MORE<i class="fa fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <div class="section-full content-inner-1" style="background-image:url(images/background/contact-bg.jpg);">
            <div class="container">
                <div class="section-head-2 text-center text-white">
                    <h2 class="text-primary">Learn To Be Sustainably Happy!</h2>
                    <p>Join the Happiness Program. Experience a calm mind, reduced anxiety, increased energy levels and
                        sustainable happiness everyday!</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        @if (Session::has('msg'))
                            <p class="alert text-warning">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="yoga-form">

                            <form method="post" action="{{ route('user.submitQuery') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control"
                                                    placeholder="Your Name">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control" required
                                                    placeholder="Your Email Id">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" required class="form-control"
                                                    placeholder="Phone">
                                                @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" required class="form-control"
                                                    placeholder="Subject">
                                                @if ($errors->has('subject'))
                                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                                @if ($errors->has('message'))
                                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="site-button">
                                            Submit Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30 align-self-center">
                        <img src="{{ asset('User/images/mountainpng-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
