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
            <div class="col-lg-5 px-5">
                <img src="{{ asset('frontend/assets/img/logo.svg') }}" class="img-fluid round mx-auto mb-3" alt="">
                <h2 class="fw-600 f-20 text-center">{{ translateContent('Create your account',  $translationService) }}</h2>
                <p class="text-center">{{ translateContent('Enter the answer for following fields and get started',  $translationService) }}</p>
                <form action="{{route('signupStore')}}" method="POST" >
                    @csrf
{{--                    <div class="form-group mb-2">--}}
{{--                        <label for="" class="fw-500">{{ translateContent('Full Name',  $translationService) }}</label>--}}
{{--                        <input type="text" class="form-control" placeholder="Enter your valid email address">--}}
{{--                    </div>--}}
                    <div class="form-group mb-2">
                        <label for=""  class="fw-500">{{ translateContent('Email',  $translationService) }}</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your valid email address">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
{{--                    <div class="form-group mb-2">--}}
{{--                        <label for=""  class="fw-500">{{ translateContent('Phone Number',  $translationService) }}</label>--}}
{{--                        <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone">--}}
{{--                    </div>--}}

                    <button class="btn btn-primary btn-block mt-3 mb-4" style="width:100%">{{ translateContent('Sign Up',  $translationService) }}</button>
                    <p>{{ translateContent('By placing order you agree to Terms of Service & Privacy Policy.',  $translationService) }}</p>
                    <p class="orline">{{ translateContent('or',  $translationService) }}</p>
                    <a href="{{ url('auth/google') }}" class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center" style="width:100%"> <img src="{{ asset('frontend/assets/img/google.svg') }}" alt="">Sign up with Google</a>
                    <a href="{{ url('auth/linkedin') }}" class="btn btn-border btn-block mt-3 mb-4 d-flex justify-content-center align-item-center" style="width:100%"> <img src="{{ asset('frontend/assets/img/linkedin.svg') }}" alt="">Sign up with Linkedin</a>
                    @if(Session::has('success'))
                        <p class="text-success">{{Session::get('success')}}</p>
                    @else
                        <p class="text-danger">{{Session::get('error')}}</p>
                    @endif

                </form>
            </div>
                  <div class="col-lg-1"></div>
        </div>
    </div>
</section>



@include('frontend.include.footerlink')
