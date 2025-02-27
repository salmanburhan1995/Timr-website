 <footer class="footer-section">
    <div class="container">
      <div class="footer-content wow animate__animated animate__fadeInUp">
        <div class="row mb-5 border-b-2 justify-content-center align-items-center">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="./">
                  <img src="{{ asset('frontend/assets/img/logo.svg') }}" class="img-fluid mb-3" alt="">
                </a>
              </div>
              <div class="footer-text">
                <p>
                  @lang('messages.footer_content')  {{--{{ translateContent('An intuitive employee time management software streamlining scheduling, tracking, and optimizing workforce productivity.', $translationService) }}
               --}} </p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
            <div class="footer-widget">
                <div class="footer-widget-heading"></div>
              <ul>
                <li><a href="{{ route('index') }}">@lang('messages.home'){{--{{ translateContent('Home',$translationService) }}--}}</a></li>
                <li><a href="{{ route('aboutus') }}">@lang('messages.about_us'){{--{{ translateContent('About Us',$translationService) }}--}} </a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
            <div class="footer-widget">
            <div class="footer-widget-heading"> </div>
              <ul>
                <li><a href="{{ route('price') }}">@lang('messages.price'){{--{{ translateContent('Pricing',$translationService) }}--}}</a></li>
                <li><a href="{{ route('feature') }}">@lang('messages.features'){{--{{ translateContent('Features',$translationService) }}--}}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 mb-50">
            <div class="footer-widget">
            <div class="footer-widget-heading"> </div>
              <ul>
                <li><a href="#">@lang('messages.policy'){{--{{ translateContent('Privacy policy',$translationService) }}--}}</a></li>
                <li><a href="#">@lang('messages.terms'){{--{{ translateContent('Terms & Condition',$translationService) }}--}}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 mb-50">
            <div class="footer-widget">
            <div class="footer-widget-heading"> </div>
              <ul>
                <li><a href="tel:+00-123-456-789">+00-123-456-789</a></li>
                <li><a href="mailto:help@abc.com">help@abc.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      <hr>
      <div class="Copyright">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="copyright-text">
              <div class="footer-menu">
                  <p class="">Copyright © Timr</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 text-end">
            <div class="copyright-text">
            <div class="footer-social-icon">
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-youtube youtube-bg"></i></a>
                <a href="#"><i class="fab fa-linkedin linkedin-bg"></i></a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
 </footer>

  <!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius:15px;">
      <div class="modal-header" style="border:0px">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center">
          <img src="{{ asset('frontend/assets/img/phone.svg') }}" width="80" />
        <p class="my-3 f-24 fw-600 text-black text-center mx-5">
        @lang('messages.demo_call')
         </p>
        <div class="d-flex justify-content-center gap-4 w-100 mt-3">
          <a href="#" class="btn btn-primary color-1 btn-border mt-4 mb-4  w-50">@lang('messages.yes')</a>
          <a href="#" class="btn btn-primary color-1  mt-4 mb-4  w-50">@lang('messages.no')</a>

        </div>
      </div>
    </div>
  </div>
</div>




  <a href="javascript:" id="return-to-top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- <script src="https://rawgit.com/lmgonzalves/momentum-slider/master/dist/momentum-slider.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>

  <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Toggle dropdown menu on hover
    let dropdownTrigger = document.querySelectorAll('.nav-item.dropdown');
    dropdownTrigger.forEach(function(trigger) {
        trigger.addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-menu').style.display = 'block';
        });
        trigger.addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-menu').style.display = 'none';
        });
    });
});

  </script>

  <script>
    new WOW().init();
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      setTimeout(function () {
        $('#exampleModal').modal('show');
      }, 1000);
    });
  </script>
  <script>
    function check() {
        var checkBox = document.getElementById("checbox");
        var text1 = document.getElementsByClassName("text1");
        var text2 = document.getElementsByClassName("text2");
        let proBtn = document.getElementById('pro-btn');
        for (var i = 0; i < text1.length; i++) {
            if (checkBox.checked == true) {
                text1[i].style.display = "block";
                text2[i].style.display = "none";
                let rate = text1[1].innerText.split('$');
                let href = "{{URL::to('payment')}}"+'/'+btoa(rate[1])
                proBtn.href = href;
            } else if (checkBox.checked == false) {
                text1[i].style.display = "none";
                text2[i].style.display = "block";
                let rate = text2[1].innerText.split('$');
                let href = "{{URL::to('payment')}}"+'/'+btoa(rate[1])
                proBtn.href = href;
            }
        }
    }
    check();
    </script>
     <script>
    $(document).ready(function() {
        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-target');
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },
            {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    });
</script>
  </body>
</html>
