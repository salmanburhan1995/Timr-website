@include('frontend.include.header')
@include('frontend.include.nav')

</head>

<body>
    <section class="bannercontent position-relative pt-5">
        <div class="container">
            <div class="row pt-5 px-4 justify-content-center align-items-center text-center">
                <div class="col-lg-12">

                    <p class="f-14 mb-3 tags bg-tags wow animate__animated animate__fadeInDown">{{ translateContent('Streamline employee time management effortlessly.', $translationService) }}</p>
                    <h1 class="ff-primary fw-600 line-h-15 wow animate__animated animate__fadeInDown">{{ translateContent('Efficiently track and manage temporary', $translationService) }} <br> {{ translateContent('workers and your clients', $translationService) }} </h1>
                    <p class="f-18 line-h-15 wow animate__animated animate__fadeInDown">
                        {{ translateContent('An intuitive software that streamlines scheduling, tracking, and workforce productivity.', $translationService) }}
                        <br> {{ translateContent('Use built-in match scoring, personality testing, and automated outreach to connect with clients', $translationService) }}
                        <br> {{translateContent('and candidates directly in the system, ensuring the perfect fit every time.', $translationService)}}
                    </p>
                    <a href="#" class="btn btn-primary wow animate__animated animate__fadeInDown">@lang('messages.sign_free')</a>
                    <div class="d-flex justify-content-center align-items-center pt-4 pb-5 wow animate__animated animate__fadeInDown"> <img
                            src="{{ asset('frontend/assets/img/fi-rr-credit-card.svg') }}" class="px-2" alt="">@lang('messages.no_credit')</div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-img-header cover position-relative pt-5">
            <div class="row justify-content-center align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="abscard1 wow animate__animated animate__fadeIn">
                        <div class="card ex4 card-bx floaty">
                            <div class="card-body boxes1">
                                <div class="">
                                    <p class="pb-3">{{ translateContent('Active Candidates', $translationService) }}</p>
                                    <h4 class="f-16 fw-500 line-h-0">10</h4>
                                    <p class="f-12 fw-400 gr2">2% <i class="fa fa-arrow-up"></i> {{ translateContent('vs last month',  $translationService) }}</p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('frontend/assets/img/graph-2.svg') }}" stlye="width:90%" class="ps-5" alt="">
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/img/dashboard.png') }}" class="mx-auto wow animate__animated animate__fadeInUp" alt="">
                        <div class="abscard1 wow animate__animated animate__fadeIn">
                            <div class="card ex5 card-bx floaty">
                                <div class="card-body boxes1">
                                    <div class="">
                                        <p class="pb-3">{{ translateContent('Active Candidates',  $translationService) }}</p>
                                        <h4 class="f-16 fw-500 line-h-0">10</h4>
                                        <p class="f-12 fw-400 gr2">2% <i class="fa fa-arrow-up"></i> {{ translateContent('vs last month',  $translationService) }}</p>
                                    </div>
                                    <div>
                                        <img src="{{ asset('frontend/assets/img/graph-2.svg') }}" class="ps-5" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="beforeimg"></div>
                </div>

    </section>
