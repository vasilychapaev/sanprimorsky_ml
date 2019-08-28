$(document).ready(function () {

    $('form.ajax').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: 'POST',
            url: '/send',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                alert(data.message);
            }
        });
    });


    $('form.datespeoplesphone').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);

        $('#wizard input[name=datestart]').val( $('input[name=datestart]', form).val() );
        $('#wizard input[name=datefinish]').val( $('input[name=datefinish]', form).val() );
        $('#wizard select[name=people-val]').val( $('input[name=datefinish]', form).val() );

        $([document.documentElement, document.body]).animate({scrollTop: $("#wizard_h1").offset().top},1000);

    });


    $('.js_datepicker').datepicker({
        dateFormat: 'dd.mm.yy'
    });


    $('.js-select2').select2();





    // костыли
    $('.calc-form .actions').css('margin-top', '60px');

    $('#wizard a[href="#finish"]').on('click', function(e) {
        e.preventDefault();
        var form = $('#wizard');
        $.ajax({
            type: 'POST',
            url: '/webpay/order',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (json) {
                if (json.status == 'ok') {
                    $('#webpay_form').html(json.html);
                    setTimeout($('#webpay_form').submit(), 1000);
                }
            }
        });
    })

});