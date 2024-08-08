@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>

<section class="gap-80 border-top-1">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 px-4">
                <img src="{{ asset('frontend/assets/img/confirm.svg') }}" class="img-fluid mx-auto mb-3" alt="">
                <h2 class="fw-600 f-45">{{ translateContent('Thank You For Subscribing',  $translationService) }} </h2>
                <p class="f-24 fw-400">{{ translateContent('Your subscription for pro plan has been activated.',  $translationService) }}</p>
                <a href="#" class="btn btn-primary btn-block mt-3 mb-4">{{ translateContent('Go To My Dashboard',  $translationService) }}</a>

            </div>
        </div>
    </div>
</section>
@include('frontend.include.footer')


