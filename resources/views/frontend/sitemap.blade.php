@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>
<style>
    ul {}

    ul>li {
        padding: 5px 0;
    }

    ul>li a {
        font-size: 16px;
        color: #666;
    }
</style>

<section class="gap-80">
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp">
            <div class="col-lg-5">
                <h2 class="f-32 fw-600 line-h-15">Sitemap',  $translationService) }}</h2>

                <ul>
                    <li><a href="{{ route('index') }}">{{ translateContent('Home',  $translationService) }}</a></li>
                    <li><a href="{{ route('price') }}">{{ translateContent('Pricing',  $translationService) }}</a></li>
                    <li><a href="{{ route('aboutus') }}">{{ translateContent('About Us',  $translationService) }}</a></li>
                    <li><a href="{{ route('feature') }}">{{ translateContent('Features',  $translationService) }}</a></li>
                    <li><a href="{{ route('payment') }}">{{ translateContent('Payment',  $translationService) }}</a></li>
                    <li><a href="{{ route('payment.confirm') }}">{{ translateContent('Payment Confirmation',  $translationService) }}</a></li>
                    <li><a href="{{ route('signup.company') }}">{{ translateContent('SignUp - Company',  $translationService) }}</a></li>
                    <li><a href="{{ route('signup.email') }}">{{ translateContent('SignUp - Email',  $translationService) }}</a></li>
                    <li><a href="{{ route('signup') }}">{{ translateContent('SignUp',  $translationService) }}</a></li>
                    <li><a href="{{ route('verify.opt.email') }}">{{ translateContent('verify otp by email',  $translationService) }}</a></li>
                    <li><a href="{{ route('verify.opt.number') }}">{{ translateContent('verify otp by number',  $translationService) }}</a></li>
                    <li><a href="{{ route('verify.opt.wait.email') }}">{{ translateContent('verify otp wait for email',  $translationService) }}</a></li>
                    <li><a href="{{ route('verify.opt.wait.number') }}">{{ translateContent('verify otp wait for number',  $translationService) }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>





@include('frontend.section.newsletter') ?>

@include('frontend.include.footer') ?>
