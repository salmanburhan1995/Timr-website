@include('frontend.include.header')

<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">


</head>
<body>

<section class="pt-2 pb-2 otp_forms">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 ps-2">
                <img src="{{ asset('frontend/assets/img/sign-up-1.png') }}" class="img-fluid round" alt="">
            </div>
                  <div class="col-lg-1"></div>
            <div class="col-lg-5 px-5">
                <img src="{{ asset('frontend/assets/img/logo.svg') }}" class="img-fluid round mx-auto mb-3" alt="">
                <h2 class="fw-600 f-20 text-center">{{ translateContent('Verify Phone Number', $translationService) }}</h2>
                <p class="text-center">{{ translateContent('Enter the OTP Code to sent on +1234556789 to Continue', $translationService) }}</p>
                <form action="">
                    <div class="form-group mb-2">
                        <label for="" class="fw-500">{{ translateContent('OTP Code', $translationService) }}</label>
                    </div>
                    <div class="otp-field mb-4">
                        <input type="number" max="1"  class="form-control"/>
                        <input type="number" max="1" class="form-control"/>
                        <input type="number" max="1" class="form-control"/>
                        <input type="number" max="1" class="form-control"/>
                        <input type="number" max="1"  class="form-control"/>
                        <input type="number" max="1" class="form-control"/>
                    </div>

                    <button class="btn btn-primary btn-block mt-3 mb-4" style="width:100%">{{ translateContent('Continue', $translationService) }}</button>
                    <p class="f-18 fw-500">{{ translateContent("Didn't get the code", $translationService) }} <a href="#" style="color:purple">Resend', $translationService) }}</a></p>

                </form>
            </div>
             <div class="col-lg-1"></div>
        </div>
    </div>
</section>



@include('frontend.include.footerlink')
