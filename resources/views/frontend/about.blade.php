
@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>


<section class="sec-about gap-80">
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp">
            <div class="col-lg-5">
                <p class="f-16 fw-500">{{ translateContent('About Us',  $translationService) }}</p>
                <h2 class="f-32 fw-600 line-h-15">{{ translateContent("We strive to simplify the management of your temporary employees",  $translationService) }}</h2>
                <br>
                <p class="f-18 fw-500 justify">{{ translateContent("At Timr, our mission is to transform the way you manage your temporary workforce. We understand the complexities that come with temporary employment, and we're here to simplify them with seamless, efficient tools designed to meet your staffing needs effortlessly.",  $translationService) }}</p>
            </div>
            <div class="col-lg-7">
                <br>
                <br>

               
                <p class="f-18 fw-500 justify">{{ translateContent("Our platform is built with a user-friendly interface that empowers you to streamline workflows, optimise resource allocation, and maintain compliance—all from one centralised system. Whether it's scheduling, tracking, or automating outreach, Timr provides the comprehensive solutions you need to manage your temporary employees with ease and precision.",  $translationService) }}</p>
                <br>
                 <p class="f-18 fw-500 justify">{{ translateContent("We’re dedicated to helping businesses like yours navigate the challenges of temporary staffing. Our commitment is to ensure that you can focus on what truly matters—growing your business—while we handle the complexities of workforce management.",  $translationService) }}</p>
                 <br>
                 <p class="f-18 fw-500 justify">{{ translateContent("Join us at Timr and experience a smarter, more efficient way to manage your temporary employees. Let us simplify your operations, enhance productivity, and ensure that your staffing needs are always met with the highest standards of excellence.",  $translationService) }}</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-4">
            <div class="col-lg-12">
                <img src="{{asset('frontend/assets/img/about.svg')}}" class="desktop img-fluid mx-auto " width="100%" alt="">
                <img src="{{asset('frontend/assets/img/about.png')}}" class="mobile img-fluid mx-auto " width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp">
            <div class="col-lg-4 text-center one">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="80">0</span><span>K+</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">{{ translateContent("Users signed up",  $translationService) }}</p>
                <p class="fw-400 f-16 line-h-15">{{ translateContent("Join a growing community of users who are ready to revolutionise their workforce management with Timr.",  $translationService) }} </p>
            </div>
            <div class="col-lg-4 text-center one">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="2">0</span><span>M+</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">{{ translateContent("Hours logged",  $translationService) }}</p>
                <p class="fw-400 f-16 line-h-15">{{ translateContent("Our early users have already logged over 2 million hours, helping us refine the platform for optimal performance.",  $translationService) }}</p>
            </div>
            <div class="col-lg-4 text-center">
                <h3 class="fw-600 f-65">
                    <span class="counter" data-target="100">0</span><span>K</span>
                </h3>
                <p class="fw-600 f-18 line-h-1">{{ translateContent("Improvements made",  $translationService) }}</p>
                <p class="fw-400 f-16 line-h-15">{{ translateContent("Your insights have driven over 100,000 enhancements, making Timr smarter and more efficient every day.",  $translationService) }}</p>
            </div>
        </div>
    </div>
</section>

<section class="sec-3 gap-80 wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="card rounded-4 bg-about">
            <div class="card-body">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <img src="{{asset('frontend/assets/img/about-1.svg')}}" alt="">
                    </div>
                    <div class="col-lg-7 p-4">
                        <h3 class="fw-600 f-32 text-white">{{ translateContent("Innovative recruitment solutions, tailored for your success",  $translationService) }}</h3> 
                        <p class="f-18 fw-500 justify text-white">{{ translateContent("At timr, we are dedicated to revolutionising the recruitment process. with a deep understanding of the challenges hr professionals face, we create intuitive, powerful tools designed to streamline every aspect of hiring. our solutions are crafted to help you connect with the right talent quickly and efficiently, so you can focus on what matters most — Building a strong, successful team.",  $translationService) }}</p>
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
                    <h2 class="f-32 fw-600">{{ translateContent("Meet",  $translationService) }} <br>{{ translateContent("Our Team",  $translationService) }} </h2>
                    <!-- <p class="f-18 fw-500">Backed by years of industry <br> experience and a commitment <br> to innovation</p> -->
                    <p class="f-18 fw-500">{{ translateContent("Driven by years of industry <br>expertise and a passion for innovation",  $translationService) }}</p>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{asset('frontend/assets/img/team/t-1.svg')}}" class="img-fluid" alt="">
                        <div class="content">
                          <p> {{ translateContent("Ammy Watson - CEO",  $translationService) }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{asset('frontend/assets/img/team/t-2.svg')}}" class="img-fluid" alt="">
                        <div class="content">
                          <p> {{ translateContent("Kenny Grey - COO",  $translationService) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{asset('frontend/assets/img/team/t-3.svg')}}" class="img-fluid" alt="">
                        <div class="content">
                          <p>{{ translateContent("Ashley K - PM",  $translationService) }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{asset('frontend/assets/img/team/t-4.svg')}}" class="img-fluid" alt="">
                        <div class="content">
                          <p>{{ translateContent("Joe Henry - PM",  $translationService) }}  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative mb-3">
                    <div class="team">
                        <img src="{{asset('frontend/assets/img/team/t-5.svg')}}" class="img-fluid" alt="">
                        <div class="content">
                          <p>{{ translateContent("Edward Parker - PM",  $translationService) }}   </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<section class="candidates gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 wow animate__ animate__fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <p class="fw-500 f-16 fw-500">{{ translateContent("Candidates",  $translationService) }}</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">{{ translateContent("Streamlined Recruitment, Enhanced Engagement",  $translationService) }}</h2>
                    <p class="f-18">{{ translateContent("The Candidate Management Module within our software platform offers a comprehensive
                        solution for efficiently managing all aspects of the recruitment process.",  $translationService) }} </p>

                    <div class="pt-4">
                        <ul class="liststar f-18 mb-3">
                            <li>{{ translateContent("Capture essential information, such as resumes, contact details, and interview feedback",  $translationService) }}
                            </li>
                            <li>{{ translateContent("Recruiters can streamline their processes, ensuring timely follow-ups",  $translationService) }} </li>
                            <li>{{ translateContent("Advanced search and filtering capabilities enable quick access to candidate information",  $translationService) }}
                            </li>
                            <li>{{ translateContent("Simplifies candidate tracking, improves recruitment outcomes, and overall productivity",  $translationService) }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card wow animate__ animate__fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="card-body">
                            <img src="{{asset('frontend/assets/img/list-2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




@include('frontend.section.newsletter')
@include('frontend.include.footer')


