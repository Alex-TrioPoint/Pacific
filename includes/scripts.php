<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26/02/2018
 * Time: 08:42
 */?>
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/core/main.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/DatePickerX.js" type="text/javascript"></script>
<script>
    window.addEventListener('DOMContentLoaded', function(){
        var myDatepicker = document.querySelector('input[name="demo"]'),

        $myDatepicker.DatePickerX.init({
            // options here

        });
    });

</script>
<script>
    $(document).ready(function(){
        $("#annual").click(function(){
            $("#annualNotice").show(700);
        });
        $("#rest").click(function(){
            $("#annualNotice").hide(700);
        });
    });
</script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js%20v=1.2" type="text/javascript"></script>
<!-- Custom Scroller Js CDN -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>-->
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<script>
$(document).ready(function () {

$("#sidebar").mCustomScrollbar({
theme: "minimal"
});

$('#sidebarCollapse').on('click', function () {
// open or close navbar
$('#sidebar').toggleClass('active');
// close dropdowns
$('.collapse.in').toggleClass('in');
// and also adjust aria-expanded attributes we use for the open/closed arrows
// in our CSS
$('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

});
</script>

</html>
