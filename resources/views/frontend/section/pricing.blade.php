<section class="sec-price gap-80">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center  wow animate__animated animate__fadeInUp">
            <div class="col-lg-7">
                <p class="fw-500 f-16 fw-500">{{ translateContent('Pricing Made Simple',  $translationService) }}</p>
                <h2 class="f-32 fw-600 pt-2">{{ translateContent('Find the Right Fit for Your Time Management Needs.',  $translationService) }}</h2>
                <p class="f-18">{{ translateContent('Choose from a variety of affordable pricing options that help you streamline time
                    management without exceeding your budget.',  $translationService) }} </p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center text-center wow animate__animated animate__fadeInUp">
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
                <p class="color-b-d"><em>{{ translateContent('Save 19% on Annual Plan',  $translationService) }}</em></p>
            </div>
        </div>
        <!-- <div class="row justify-content-center align-items-center mt-4 wow animate__animated animate__fadeInUp">
            <div class="col-lg-5 mb-3">
                <div class="package">
                    <div class="card bg-grey p-3 rounded">
                        <div class="card-body">
                            <h4 class="f-18 fw-500 heading">Free</h4>
                            <h3 class="f-45 fw-500 text2 price"> $0 </h3>
                            <h3 class="f-45 fw-500 text1"> $0 </h3>
                            <p class="f-16 color-d-g">Per month</p>
                            <p class="para color-d-g">You will have free access to all the features of our software with
                                up to 3 users </p>
                            <hr>
                            <ul class="listcheck f-18 color-d-g pt-4">
                                <li>Dashboard</li>
                                <li>Manage your companies</li>
                                <li>Candidate profiles</li>
                                <li>Invoicing</li>
                                <li>Union Agreements</li>
                            </ul>
                            <div class="pt-5 plan-btn">
                                <a href="./payment.php" class="btn btn-border">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-3">
                <div class="package">
                    <div class="card bg-grey p-3 rounded">
                        <div class="card-body">
                            <h4 class="f-18 fw-500 heading">Pro</h4>
                            <h3 class="f-45 fw-500 text2 price"> $3 </h3>
                            <h3 class="f-45 fw-500 text1"> $36 </h3>
                            <p class="f-16 color-d-g">Per user per month</p>
                            <p class="para color-d-g">After you add your 4th user to the software, you will be charged $3
                                per user per month </p>
                            <hr>
                            <ul class="listcheck f-18 color-d-g pt-4">
                                <li>Dashboard</li>
                                <li>Manage your companies</li>
                                <li>Candidate profiles</li>
                                <li>Invoicing</li>
                                <li>Union Agreements</li>
                            </ul>
                            <div class="pt-5 plan-btn">
                                <a href="./payment.php" class="btn btn-border">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row mt-4 wow animate__animated animate__fadeInUp">
            <div class="col-lg-4 mb-3">
                <div class="package">
                    <div class="card bg-grey p-3 rounded">
                        <div class="card-body">
                            <h4 class="f-18 fw-500 heading">{{ translateContent('Free forever plan',  $translationService) }}</h4>
                            <h3 class="f-45 fw-500 text2 price"> $0 </h3>
                            <h3 class="f-45 fw-500 text1"> $0 </h3>
                            <p class="f-16 color-d-g">{{ translateContent('Free, forever',  $translationService) }}</p>
                            <p class="para color-d-g">{{ translateContent('Our free forever plan is ideal for small teams or businesses looking to manage essential tasks without any cost. enjoy these key features with up to 2 user profiles:',  $translationService) }}</p>
                            <hr>
                            <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                <li><strong>{{ translateContent('Dashboard access:',  $translationService) }}</strong> {{ translateContent('keep an overview of your operations with a user-friendly dashboard that centralises all your key metrics.',  $translationService) }}</li>
                                <li><strong>{{ translateContent('Manage your companies:',  $translationService) }}</strong> {{ translateContent('organise and manage your company profiles and essential business data effortlessly.',  $translationService) }}</li>
                                <li><strong>{{ translateContent('Candidate profiles:',  $translationService) }}</strong>{{ translateContent('store and manage candidate information, including CVs, contact details, and interview feedback, all in one place.',  $translationService) }} </li>
                                <li><strong>{{ translateContent('Invoicing:',  $translationService) }}</strong>{{ translateContent('generate and manage invoices easily, keeping your financials in check.',  $translationService) }} </li>
                                <li>{{ translateContent('Union agreements: automatically calculate and manage union payments, ensuring compliance and peace of mind.',  $translationService) }}</li>
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
                            <h4 class="f-18 fw-500 heading">{{ translateContent('Basic plan',  $translationService) }}</h4>
                            <h3 class="f-45 fw-500 text2 price"> $69 </h3>
                            <!-- <h3 class="f-45 fw-500 text1"> $36 </h3> -->
                            <p class="f-16 color-d-g">{{ translateContent('Per month',  $translationService) }}</p>
                            <p class="color-d-g">{{ translateContent('For teams ready to grow, the basic plan offers advanced tools to streamline your operations:',  $translationService) }}</p>
                            <hr>
                            <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                <li>{{ translateContent('All free forever plan features',  $translationService) }}</li>
                                <li><strong>{{ translateContent('Real-time tracking:',  $translationService) }}</strong>{{ translateContent('monitor employee progress and tasks in real time, ensuring everything stays on track',  $translationService) }} </li>
                                <li><strong>{{ translateContent('Automated scheduling:',  $translationService) }}</strong>{{ translateContent('effortlessly schedule shifts and tasks, saving time and reducing errors.',  $translationService) }} </li>
                                <li><strong>{{ translateContent('Basic match scoring:',  $translationService) }}</strong>{{ translateContent('match candidates to jobs based on key criteria, helping you find the right fit faster.',  $translationService) }} </li>
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
                            <h4 class="f-18 fw-500 heading">{{ translateContent('All free forever plan features',  $translationService) }}Enterprise plan</h4>
                            <h3 class="f-40 fw-500 text2 price">{{ translateContent('Custom pricing',  $translationService) }}  </h3>
                            <!-- <h3 class="f-45 fw-500 text1"> $36 </h3> -->
                            <!-- <p class="f-16 color-d-g">Per month</p> -->
                            <p class="color-d-g">{{ translateContent('For large organisations with complex needs, offering full customisation and dedicated support:',  $translationService) }}</p>
                            <hr>
                            <ul class="listcheck price_list_check f-14 color-d-g pt-4">
                                <li>{{ translateContent('All professional plan features',  $translationService) }}</li>
                                <li><strong>{{ translateContent('Custom integrations:',  $translationService) }}</strong>{{ translateContent('integrate timr seamlessly with your existing systems.',  $translationService) }} </li>
                                <li><strong>{{ translateContent('Unlimited users:',  $translationService) }}</strong>{{ translateContent('scale your team without limitations.',  $translationService) }} </li>
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