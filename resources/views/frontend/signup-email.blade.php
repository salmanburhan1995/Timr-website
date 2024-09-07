@include('frontend.include.header')

<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">


</head>

<body>

    <section class="pt-2 pb-2">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 ps-2">
                    <img src="{{ asset('frontend/assets/img/sign-up-1.png') }}" class="img-fluid round" alt="">
                </div>
              <div class="col-lg-1"></div>
                <div class="col-lg-5 px-5 mb-5">
                    <img src="{{ asset('frontend/assets/img/logo.svg') }}" class="img-fluid round mx-auto mb-3" alt="">
                    <h2 class="fw-600 f-20 text-center">{{ translateContent('Welcome Back',  $translationService) }}</h2>
                    <p class="text-center f-18">{{ translateContent('We Missed You!',  $translationService) }}</p>

                    <ul class="bynav nav nav-pills  justify-content-center align-items-center pt-5">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#home">{{ translateContent('Email',  $translationService) }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu1">{{ translateContent('Phone Number',  $translationService) }}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content mt-5">
                        <div class="tab-pane active" id="home">
                            <form action="">
                                <div class="form-group mb-4">
                                    <label for="" class="fw-500">{{ translateContent('Email',  $translationService) }}</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter your valid email address">
                                </div>
                                <button class="btn btn-primary btn-block mt-3 mb-4" style="width:100%">{{ translateContent('Sign In',  $translationService) }}</button>
                                <p>{{ translateContent('By placing order you agree to Terms of Service & Privacy Policy.',  $translationService) }}</p>
                                <p class="orline">or</p>
                                <button
                                    class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center"
                                    style="width:100%"> <img src="{{ asset('frontend/assets/img/google.svg') }}" alt="">{{ translateContent('Sign In with
                                    Google',  $translationService) }}</button>
                                <button
                                    class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center"
                                    style="width:100%"> <img src="{{ asset('frontend/assets/img/linkedin.svg') }}" alt="">{{ translateContent('Sign In with
                                    Linkedin',  $translationService) }}</button>
                            </form>
                        </div>
                        <div class="tab-pane fade mt-5" id="menu1">
                            <form action="">
                                <div class="form-group mb-4">
                                    <label for="" class="fw-500">{{ translateContent('Phone Number',  $translationService) }}</label>
                                    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number"
                                        name="phone">
                                </div>
                                <button class="btn btn-primary btn-block mt-3 mb-4" style="width:100%">{{ translateContent('Sign In',  $translationService) }}</button>
                                <p>{{ translateContent('By placing order you agree to Terms of Service & Privacy Policy.',  $translationService) }}</p>
                                <p class="orline">or</p>
                                <button
                                    class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center"
                                    style="width:100%"> <img src="{{ asset('frontend/assets/img/google.svg') }}" alt="">{{ translateContent('Sign In with
                                    Google',  $translationService) }}</button>
                                <button
                                    class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center"
                                    style="width:100%"> <img src="{{ asset('frontend/assets/img/linkedin.svg') }}" alt="">{{ translateContent('Sign In with
                                    Linkedin',  $translationService) }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                      <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    @include('frontend.include.footerlink')
