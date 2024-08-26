@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>

@include('frontend.section.pricing')

    <section class="">
            <div class="container wow animate__animated animate__fadeInUp">
                <div class="table-responsive-lg aos-init aos-animate" data-aos="fade-up">
                    <table class="table table-lg table-hover table-borderless bg-white">
                        <thead class="border-bottom bg-dark-l mb-2">
                            <tr class="border-bottom-1 mb-2">
                                <th>
                                    {{ translateContent('Feature',  $translationService) }}
                                </th>
                                <th>
                                    @lang('messages.free')
                                </th>
                                <th>
                                    @lang('messages.pro')
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Dashboard',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Company Management',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>

                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Case management',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Invoicing',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Union Agreements',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Customizable insights',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Customize invoices and sms',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Mobile app for temp employees',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Feature Detail',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Salaries',  $translationService) }}</td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{ asset('frontend/assets/img/check.svg') }}" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

    </section>

    <section class="gap-80">
        <div class="container">
            <div class="row wow animate__animated animate__fadeInUp">
                <div class="col-lg-5">
                    <h2 class="fw-600 f-45">{{ translateContent('FAQs',  $translationService) }}</h2>
                    <p>{{ translateContent('Stay up-to-date with the latest developments, updates, and enhancements to Timr through our
                        regularly updated FAQ section',  $translationService) }}</p>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{ translateContent('How can I search for candidates?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    Lorem ipsum dolor sit amet, consectetur
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('frontend.section.newsletter') ?>

    @include('frontend.include.footer') ?>
