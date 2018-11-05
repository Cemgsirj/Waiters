</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/noui/nouislider.min.js"></script>
    <script>
var filterBar = document.getElementById('filter-bar');

noUiSlider.create(filterBar, {
    start: [ 1500, 3900 ],
    connect: true,
    range: {
        'min': 1500,
        'max': 7500
    }
});

var skipValues = [
    document.getElementById('value-lower'),
    document.getElementById('value-upper')
];

filterBar.noUiSlider.on('update', function( values, handle ) {
    skipValues[handle].innerHTML = Math.round(values[handle]);
    $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
    $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
});
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>