</header>
    <!-- about -->
    <section class="about-sec bg-light-g gap-80">
        <div class="container">
            <div class="row  wow animate__animated animate__fadeInUp">
                <div class="col-lg-5">
                    <h4 class="f-16 fw-400">About Us</h4>
                    <!-- <h3 class="f-32 fw-600 line-h-15">We strive to simplify the management of your temporary employees</h3> -->
                    <h3 class="f-32 fw-600 line-h-15">{{ translateContent('Effortless Workforce, Client, and Recruitment Management', $translationService) }} </h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <!-- <p class="f-18 fw-500 mb-4">Our mission is to provide you with seamless and efficient tools to
                        effortlessly manage your temporary workforce, ensuring that your staffing needs are met with
                        ease. We are dedicated to simplifying the complexities of temporary employment.</p> -->
                        <p class="f-18 fw-500 mb-4">{{ translateContent('Timr is your comprehensive solution for managing temporary employees and client outreach. Our platform streamlines scheduling, tracking, and workforce optimization, allowing you to focus on what matters most. With built-in match scoring, personality testing, and automated outreach, Timr connects you with the right candidates and clients effortlessly. Designed to meet your staffing and client engagement needs with precision, Timr simplifies the complexities of workforce management, ensuring seamless operations and the perfect match every time.', $translationService) }}</p>
                    <a href="#" class="btn btn-primary color-1 mt-4 mb-4">@lang('messages.sign_up')</a>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-7 mb-4 wow animate__animated animate__fadeInLeft">
                    <div class="card rounded-4 p-3 servicebox bx2">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">{{ translateContent('Union Agreements', $translationService) }}</p>
                            <h2 class="f-24 fw-600 pt-2">
                            {{ translateContent('Create and manage union agreements that can be associated with each employee hired', $translationService) }}
                                
                            </h2>
                            <div class="listitem__img text-center">
                                <img src="{{asset('frontend/assets/img/card-dashboard.png')}}" width="460"
                                    class="shadows1 text-center img-fluid" alt="services1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  mb-4 wow animate__animated animate__fadeInRight">
                    <div class="card rounded-4 p-3 servicebox bx1">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">{{ translateContent('Highlighted Feature 2', $translationService) }}</p>
                            <!-- <h2 class="f-24 fw-600 pt-2"> Temp employees can check-in and check-out at work </h2> -->
                            <h2 class="f-24 fw-600 pt-2">{{ translateContent('Clock-in/Clock-out system', $translationService) }}</h2>
                            <div class="listitem__img1 text-center">
                                <img src="{{asset('frontend/assets/img/card-mobile.png')}}" width="460" class="shadows1 text-center img-fluid"
                                    alt="services1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-sec gap-80">
        <div class="container">
            <div
                class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8">
                    <h4 class="f-16 fw-500">{{ translateContent('Let us help you', $translationService) }}</h4>
                    <!-- <h2 class="f-32 fw-600">Unlimited list of incoming features <br> that will help scale your workforce
                    </h2> -->
                    <h2 class="f-32 fw-600">{{ translateContent('Unmatched features to help scale your workforce', $translationService) }} </h2>
                    <!-- <p>Automated scheduling, real-time tracking, and customizable reporting <br> empower seamless
                        workforce management.</p> -->
                        <p>{{ translateContent('Automated scheduling, real-time tracking, customizable reporting, match scoring, personality testing, and automated client and candidate outreach empower seamless workforce management.', $translationService) }} </p>
                </div>
            </div>
            <div class="row pt-4 wow animate__animated animate__fadeInUp">
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/key.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3">{{ translateContent('Dashboard', $translationService) }}</h4>
                        <p class="f-16 fw-400">{{ translateContent('Access all your recruitment activities in one place, from job postings to
                            candidate progress.', $translationService) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/union.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3">{{ translateContent('Manage your companies', $translationService) }} </h4>
                        <p class="f-16 fw-400">{{ translateContent('Maintain a centralized repository for all company information, including
                            contact details, and addresses.', $translationService) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/candidate.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3">{{ translateContent('Candidate profiles', $translationService) }} </h4>
                        <p class="f-16 fw-400">{{ translateContent('Create and maintain detailed profiles for each candidate, including
                            personal information, resumes, and more.', $translationService) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/key.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3">{{ translateContent('Invoicing', $translationService) }} </h4>
                        <p class="f-16 fw-400">{{ translateContent('Automate the creation and sending of recurring invoices for
                            subscription-based services or regular billing.', $translationService) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/union.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3">{{ translateContent('Union agreements', $translationService) }} </h4>
                        <p class="f-16 fw-400">{{ translateContent('Utilize customizable contract templates to create new union agreements
                            quickly and consistently.', $translationService) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{asset('frontend/assets/img/candidate.svg')}}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> {{ translateContent('Manage cases', $translationService) }}</h4>
                        <p class="f-16 fw-400">{{ translateContent('Assign jobs to candidates and track their progress in real-time. Set
                            deadlines, and priorities.', $translationService) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-sec">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8">
                    <h4 class="f-16 fw-500">{{ translateContent('Reviews',  $translationService) }}</h4>
                    <h2 class="f-32 fw-600">{{ translateContent('What our clients are saying',  $translationService) }}</h2>
                    <p class="f-18">{{ translateContent('Real-time testimonials on our time and client management software.',  $translationService) }}
                    </p>
                </div>
            </div>
            <!-- Desktop -->
            <div class="d-lg-block d-md-block d-sm-none d-xs-none m-none">
            <div class="row position-relative pt-5 wow animate__animated animate__fadeInUp">
                <div class="col-lg-4 mt-5">
                    <div class="reviews position-relative po-1">
                        <div class="reviews-one">
                            <div class="img-abs">
                                <img src="{{ asset('frontend/assets/img/t-1.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent("Recruitment made easy! Saves time and hassle, highly efficient.",  $translationService) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="reviews position-relative po-2">
                        <div class="reviews-one">
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent("The platform's simplicity and automation have revolutionized our temporary worker
                                        recruitment. Highly recommended!",  $translationService) }}</p>
                                </div>
                            </div>
                            <div class="img-abs2">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row position-relative pt-5 wow animate__animated animate__fadeInUp">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 mt-5">
                    <div class="reviews position-relative po-1">
                        <div class="reviews-one">
                            <div class="img-abs">
                                <img src="{{ asset('frontend/assets/img/t-3.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent('Integrates seamlessly with our processes, delivering excellent results for
                                        temporary staffing.',  $translationService) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="reviews position-relative po-2">
                        <div class="reviews-one">
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent('With advanced filtering, we hire quicker and find better-suited temporary staff.
                                        A game-changer for us!"',  $translationService) }}</p>
                                </div>
                            </div>
                            <div class="img-abs">
                                <img src="{{ asset('frontend/assets/img/t-3.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative pt-5 mb-5 wow animate__animated animate__fadeInUp">
                <div class="col-lg-4 mt-5">
                    <div class="reviews position-relative po-1">
                        <div class="reviews-one">
                            <div class="img-abs">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent('Intuitive platform, dependable results. Simplifies our temporary worker
                                        recruitment process.',  $translationService) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="reviews position-relative po-2">
                        <div class="reviews-one">
                            <div class="img-abs">
                                <img src="{{ asset('frontend/assets/img/t-1.svg') }}" class="img-fluid rw-img" alt="">
                            </div>
                            <div class="card back-review">
                                <div class="card-body">
                                    <p>{{ translateContent('Responsive support and customization options make it a perfect fit for our unique
                                        needs. Highly satisfied!',  $translationService) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            </div>
            <!-- Mobile -->
             <div class="d-block d-lg-none d-md-none d-sm-block d-xs-block">
                <div class="mobile reviewSlider  owl-theme owl-carousel wow animate__animated animate__fadeInUp">
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">{{ translateContent("Recruitment made easy! Saves time and hassle, highly efficient.",  $translationService) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">{{ translateContent('Recruitment made easy! Saves time and hassle, highly efficient.',  $translationService) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">{{ translateContent('Recruitment made easy! Saves time and hassle, highly efficient.',  $translationService) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">{{ translateContent('Recruitment made easy! Saves time and hassle, highly efficient.',  $translationService) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">{{ translateContent('Recruitment made easy! Saves time and hassle, highly efficient.',  $translationService) }}</p>
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </section>


    <section class="feature-sec gap-80 pb-4">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8">
                    <h4 class="f-16 fw-500">{{ translateContent('Features',  $translationService) }}</h4>
                    <h2 class="f-32 fw-600">{{ translateContent('Unlimited list of incoming features',  $translationService) }} <br>{{ translateContent('that will help scale your workforce',  $translationService) }}
                    </h2>
                    <p class="f-18">{{ translateContent('Automated scheduling, real-time tracking, and customizable reporting <br> empower
                        seamless workforce management.',  $translationService) }}
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 mb-4 wow animate__animated animate__fadeInLeft">
                    <div class="card rounded-4 p-3 featureebox bxx2 bg-gr-1">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">{{ translateContent('Invoicing',  $translationService) }}</p>
                            <h2 class="f-24 fw-600 pt-2">
                                {{ translateContent('Automate the creation and sending of recurring invoices',  $translationService) }}
                            </h2>
                            <div class="features__img text-center">
                                <img src="{{ asset('frontend/assets/img/invoicing.png') }}" width="460" class="text-center img-fluid"
                                    alt="services1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4  wow animate__animated animate__fadeInRight">
                    <div class="card rounded-4 p-3 featureebox bxx1 bg-gr-2">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">{{ translateContent('Insights',  $translationService) }}</p>
                            <h2 class="f-24 fw-600 pt-2">{{ translateContent('Powerful visualizations for',  $translationService) }} <br>{{ translateContent(' clarity ',  $translationService) }}</h2>
                                <div class="card ex1 ">
                                    <div class="card-body boxes1">
                                        <div class="">
                                            <p class="pb-3">{{ translateContent('Active Candidates',  $translationService) }}</p>
                                            <h4 class="f-16 fw-500 line-h-0">152</h4>
                                            <p class="f-12 fw-400 gr1">5% <i class="fa fa-arrow-up"></i> {{ translateContent('vs last',  $translationService) }}
                                                month</p>
                                        </div>
                                        <div>
                                            <img src="{{ asset('frontend/assets/img/graph-1.svg') }}" class="ps-5" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card ex2 ">
                                    <div class="card-body boxes1">
                                        <div class="">
                                            <p class="pb-3">{{ translateContent('Active Candidates',  $translationService) }}</p>
                                            <h4 class="f-16 fw-500 line-h-0">152</h4>
                                            <p class="f-12 fw-400 gr2">5% <i class="fa fa-arrow-up"></i> {{ translateContent('vs last
                                                month',  $translationService) }}</p>
                                        </div>
                                        <div>
                                            <img src="{{ asset('frontend/assets/img/graph-2.svg') }}" class="ps-5" alt="">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-time-sheet mt-0 ">
        <div class="container">
            <div class="card card bg-big rounded-4 p-3 featureebox bg-gr-3  wow animate__animated animate__fadeInUp">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 time-sheet-col">
                            <p class="fw-500 f-16 fw-500">{{ translateContent('Time Sheets',  $translationService) }}</p>
                            <h2 class="f-32 fw-600 pt-2">{{ translateContent('Timesheets for transparent workforce management',  $translationService) }} </h2>
                            <p class="f-18">{{ translateContent('Employee timesheets provide a streamlined and efficient way to track work
                                hours and activities within an organization.',  $translationService) }} </p>
                            <a href="#" class="btn btn-primary color-1 bg-darks color-b mt-4 ">{{ translateContent('Sign Up For Free',  $translationService) }}</a>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <img src="{{asset('frontend/assets/img/timesheet.png')}}" class="" alt="">
                            <!--img-fluid timesheet mt-5-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="candidates gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6  wow animate__animated animate__fadeInLeft">
                    <p class="fw-500 f-16 fw-500">{{ translateContent('Candidates',  $translationService) }}</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">{{ translateContent('Effortless hiring, stronger connections',  $translationService) }}</h2>
                    <p class="f-18">{{ translateContent('Our candidate management module is designed to simplify and improve your recruitment process:',  $translationService) }} </p>

                    <div class="lists pt-4">
                        <ul class="liststar f-18 mb-3">
                            <li>{{ translateContent('Easily capture key candidate information like resumes, contact details, and interview feedback.',  $translationService) }}
                            </li>
                            <li>{{ translateContent('Help recruiters manage their tasks efficiently, ensuring prompt and consistent follow-ups.',  $translationService) }}</li>
                            <li>{{ translateContent('Use advanced search and filtering to quickly find the right candidates.',  $translationService) }}
                            </li>
                            <li>{{ translateContent('Streamline candidate tracking for better recruitment outcomes and increased productivity.',  $translationService) }}
                            </li>
                            <li>{{ translateContent('Automate outreach to candidates and seamlessly connect them to relevant job opportunities.',  $translationService) }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card wow animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <img src="{{asset('frontend/assets/img/list-2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="case-management row justify-content-center align-items-center pt-5">
                <div class="col-lg-6  wow animate__animated animate__fadeInLeft">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('frontend/assets/img/list-1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  wow animate__animated animate__fadeInRight">
                    <p class="fw-500 f-16 fw-500">{{ translateContent('Case Management',  $translationService) }}</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">{{ translateContent('Assign tasks to candidates and track their progress in real-time',  $translationService) }}</h2>
                    <p class="f-18 mb-3">{{ translateContent('Our case management module provides a centralised platform to streamline and monitor all aspects of case or job management, ensuring efficient workflows.',  $translationService) }}</p>

                    <div class="pt-4">
                        <ul class="liststar f-18">
                            <!-- <li>Monitor the status of each case or job throughout its lifecycle, from initiation to
                                completion</li>
                            <li>Assign tasks to candidates and track their progress in real-time </li>
                            <li>Upload, store, and organize all documents and files associated with each case or job
                            </li>
                            <li>Maintain a detailed log of all communications related to each case or job</li> -->
                            <li>{{ translateContent('Monitor the status of each case or job throughout its entire lifecycle, from start to finish',  $translationService) }}</li>
                            <li>{{ translateContent('Assign tasks to candidates and track their real-time progress',  $translationService) }}</li>
                            <li>{{ translateContent('Upload, store, and organise all documents and files related to each case or job',  $translationService) }}</li>
                            <li>{{ translateContent('Maintain a comprehensive log of all communications associated with each case or job',  $translationService) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing gap-80">
        <div class="container">
            <div
                class="row justify-content-center align-items-center text-center  wow animate__animated animate__fadeInUp">
                <div class="col-lg-7">
                    <p class="fw-500 f-16 fw-500">{{ translateContent('Pricing Made Simple',  $translationService) }}</p>
                    <h2 class="f-32 fw-600 pt-2">{{ translateContent('Choose the perfect plan for your workforce management needs',  $translationService) }}</h2>
                    <p class="f-18">{{ translateContent("timr offers flexible pricing options that provide powerful tools to streamline time management, recruitment, and client engagement. whether you're just starting out or scaling up, we have a plan that suits your needs.",  $translationService) }} </p>
                </div>
            </div>
            <div
                class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-12">
                    <div class="top">

                        <div class="toggle-btn">
                            <span style="margin: 0.8em;">{{ translateContent('Monthly Plans',  $translationService) }}</span>
                            <label class="switch">
                                <input type="checkbox" id="checbox" onclick="check()" ; />
                                <span class="slider round"></span>
                            </label>
                            <span style="margin: 0.8em;">{{ translateContent('Annual Plans',  $translationService) }}</span>
                        </div>
                    </div>
                    <p class="color-b-d"><em>{{ translateContent('Save 19% on Annual Plans',  $translationService) }}</em></p>
                </div>
            </div>
            <div class="row mt-4 wow animate__animated animate__fadeInUp">
                <div class="col-lg-4 mb-3">
                    <div class="package">
                        <div class="card bg-grey p-3 rounded">
                            <div class="card-body">
                                <h4 class="f-18 fw-500 heading">{{ translateContent('Free forever plan',  $translationService) }}</h4>
                                <!-- <h3 class="f-45 fw-500 text2 price"> $0 </h3> -->
                                <h3 class="f-45 fw-500 text1"> $0 </h3>
                                <p class="f-16 color-d-g">{{ translateContent('Free, forever',  $translationService) }}</p>
                                <p class="para color-d-g">{{ translateContent('Our free forever plan is ideal for small teams or businesses looking to manage essential tasks without any cost. enjoy these key features with up to 2 user profiles:',  $translationService) }}</p>
                                <hr>
                                <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                    <li><strong>{{ translateContent('Dashboard access:',  $translationService) }}</strong> {{ translateContent('keep an overview of your operations with a user-friendly dashboard that centralises all your key metrics.',  $translationService) }}</li>
                                    <li><strong>{{ translateContent('Manage your companies:',  $translationService) }}</strong>{{ translateContent('organise and manage your company profiles and essential business data effortlessly.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Candidate profiles:',  $translationService) }}</strong>{{ translateContent('store and manage candidate information, including CVs, contact details, and interview feedback, all in one place.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Invoicing:',  $translationService) }}</strong>{{ translateContent('generate and manage invoices easily, keeping your financials in check.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Union agreements:',  $translationService) }}</strong> {{ translateContent('automatically calculate and manage union payments, ensuring compliance and peace of mind.',  $translationService) }}</li>
                                </ul>
                                <p class="para color-d-g">{{ translateContent("These features are free to use, forever, with up to 2 user profiles, with no hidden costs or time limits. it's perfect for small teams needing basic workforce management tools.",  $translationService) }}</p>
                                <div class="pt-5 plan-btn">
                                    <a href="{{ route('payment',['rate' => base64_encode(0)]) }}" class="btn btn-border ">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="package">
                        <div class="card bg-grey p-3 rounded">
                            <div class="card-body">
                                <h4 class="f-18 fw-500 heading">@lang('message.basic_plan')</h4>
                                <h3 class="f-45 fw-500 text2 price"> $69 </h3>
                                <!-- <h3 class="f-45 fw-500 text1"> $36 </h3> -->
                                <p class="f-16 color-d-g">{{ translateContent('Per month',  $translationService) }}</p>
                                <p class="color-d-g">{{ translateContent('For teams ready to grow, the basic plan offers advanced tools to streamline your operations:',  $translationService) }}</p>
                                <hr>
                                <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                    <li>{{ translateContent('All free forever plan features',  $translationService) }}</li>
                                    <li><strong>{{ translateContent('Real-time tracking:',  $translationService) }}</strong>{{ translateContent('monitor employee progress and tasks in real time, ensuring everything stays on track',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Automated scheduling:',  $translationService) }}</strong>{{ translateContent('effortlessly schedule shifts and tasks, saving time and reducing errors.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Basic match scoring:',  $translationService) }}</strong> {{ translateContent('match candidates to jobs based on key criteria, helping you find the right fit faster.',  $translationService) }}</li>
                                </ul>
                                <div class="pt-5 plan-btn">
                                    <a href="{{ route('payment',['rate' => base64_encode(69)]) }}" class="btn btn-border ">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="package">
                        <div class="card bg-grey p-3 rounded">
                            <div class="card-body">
                                <h4 class="f-18 fw-500 heading">@lang('message.enterprise_plan')</h4>
                                <h3 class="f-40 fw-500 text2 price">{{ translateContent('Custom pricing',  $translationService) }}  </h3>
                                <!-- <h3 class="f-45 fw-500 text1"> $36 </h3> -->
                                <!-- <p class="f-16 color-d-g">Per month</p> -->
                                <p class="color-d-g">{{ translateContent('For large organisations with complex needs, offering full customisation and dedicated support:',  $translationService) }}</p>
                                <hr>
                                <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                    <li>{{ translateContent('All professional plan features',  $translationService) }}</li>
                                    <li><strong>{{ translateContent('Custom integrations:',  $translationService) }}</strong>{{ translateContent('integrate timr seamlessly with your existing systems.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Unlimited users:',  $translationService) }}</strong> {{ translateContent('scale your team without limitations.',  $translationService) }}</li>
                                    <li><strong>{{ translateContent('Dedicated account manager:',  $translationService) }}</strong>{{ translateContent('get personalised support and guidance.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('Comprehensive custom reports:',  $translationService) }}</strong>{{ translateContent('tailor reports to your specific needs.',  $translationService) }} </li>
                                    <li><strong>{{ translateContent('White-label options:',  $translationService) }}</strong>{{ translateContent('brand the platform as your own.',  $translationService) }} </li>
                                    <li>{{ translateContent('24/7 support',  $translationService) }}</li>
                                </ul>
                                <div class="pt-5 plan-btn">
                                    <a href="#" class="btn btn-border ">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row justify-content-center align-items-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-12">
                    <div class="card bg-gr-nl newsletter">
                        <div class="card-body">
                            <h4 class="f-18 fw-500 text-center">{{ translateContent('Get the best productivity tips delivered to your inbox',  $translationService) }}
                            </h4>
                            <h2 class="f-24 fw-600 text-center ">{{ translateContent('Subscribe to our monthly newsletter for the latest updates and insights',  $translationService) }}</h2>
                            <p class="text-center">{{ translateContent('Timr simplifies scheduling, tracks employee hours in real-time, and automates invoicing.',  $translationService) }} <br>{{ translateContent('with match scoring, personality testing, and automated outreach, it connects candidates to jobs',  $translationService) }} <br>{{ translateContent('and engages clients seamlessly. Optimise workforce productivity and streamline management with Timr.',  $translationService) }}</p>
                            <form action="">
                                <div class="form-group pt-4">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="col-lg-7"> <input class="form-control" type="text"
                                                placeholder="Email Address"></div>
                                        <div class="col-lg-2"> <button type="submit"
                                                class="btn btn-primary color-1">Subscribe</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@include('frontend.include.footer')


