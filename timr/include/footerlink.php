<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- <script src="https://rawgit.com/lmgonzalves/momentum-slider/master/dist/momentum-slider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
  <script src="assets/js/script.js"></script>



 
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

        for (var i = 0; i < text1.length; i++) {
            if (checkBox.checked == true) {
                text1[i].style.display = "block";
                text2[i].style.display = "none";
            } else if (checkBox.checked == false) {
                text1[i].style.display = "none";
                text2[i].style.display = "block";
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
<script>
    // -----Country Code Selection
$("#mobile_code").intlTelInput({
	initialCountry: "us",
	separateDialCode: true,
	utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});
  </script>
  </body>
</html>