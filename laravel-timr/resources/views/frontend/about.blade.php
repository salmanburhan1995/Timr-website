
@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>


<section class="gap-80">
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp">
            <div class="col-lg-5">
                <p class="f-16 fw-500">{{ translateContent('About Us',  $translationService) }}</p>
                <h2 class="f-32 fw-600 line-h-15">{{ translateContent('We strive to simplify the management of your temporary employees',  $translationService) }}</h2>
            </div>
            <div class="col-lg-7">
                <br>
                <br>
                <p class="f-18 fw-500 justify">{{ translateContent('Our mission is to provide you with seamless and efficient tools to effortlessly manage your temporary workforce, ensuring that your staffing needs are met with ease. We are dedicated to simplifying the complexities of temporary employment.',  $translationService) }}</p>
                <br>

                <p class="f-18 fw-500 justify">{{ translateContent('With our user-friendly interface and comprehensive solutions, you can streamline workflows, optimize resource allocation, and ensure compliance with ease. Let us help you navigate the complexities of temporary staffing.',  $translationService) }}</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-4">
            <div class="col-lg-12">
                <img src="{{ asset('frontend/assets/img/about.svg') }}" class="img-fluid mx-auto " width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp">
            <div class="col-lg-4 text-center">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="80">0</span><span>K+</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">Lorem ipsum</p>
                <p class="fw-400 f-16 line-h-15">Lorem ipsum dolor sit <br> amet, consectetur </p>
            </div>
            <div class="col-lg-4 text-center">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="2">0</span><span>M+</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">Lorem ipsum</p>
                <p class="fw-400 f-16 line-h-15">Lorem ipsum dolor sit <br> amet, consectetur </p>
            </div>
            <div class="col-lg-4 text-center">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="100">0</span><span>K</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">Lorem ipsum</p>
                <p class="fw-400 f-16 line-h-15">Lorem ipsum dolor sit <br> amet, consectetur </p>
            </div>
        </div>
    </div>
</section>

<section class="gap-80 wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="card rounded-4 bg-about">
            <div class="card-body">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <img src="{{ asset('frontend/assets/img/about-1.svg') }}" alt="">
                    </div>
                    <div class="col-lg-7 p-4">
                        <h3 class="fw-600 f-32 text-white">{{ translateContent('Expert HR specialists, and developers',  $translationService) }}</h3>
                        <p class="f-18 fw-500 justify text-white">{{ translateContent('Timr is a pioneering software development firm specializing in cutting-edge solutions for the recruitment sector. With a passion for technology and a deep understanding of the challenges faced by HR professionals, we have crafted a suite of sophisticated recruitment software designed to streamline and optimize the hiring process.',  $translationService) }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="">
        <div class="container">
            <div class="row justify-content-center align-items-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-4">
                    <h2 class="f-32 fw-600">{{ translateContent('Meet',  $translationService) }} <br> {{ translateContent('Our Team',  $translationService) }}</h2>
                    <p class="f-18 fw-500">{{ translateContent('Backed by years of industry <br> experience and a commitment <br> to innovation',  $translationService) }}</p>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{ asset('frontend/assets/img/team/t-1.svg') }}" class="img-fluid" alt="">
                        <div class="content">
                          <p>  {{ translateContent('Ammy Watson - CEO',  $translationService) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{ asset('frontend/assets/img/team/t-2.svg') }}" class="img-fluid" alt="">
                        <div class="content">
                          <p> {{ translateContent('Kenny Grey - COO',  $translationService) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{ asset('frontend/assets/img/team/t-3.svg') }}" class="img-fluid" alt="">
                        <div class="content">
                          <p> Ashley K - PM',</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{ asset('frontend/assets/img/team/t-4.svg') }}" class="img-fluid" alt="">
                        <div class="content">
                          <p>  Joe Henry - PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{ asset('frontend/assets/img/team/t-5.svg') }}" class="img-fluid" alt="">
                        <div class="content">
                          <p>  Edward Parker - PM </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<section class="gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 wow animate__ animate__fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <p class="fw-500 f-16 fw-500">{{ translateContent('Candidates',  $translationService) }}</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">{{ translateContent('Streamlined Recruitment, Enhanced Engagement',  $translationService) }}</h2>
                    <p class="f-18">{{ translateContent('The Candidate Management Module within our software platform offers a comprehensive
                        solution for efficiently managing all aspects of the recruitment process. ',  $translationService) }}</p>

                    <div class="pt-4">
                        <ul class="liststar f-18 mb-3">
                            <li>{{ translateContent('Capture essential information, such as resumes, contact details, and interview feedback',  $translationService) }}
                            </li>
                            <li>{{ translateContent('Recruiters can streamline their processes, ensuring timely follow-ups',  $translationService) }} </li>
                            <li>{{ translateContent('Advanced search and filtering capabilities enable quick access to candidate information',  $translationService) }}
                            </li>
                            <li>{{ translateContent('Simplifies candidate tracking, improves recruitment outcomes, and overall productivity',  $translationService) }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card wow animate__ animate__fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/list-2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@include('frontend.section.newsletter')
@include('frontend.include.footer')


