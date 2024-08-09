@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>


<section class="gap-80">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8 mb-4">
                    <h4 class="f-16 fw-500">{{ translateContent('Let us help you',  $translationService) }}</h4>
                    <h2 class="f-32 fw-600">{{ translateContent('Unlimited list of incoming features',  $translationService) }} <br> {{ translateContent('that will help scale your workforce',  $translationService) }}
                    </h2>
                    <p>{{ translateContent('Automated scheduling, real-time tracking, and customizable reporting',  $translationService) }} <br>
                        {{ translateContent('empower seamless workforce management.',  $translationService) }}</p>
                </div>
        </div>
        <div class="row justify-content-center align-items-center wow animate__animated animate__fadeInUp">
            <div class="col-lg-4">
                <h2 class="f-32 fw-600">{{ translateContent('Offered Features',  $translationService) }}</h2>
                <p class="f-18 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/1.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Dashboard',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/2.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Insights',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/3.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Companies',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/4.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Cases',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/5.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Invoices',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/6.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Candidates',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/7.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Union Agreements',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  mb-3">
                <div class="position-relative">
                    <div class="card features">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/feature/8.png') }}" class="img-fluid img1" alt="">
                        </div>
                        <div class="f-content">
                            <img src="{{ asset('frontend/assets/img/candidate.svg') }}" whidth="20" class="img-fluid pb-3" alt="">
                            <h4 class="fw-600 f-20">{{ translateContent('Time Sheet',  $translationService) }}</h4>
                            <p class="f-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="gap-80"></div>
<section class="gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-2 position-relative mb-2">
                    <img src="{{ asset('frontend/assets/img/ca-1.svg') }}" class="img-fluid rounded ca-1 mb-2" alt="">
                </div>
                <div class="col-lg-2 position-relative mb-2">
                    <img src="{{ asset('frontend/assets/img/ca-2.svg') }}" class="img-fluid rounded ca-2  mb-2" alt="">
                </div>
                <div class="col-lg-4 text-center px-4 pt-4 pb-4">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="200048">200,048</span><span>+</span>
                </h3>
                <p class="fw-400 f-16 line-h-15">{{ translateContent('companies onboard Timr, efficiently
                managing temporary workers',  $translationService) }}</p>
                <a href="#" class="btn btn-primary ">{{ translateContent('Sign Up For Free',  $translationService) }}</a>
                </div>
                <div class="col-lg-2 position-relative mb-2">
                    <img src="{{ asset('frontend/assets/img/ca-3.svg') }}" class="img-fluid rounded ca-2" alt="">
                </div>
                <div class="col-lg-2 position-relative mb-2">
                    <img src="{{ asset('frontend/assets/img/ca-4.svg') }}" class="img-fluid rounded ca-1" alt="">
                </div>
            </div>
        </div>
    </section>
<div class="gap-80"></div>
@include('frontend.section.newsletter')
@include('frontend.include.footer')
