@include('frontend.include.header')

<link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}" />
<script>
$("input").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
</script>

</head>

<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <a href="{{ route('index') }}" class="brand">
            <svg width="76" height="51" viewBox="0 0 76 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_0_1832" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="14" width="75" height="25">
              <path d="M12.1275 18.8237V22.7814H0V18.8237H2.30672H3.34211H12.1275ZM3.34211 14.2722H8.57645V31.9832C8.57645 32.4697 8.65016 32.849 8.79765 33.1211C8.94508 33.385 9.14985 33.5705 9.41201 33.6777C9.68234 33.7849 9.99357 33.8384 10.3458 33.8384C10.5916 33.8384 10.8373 33.8178 11.0831 33.7766C11.3288 33.7272 11.918 33.6653 12.0491 33.6406V37.821C11.574 37.9364 10.3131 38.0559 9.63316 38.0807C8.37168 38.1301 7.26585 37.9612 6.3156 37.5736C5.3736 37.1861 4.64046 36.5842 4.1162 35.7679C3.59195 34.9516 3.33392 33.9209 3.34211 32.6759V18.8237V17.9229V17.6979V14.2722Z" fill="white"/>
              <path d="M3.34215 17.9229C3.30484 18.3124 3.06826 18.8237 2.30676 18.8237H3.34215V17.9229Z" fill="white"/>
              <path d="M29.1704 37.8207V18.8233H34.159V22.175V20.4065C35.1551 19.6324 35.1551 19.6324 36.0529 19.2455C37.1752 18.7617 38.3612 18.5759 39.6391 18.5759C40.9334 18.5759 42.0351 18.9016 42.9443 19.553C43.8536 20.1962 44.4598 21.0702 44.7629 22.175H44.9594C45.3444 21.0867 46.0407 20.2168 47.0483 19.5654C48.064 18.9057 49.2641 18.5759 50.6484 18.5759C52.4096 18.5759 53.839 19.1408 54.9367 20.2704C56.0425 21.3917 56.5955 22.9831 56.5955 25.0445V37.8207H51.3734V26.0834C51.3734 25.028 51.0949 24.2364 50.5378 23.7087C49.9808 23.181 49.2846 22.9171 48.449 22.9171C47.4988 22.9171 46.7575 23.2222 46.2251 23.8324C45.6926 24.4343 45.4264 25.23 45.4264 26.2194V37.8207H40.3517V25.972C40.3517 25.0403 40.0856 24.2983 39.5531 23.7458C39.0288 23.1934 38.3366 22.9171 37.4765 22.9171C36.895 22.9171 36.3707 23.0655 35.9038 23.3624C35.445 23.651 35.0806 24.0591 34.8102 24.5868C34.5399 25.1063 34.4048 25.7164 34.4048 26.4173V37.8207H29.1704Z" fill="white"/>
              <path d="M62.5326 37.6978V18.9601H67.6882V24.254L66.9616 22.7216C67.5152 21.3981 68.4031 20.3997 69.6259 19.7264C70.8481 19.0298 72.336 18.6815 74.0895 18.6815V23.6968C73.8584 23.6736 73.6508 23.662 73.4667 23.662C73.282 23.6388 73.0861 23.6271 72.8785 23.6271C71.4017 23.6271 70.2024 24.0567 69.2799 24.9158C68.3803 25.7516 67.9304 27.0635 67.9304 28.8514V37.6978H62.5326Z" fill="white"/>
              <path d="M18.7517 37.7817C18.4353 37.7817 18.1787 37.5234 18.1787 37.2049V23.1428H22.1227C22.7557 23.1428 23.2689 23.6593 23.2689 24.2964V37.7817H18.7517Z" fill="white"/>
              <path d="M18.1787 15.5131C18.1787 14.8761 18.6918 14.3595 19.3248 14.3595H23.4506V17.3589C23.4506 18.6331 22.4244 19.6661 21.1585 19.6661H18.1787V15.5131Z" fill="white"/>
              </mask>
              <g mask="url(#mask0_0_1832)">
              <path d="M0 4.11249H75.6243V46.5652H0V4.11249Z" fill="#070A40"/>
              </g>
            </svg>

            </a>
            </div>
        </div>
    </div>
