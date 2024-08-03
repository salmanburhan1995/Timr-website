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
                <h2 class="f-32 fw-600 line-h-15">Sitemap</h2>

                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('price') }}">Pricing</a></li>
                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                    <li><a href="{{ route('feature') }}">Features</a></li>
                    <li><a href="{{ route('payment') }}">Payment</a></li>
                    <li><a href="{{ route('payment.confirm') }}">Payment Confirmation</a></li>
                    <li><a href="{{ route('signup.company') }}">SignUp - Company</a></li>
                    <li><a href="{{ route('signup.email') }}">SignUp - Email</a></li>
                    <li><a href="{{ route('signup') }}">SignUp</a></li>
                    <li><a href="{{ route('verify.opt.email') }}">verify otp by email</a></li>
                    <li><a href="{{ route('verify.opt.number') }}">verify otp by number</a></li>
                    <li><a href="{{ route('verify.opt.wait.email') }}">verify otp wait for email</a></li>
                    <li><a href="{{ route('verify.opt.wait.number') }}">verify otp wait for number</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>





@include('frontend.section.newsletter') ?>

@include('frontend.include.footer') ?>
