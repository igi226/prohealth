@extends('User.Master.main')
@section('content')
<section class="inner-banner" style="background-image:url('{{ asset('User/images/health.jpg') }}')">
    <div class="container">
        <h2 class="h2 text-white text-center">Conditions We Treat</h2>
        <p class="text-center  text-white">Chronic Issues and Preventive Care for Men, Women, and Children</p>
    </div>
</section>

<section class="py-5 innercontent">
    
    <div class="container">
        <h3 class="font-weight-500 h4 mb-4 text-center">Some Key Conditions We Treat</h3>
        <div class="row mb-4">
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab1.webp') }}">
                        <h2>Digestive Disorders</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab2.webp') }}">
                        <h2>Hypothyroidism</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab3.jpg') }}">
                        <h2>Hormone Imbalance</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab4.jpg') }}">
                        <h2>Menopause & Perimenopause</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab5.jpg') }}">
                        <h2>Autoimmune Diseases</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab6.jpg') }}">
                        <h2>Chronic Pain</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab7.jpg') }}">
                        <h2>Skin Disorders</h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="labBox position-relative">
                    <a href="#" class="laboximg"><img src="{{ asset('User/images/lab8.jpg') }}">
                        <h2>Insomnia</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">Cardiometabolic</h5>
            <ul class="symptomslist">
                <li>High Cholesterol</li>
                <li>Pre-diabetes</li>
                <li>Type 2 diabetes</li>
                <li>Metabolic Syndrome</li>
                <li>Hypertension</li>
                <li>Atherosclerosis</li>
                <li>Heart failure</li>
                <li>Heart disease</li>
                <li>Unexplained obesity/weight gain</li>
            </ul>
        </div>
        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">Digestive</h5>
            <ul class="symptomslist">
                <li>Nausea + Vomiting</li>
                <li>IBS</li>
                <li>Crohn’s disease</li>
                <li>Ulcerative colitis</li>
                <li>Acid reflux/GERD</li>
                <li>Diverticulitis</li>
                <li>Food intolerances</li>
                <li>Parasitic infection</li>
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">Autoimmune Disease</h5>
            <ul class="symptomslist">
                <li>Rheumatoid arthritis</li>
                <li>Psoriatic arthritis</li>
                <li>Celiac disease</li>
                <li>Grave’s disease</li>
                <li>Hashimoto’s thyroiditis</li>
                <li>Lupus</li>
                <li>Sjogren’s symptoms</li>
                <li>Type 1 diabetes</li>
                <li>Multiple sclerosis</li>
                <li>Connective tissue diseases</li>
                <li>Scleroderma</li>
                <li>Non-specific joint inflammation</li>
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">Hormonal</h5>
            <ul class="symptomslist">
                <li>Hormonal imbalance</li>
                <li>Low libido</li>
                <li>Hypogonadism</li>
                <li>Adrenal dysfunction</li>
                <li>Polycystic ovarian symptoms</li>
                <li>Premenstrual symptoms</li>
                <li>Amenorrhea</li>
                <li>Menopause</li>
                <li>Perimenopause</li>
                <li>High cortisol</li>
                <li>Adrenal Fatigue/Insufficiency</li>
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="font-weight-500 h4 mb-4">Miscellaneous </h5>
            <ul class="symptomslist">
                <li>Fatigue</li>
                <li>Low Threshold to Stressors</li>
                <li>Non-restorative sleep</li>
                <li>Regular waking between 2-5am</li>
                <li>Inexplicable bloating or gas</li>
                <li>Hives</li>
                <li>Breathing problems</li>
            </ul>
        </div>
    </div>
</section>
@endsection