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
                                    <a href="{{ route('payment') }}" class="btn btn-border">Select Plan</a>
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
                                    <a href="{{ route('payment') }}" class="btn btn-border">{{ __('Select Plan') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