</section>
<section class="gap-80 border-top-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 px-4">
                <p>{{ translateContent('Subscribe to timr Pro plan', $translationService) }}</p>
                <h4> <span class="f-32 fw-600">${{$rate}}</span> <sub class="f-16 fw-400">/month</sub></h4>
                <h5 class="f-20 fw-600 d-flex justify-content-between"> <span>{{ translateContent('1 item x timr Pro plan', $translationService) }}</span> <span class="f-20 fw-600 text-right text-end">${{$rate}}</span></h5>
                <p class="ps-5">{{ translateContent('A single license for individual use.', $translationService) }}</p>
                <hr>
                <form action="" class="ps-5 pb-3">
                    <div class="form-group">
                        <label for="" class="d-flex justify-content-between"><span>{{ translateContent('Subtotal', $translationService) }}</span><span>${{$rate}}</span></label>
                        <input type="text" class="form-control" placeholder="Add coupon code">
                    </div>
                </form>
                <hr>
                <label for="" class="ps-5  d-flex justify-content-between"><span>{{ translateContent('Subtotal', $translationService) }}</span><span>${{$rate}}</span></label>
            </div>

            <div class="col-lg-6 border-left-1 px-4">
                <h2 class="fw-600 f-20 text-center">{{ translateContent('Proceed To Pay', $translationService) }}</h2>
                <p class="text-center">{{ translateContent('Enter your card details and get access to the timr', $translationService) }}</p>
                <form action="{{route('stripe.payment')}}" method="POST" id="payment-form">
                    @csrf
                    <div id="card-element"></div>
                    <input type="hidden" name="rate" value="{{$rate}}">
                    <input type='hidden' name='stripeToken' id='stripe-token-id'>
                    {{--                    <div class="form-group mb-2" id="cardName-div">--}}
{{--                        <label for="" class="fw-500">{{ translateContent('Card Holder’s Name', $translationService) }}</label>--}}
{{--                        <input type="text" class="form-control" placeholder="Add Card Holder’s Name" id="cardName" name="cardName">--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-2 form-control" id="cardNumber-div">--}}
{{--                        <label for=""  class="fw-500">{{ translateContent('Card Information', $translationService) }}</label>--}}
{{--                        <input type="text" class="form-control" placeholder="Add Card Number" id="cardNumber" name="cardNumber">--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-2" id="cardDate-div">--}}
{{--                        <label for=""  class="fw-500">MM/YY</label>--}}
{{--                        <input type="text" class="form-control" placeholder="MM/YY" id="cardExpDate"  name="cardExpDate">--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-2" id="cardCvs-div">--}}
{{--                        <label for=""  class="fw-500">CVS</label>--}}
{{--                        <input type="text" class="form-control" placeholder="CVS" id="cardCVS" name="cardCVS">--}}
{{--                    </div>--}}
                    <button type="button" class="btn btn-primary btn-block mt-3 mb-4" style="width:100%" id='pay-btn' onclick="createToken()">{{ translateContent('Sign Up', $translationService) }}</button>
{{--                    <p class="error">{{ Session::error() }}</p>--}}
                    <p id="payment-result">{{ translateContent('By placing order you agree to Terms of Service & Privacy Policy.', $translationService) }}</p>
                </form>
            </div>
        </div>
    </div>
</section>
@include('frontend.include.footerlink')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("{{env('STRIPE_KEY')}}")
    // const options = {
    //     layout: {
    //         type: 'tabs',
    //         defaultCollapsed: false,
    //     }
    // };
    const elements = stripe.elements();
    // const options = {
    //     layout: {
    //         type: 'tabs',
    //         defaultCollapsed: false,
    //     }
    // };
    // const cardNumberElement = elements.create('cardNumber',options);
    // const cardExpiryElement = elements.create('cardExpiry');
    // const cardCvcElement = elements.create('cardCvc');
    // // Create an instance of the card Element
    const cardElement = elements.create('card');
    cardElement.mount('#card-element')
    // cardNumberElement.mount('#cardNumber-div')
    // cardExpiryElement.mount('#cardDate-div')
    // cardCvcElement.mount('#cardCvs-div')

    function createToken() {
        document.getElementById("pay-btn").disabled = true;
        stripe.createToken(cardElement).then(function(result) {

            if(typeof result.error != 'undefined') {
                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message);
            }

            /* creating token success */
            if(typeof result.token != 'undefined') {
                document.getElementById("stripe-token-id").value = result.token.id;
                document.getElementById('payment-form').submit();
            }
        });
    }

</script>


