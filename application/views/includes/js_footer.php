<input type="hidden" id="hidden_base_url" value="<?php echo base_url(); ?>" />

<!-- js -->
<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js'); ?>"></script>
<!--slider-->
<script src="<?php echo base_url('assets/js/jquery.sliderPro.min.js'); ?>"></script>
<script>
    $(document).ready(function ($) {
        $('#example5').sliderPro({
            width: 1980,
            height: 650,
            orientation: 'vertical',
            loop: false,
            arrows: true,
            buttons: false,
            thumbnailsPosition: 'right',
            thumbnailPointer: true,
            thumbnailWidth: 290,
            breakpoints: {
                800: {
                    thumbnailsPosition: 'bottom',
                    thumbnailWidth: 270,
                    thumbnailHeight: 100
                },
                500: {
                    thumbnailsPosition: 'bottom',
                    thumbnailWidth: 120,
                    thumbnailHeight: 50
                }
            }
        });
    });
</script>


<!--//slider-->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- //js -->
<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<!--/ start-smoth-scrolling -->
<script src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>

<script>
    function base_url(arg)
    {
        var base_url = document.getElementById('hidden_base_url').value;
        return base_url + arg;
    }
</script>
