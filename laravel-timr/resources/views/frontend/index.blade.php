@include('frontend.include.header')
@include('frontend.include.nav')

</head>

<body>
    <section class="bannercontent position-relative pt-5">
        <div class="container">
            <div class="row pt-5 px-4 justify-content-center align-items-center text-center">
                <div class="col-lg-12">
                    <p class="f-14 mb-3 tags bg-tags wow animate__animated animate__fadeInDown">Streamline employee time management effortlessly.</p>
                    <h1 class="ff-primary fw-600 line-h-15 wow animate__animated animate__fadeInDown">Efficiently track and manage <br> temporary workers </h1>
                    <p class="f-18 line-h-15 wow animate__animated animate__fadeInDown">
                        An intuitive employee time management software streamlining scheduling, tracking, <br> and
                        optimizing workforce productivity.
                    </p>
                    <a href="#" class="btn btn-primary wow animate__animated animate__fadeInDown">Sign Up For Free</a>
                    <div class="d-flex justify-content-center align-items-center pt-4 pb-5 wow animate__animated animate__fadeInDown"> <img
                            src="{{ asset('frontend/assets/img/fi-rr-credit-card.svg') }}" class="px-2" alt=""> No credit card required </div>
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
                                    <p class="pb-3">Active Candidates</p>
                                    <h4 class="f-16 fw-500 line-h-0">10</h4>
                                    <p class="f-12 fw-400 gr2">2% <i class="fa fa-arrow-up"></i> vs last month</p>
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
                                        <p class="pb-3">Active Candidates</p>
                                        <h4 class="f-16 fw-500 line-h-0">10</h4>
                                        <p class="f-12 fw-400 gr2">2% <i class="fa fa-arrow-up"></i> vs last month</p>
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

    <!-- about -->
    <section class="about-sec bg-light-g gap-80">
        <div class="container">
            <div class="row  wow animate__animated animate__fadeInUp">
                <div class="col-lg-5">
                    <h4 class="f-16 fw-400">About Us</h4>
                    <h3 class="f-32 fw-600 line-h-15">We strive to simplify the management of your temporary employees
                    </h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <p class="f-18 fw-500 mb-4">Our mission is to provide you with seamless and efficient tools to
                        effortlessly manage your temporary workforce, ensuring that your staffing needs are met with
                        ease. We are dedicated to simplifying the complexities of temporary employment.</p>
                    <a href="#" class="btn btn-primary color-1 mt-4 mb-4">Sign Up For Free</a>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-7 mb-4 wow animate__animated animate__fadeInLeft">
                    <div class="card rounded-4 p-3 servicebox bx2">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">Union Agreements</p>
                            <h2 class="f-24 fw-600 pt-2">
                                Create and manage union agreements that can be associated with each employee hired
                            </h2>
                            <div class="listitem__img text-center">
                                <img src="{{ asset('frontend/assets/img/card-dashboard.png') }}" width="460"
                                    class="shadows1 text-center img-fluid" alt="services1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  mb-4 wow animate__animated animate__fadeInRight">
                    <div class="card rounded-4 p-3 servicebox bx1">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">Highlighted Feature 2</p>
                            <h2 class="f-24 fw-600 pt-2"> Temp employees can check-in and check-out at work </h2>
                            <div class="listitem__img1 text-center">
                                <img src="{{ asset('frontend/assets/img/card-mobile.png') }}" width="460" class="shadows1 text-center img-fluid"
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
            <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8">
                    <h4 class="f-16 fw-500">Let us help you</h4>
                    <h2 class="f-32 fw-600">Unlimited list of incoming features <br> that will help scale your workforce
                    </h2>
                    <p>Automated scheduling, real-time tracking, and customizable reporting <br> empower seamless
                        workforce management.</p>
                </div>
            </div>
            <div class="row pt-4 wow animate__animated animate__fadeInUp">
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/key.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Dashboard</h4>
                        <p class="f-16 fw-400">Access all your recruitment activities in one place, from job postings to
                            candidate progress.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/union.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Manage your companies</h4>
                        <p class="f-16 fw-400">Maintain a centralized repository for all company information, including
                            contact details, and addresses.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/candidate.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Candidate profiles</h4>
                        <p class="f-16 fw-400">Create and maintain detailed profiles for each candidate, including
                            personal information, resumes, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/key.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Invoicing</h4>
                        <p class="f-16 fw-400">Automate the creation and sending of recurring invoices for
                            subscription-based services or regular billing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/union.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Union agreements</h4>
                        <p class="f-16 fw-400">Utilize customizable contract templates to create new union agreements
                            quickly and consistently.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 services-box mb-3">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/candidate.svg') }}" class="img-fluid" alt="dashboard">
                        <h4 class="f-20 fw-600 pt-3"> Manage cases</h4>
                        <p class="f-16 fw-400">Assign jobs to candidates and track their progress in real-time. Set
                            deadlines, and priorities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-sec">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-8">
                    <h4 class="f-16 fw-500">Reviews</h4>
                    <h2 class="f-32 fw-600">Insights from our satisfied clients: <br> Testimonials.</h2>
                    <p class="f-18">Discover What Our Clients Say: Real-Time Testimonials on Our Employee Time
                        Management Software.
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
                                    <p>Recruitment made easy! Saves time and hassle, highly efficient."</p>
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
                                    <p>The platform's simplicity and automation have revolutionized our temporary worker
                                        recruitment. Highly recommended!</p>
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
                                    <p>Integrates seamlessly with our processes, delivering excellent results for
                                        temporary staffing.</p>
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
                                    <p>With advanced filtering, we hire quicker and find better-suited temporary staff.
                                        A game-changer for us!"</p>
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
                                    <p>Intuitive platform, dependable results. Simplifies our temporary worker
                                        recruitment process.</p>
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
                                    <p>Responsive support and customization options make it a perfect fit for our unique
                                        needs. Highly satisfied!</p>
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
                                <p class="text-center">Recruitment made easy! Saves time and hassle, highly efficient."</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">Recruitment made easy! Saves time and hassle, highly efficient."</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">Recruitment made easy! Saves time and hassle, highly efficient."</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">Recruitment made easy! Saves time and hassle, highly efficient."</p>
                            </div>
                        </div>
                    </div>
                    <div class="card back-review">
                        <div class="card-body">
                            <div class="justify-content-center align-items-center">
                                <img src="{{ asset('frontend/assets/img/t-2.svg') }}" width="52" class="img-fluid mb-3 mx-auto" alt="">
                                <p class="text-center">Recruitment made easy! Saves time and hassle, highly efficient."</p>
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
                    <h4 class="f-16 fw-500">Features</h4>
                    <h2 class="f-32 fw-600">Unlimited list of incoming features <br>that will help scale your workforce
                    </h2>
                    <p class="f-18">Automated scheduling, real-time tracking, and customizable reporting <br> empower
                        seamless workforce management.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 mb-4 wow animate__animated animate__fadeInLeft">
                    <div class="card rounded-4 p-3 featureebox bxx2 bg-gr-1">
                        <div class="card-body">
                            <p class="fw-500 f-16 fw-500">Invoicing</p>
                            <h2 class="f-24 fw-600 pt-2">
                                Automate the creation and sending of recurring invoices
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
                            <p class="fw-500 f-16 fw-500">Insights</p>
                            <h2 class="f-24 fw-600 pt-2">Powerful visualizations for <br> clarity </h2>
                                <div class="card ex1 ">
                                    <div class="card-body boxes1">
                                        <div class="">
                                            <p class="pb-3">Active Candidates</p>
                                            <h4 class="f-16 fw-500 line-h-0">152</h4>
                                            <p class="f-12 fw-400 gr1">5% <i class="fa fa-arrow-up"></i> vs last
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
                                            <p class="pb-3">Active Candidates</p>
                                            <h4 class="f-16 fw-500 line-h-0">152</h4>
                                            <p class="f-12 fw-400 gr2">5% <i class="fa fa-arrow-up"></i> vs last
                                                month</p>
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
    <section class="mt-0">
        <div class="container">
            <div class="card card bg-big rounded-4 p-3 featureebox bg-gr-3  wow animate__animated animate__fadeInUp">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="fw-500 f-16 fw-500">Time Sheets</p>
                            <h2 class="f-32 fw-600 pt-2">Timesheets for transparent workforce management </h2>
                            <p class="f-18">Employee timesheets provide a streamlined and efficient way to track work
                                hours and activities within an organization. </p>
                            <a href="#" class="btn btn-primary color-1 bg-darks color-b mt-4 ">Sign Up For Free</a>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <img src="{{ asset('frontend/assets/img/timesheet.png') }}" class="" alt="">
                            <!--img-fluid timesheet mt-5-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6  wow animate__animated animate__fadeInLeft">
                    <p class="fw-500 f-16 fw-500">Candidates</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">Streamlined Recruitment, Enhanced Engagement</h2>
                    <p class="f-18">The Candidate Management Module within our software platform offers a comprehensive
                        solution for efficiently managing all aspects of the recruitment process. </p>

                    <div class="pt-4">
                        <ul class="liststar f-18 mb-3">
                            <li>Capture essential information, such as resumes, contact details, and interview feedback
                            </li>
                            <li>Recruiters can streamline their processes, ensuring timely follow-ups </li>
                            <li>Advanced search and filtering capabilities enable quick access to candidate information
                            </li>
                            <li>Simplifies candidate tracking, improves recruitment outcomes, and overall productivity
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card wow animate__animated animate__fadeInRight">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/list-2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-5">
                <div class="col-lg-6  wow animate__animated animate__fadeInLeft">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/list-1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  wow animate__animated animate__fadeInRight">
                    <p class="fw-500 f-16 fw-500">Case Management</p>
                    <h2 class="f-32 fw-600 pt-2 line-h-15">Assign tasks to candidates and track their progress in
                        real-time</h2>
                    <p class="f-18 mb-3">The Case Management Module provides a centralized platform to streamline and
                        track all aspects of case or job management, facilitating efficient workflows.</p>

                    <div class="pt-4">
                        <ul class="liststar f-18">
                            <li>Monitor the status of each case or job throughout its lifecycle, from initiation to
                                completion</li>
                            <li>Assign tasks to candidates and track their progress in real-time </li>
                            <li>Upload, store, and organize all documents and files associated with each case or job
                            </li>
                            <li>Maintain a detailed log of all communications related to each case or job</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap-80">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center  wow animate__animated animate__fadeInUp">
                <div class="col-lg-7">
                    <p class="fw-500 f-16 fw-500">Pricing Made Simple</p>
                    <h2 class="f-32 fw-600 pt-2">Find the Right Fit for Your Time Management Needs.</h2>
                    <p class="f-18">Choose from a variety of affordable pricing options that help you streamline time
                        management without exceeding your budget. </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
                <div class="col-lg-12">
                    <div class="top">

                        <div class="toggle-btn">
                            <span style="margin: 0.8em;">Monthly Plans</span>
                            <label class="switch">
                                <input type="checkbox" id="checbox" onclick="check()" ; />
                                <span class="slider round"></span>
                            </label>
                            <span style="margin: 0.8em;">Annual Plans</span>
                        </div>
                    </div>
                    <p class="color-b-d"><em>Save 13% on Annual Plan</em></p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-4 wow animate__animated animate__fadeInUp">
                <div class="col-lg-5 mb-3">
                    <div class="package">
                        <div class="card bg-grey p-3 rounded">
                            <div class="card-body">
                                <h4 class="f-18 fw-500">Free</h4>
                                <h3 class="f-45 fw-500 text2"> $0 </h3>
                                <h3 class="f-45 fw-500 text1"> $0 </h3>
                                <p class="f-16 color-d-g">Per month</p>
                                <p class="color-d-g">You will have free access to all the features of our software with
                                    up to 3 users </p>
                                <hr>
                                <ul class="listcheck f-18 color-d-g pt-4">
                                    <li>Dashboard</li>
                                    <li>Manage your companies</li>
                                    <li>Candidate profiles</li>
                                    <li>Invoicing</li>
                                    <li>Union Agreements</li>
                                </ul>
                                <div class="pt-5">
                                    <a href="#" class="btn btn-border">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-3">
                    <div class="package">
                        <div class="card bg-grey p-3 rounded">
                            <div class="card-body">
                                <h4 class="f-18 fw-500">Pro</h4>
                                <h3 class="f-45 fw-500 text2"> $3 </h3>
                                <h3 class="f-45 fw-500 text1"> $36 </h3>
                                <p class="f-16 color-d-g">Per user per month</p>
                                <p class="color-d-g">After you add your 4th user to the software, you will be charged $3
                                    per user per month </p>
                                <hr>
                                <ul class="listcheck f-18 color-d-g pt-4">
                                    <li>Dashboard</li>
                                    <li>Manage your companies</li>
                                    <li>Candidate profiles</li>
                                    <li>Invoicing</li>
                                    <li>Union Agreements</li>
                                </ul>
                                <div class="pt-5">
                                    <a href="#" class="btn btn-border">Select Plan</a>
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
                            <h4 class="f-18 fw-500 text-center">Join Our Mailing List for the Best Productivity Tips
                            </h4>
                            <h2 class="f-24 fw-600 text-center ">Stay Informed with Our Monthly Newsletter</h2>
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


