@include('frontend.include.header')
@include('frontend.include.nav')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
</head>

<body>

@include('frontend.section.pricing')
    <section class="features">
            <div class="container wow animate__animated animate__fadeInUp">
                <div class="table-responsive-lg aos-init aos-animate" data-aos="fade-up">
                    <table class="table table-lg table-hover table-borderless bg-white">
                        <thead class="border-bottom bg-dark-l mb-2">
                            <tr class="border-bottom-1 mb-2">
                                <th>
                                {{ translateContent('Feature',  $translationService) }} 
                                </th>
                                <th>
                                {{ translateContent('Free',  $translationService) }}  
                                </th>
                                <th>
                                {{ translateContent('Pro',  $translationService) }}  
                                </th>
                                <th>{{ translateContent('Enterprise',  $translationService) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Dashboard',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Company Management',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                           
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Case management',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Invoicing',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('Salaries',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('union agreements',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('compliance management',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('customisable insights',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('customisable invoices and sms',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('custom reports',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>

                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('real-time tracking',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('automated scheduling',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('advanced search and filtering',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('mobile app for temp employees',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('candidate profiles management',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('applicant tracking system (ATS)',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('job board integration',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('match scoring',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('personality testing',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0"> {{ translateContent('automated candidate outreach',  $translationService) }}</td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('client outreach automation',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('automated lead generation',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('crm',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('dedicated account manager',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('unlimited users',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('white-label options',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                            <tr class="border-bottom bg-light">
                                <td class="border-0">{{ translateContent('24/7 support',  $translationService) }} </td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" width="30" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/cross.png')}}" alt=""></td>
                                <td class="border-0"><img src="{{asset('frontend/assets/img/check.svg')}}" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
  
    </section>

    <section class="faq gap-80">
        <div class="container">
            <div class="row wow animate__animated animate__fadeInUp">
                <div class="col-lg-5">
                    <h2 class="fw-600 f-45">{{ translateContent('FAQs',  $translationService) }}</h2>
                    <p>{{ translateContent('Stay informed with our latest updates, features, and insights. check out our frequently asked questions below',  $translationService) }}</p>
                    
                </div>
                <div class="col-1"></div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{ translateContent('how can i search for candidates?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('You can search for candidates using our advanced search and filtering tools. Simply enter the criteria you need, and our system will deliver the most relevant candidates.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    {{ translateContent('what is the applicant tracking system (ATS) used for?',  $translationService) }}
                                   
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('The ATS helps you manage the entire recruitment process, from posting jobs on integrated job boards to tracking applications and matching candidates to roles.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    {{ translateContent('how does automated candidate outreach work?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Our system automatically reaches out to candidates that match your job requirements, saving you time and ensuring you connect with the right talent quickly.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    {{ translateContent('can I manage client relationships within the system?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Yes, our CRM integration allows you to manage client interactions, track communication, and automate outreach, making client management seamless.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    {{ translateContent('how does job board integration work?',  $translationService) }}
                                   
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Job board integration allows you to post jobs directly to multiple job boards from within the system, streamlining your recruitment process.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    {{ translateContent('what is match scoring?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Match scoring is a feature that evaluates candidates based on their qualifications and compatibility with the job requirements, helping you find the best fit quickly.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    {{ translateContent('what does personality testing include?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent("Personality testing assesses candidates' traits and compares them with the job's demands, ensuring a cultural and role fit for your organisation.",  $translationService) }}</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    {{ translateContent('what does compliance management cover?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Compliance management ensures that your operations are in line with legal and regulatory requirements, including union agreements, salary calculations, and other compliance-related tasks.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    {{ translateContent('how does the system handle union agreements?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ translateContent('Our system automatically manages union agreements, calculating and ensuring that all employee payments and benefits are in line with the relevant union regulations.',  $translationService) }}</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    {{ translateContent('can the system handle invoicing?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                {{ translateContent('Yes, our system automates the invoicing process, allowing you to generate and send invoices based on logged hours, client agreements, and other parameters, ensuring accurate and timely billing.',  $translationService) }}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false"
                                    aria-controls="flush-collapseEleven">
                                    {{ translateContent('can i customise reports and insights?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ translateContent(' Yes, you can generate custom reports and insights tailored to your business needs, providing valuable data to guide your decision-making.',  $translationService) }}
                                   
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwelve" aria-expanded="false"
                                    aria-controls="flush-collapseTwelve">
                                    {{ translateContent('how does the mobile app benefit temp employees?',  $translationService) }}
                                   
                                </button>
                            </h2>
                            <div id="flush-collapseTwelve" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ translateContent('The mobile app allows temp employees to check schedules, log hours, receive notifications, and communicate with management directly from their smartphones.',  $translationService) }}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThirteen" aria-expanded="false"
                                    aria-controls="flush-collapseThirteen">
                                    {{ translateContent('what is the role of the dedicated account manager?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseThirteen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThirteen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                {{ translateContent('A dedicated account manager provides personalised support, helping you maximise the use of our system and ensuring that it aligns with your business goals.',  $translationService) }}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFourteen" aria-expanded="false"
                                    aria-controls="flush-collapseFourteen">
                                    {{ translateContent('what are the benefits of automated lead generation?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseFourteen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                {{ translateContent(' Automated lead generation identifies potential candidates and clients based on your criteria, delivering quality leads directly to your system without manual effort.',  $translationService) }}
                                   
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFifteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFifteen" aria-expanded="false"
                                    aria-controls="flush-collapseFifteen">
                                    {{ translateContent('how does real-time tracking work?',  $translationService) }}
                                </button>
                            </h2>
                            <div id="flush-collapseFifteen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ translateContent('Real-time tracking monitors employee progress, hours worked, and task completion, ensuring everything stays on schedule and allowing for immediate adjustments if needed.',  $translationService) }}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSixteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSixteen" aria-expanded="false"
                                    aria-controls="flush-collapseSixteen">
                                    {{ translateContent('can i schedule shifts automatically?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseSixteen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSixteen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ translateContent('Yes, our automated scheduling feature allows you to easily assign shifts, manage availability, and make changes on the fly, reducing the time spent on manual scheduling.',  $translationService) }}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeventy">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeventy" aria-expanded="false"
                                    aria-controls="flush-collapseSeventy">
                                    {{ translateContent('what are the options for white-label branding?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseSeventy" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeventy" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ translateContent('For enterprise clients, we offer white-label options, allowing you to brand the platform with your company’s logo and colours, providing a seamless experience for your users.',  $translationService) }}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEighteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEighteen" aria-expanded="false"
                                    aria-controls="flush-collapseEighteen">
                                    {{ translateContent('is there 24/7 support available?',  $translationService) }}
                                    
                                </button>
                            </h2>
                            <div id="flush-collapseEighteen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEighteen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                {{ translateContent(' Yes, enterprise clients have access to 24/7 support, ensuring that any issues or questions are addressed promptly, no matter the time.',  $translationService) }}
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.section.newsletter') ?>

    @include('frontend.include.footer') ?>
