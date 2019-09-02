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


    $('form.js_datespeoplesphone').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        $('#wizard input[name=datestart]').val($('input[name=datestart]', form).val());
        $('#wizard input[name=datefinish]').val($('input[name=datefinish]', form).val());
        $('#wizard select[name=adults_count]').val($('select[name=people-val]', form).val());
        $('#wizard select[name=childs_count]').val($('select[name=baby-val]', form).val());
        $('#wizard select[name=bolezni]').val($('select[name=profile]', form).val());
        $('#wizard input[name=phone]').val($('input[name=phone]', form).val());

        scroll2book();
    });

    $('form.js_scroll2book').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        $('#wizard input[name=fio]').val($('input[name=name]', form).val());
        $('#wizard input[name=phone]').val($('input[name=phone]', form).val());

        scroll2book();
    });


    $('.js_go2book').on('click', function (e) {
        e.preventDefault();
        scroll2book();
    });


    // btn.Перейти к брони
    let btn = document.querySelector('#plavbutton');
    let calc_offset = $('.section.calc').offset().top;
    let calc_offset2 = $('.section.after-calc').offset().top;
    window.onscroll = magic;
    function magic() {
        if (window.pageYOffset > 1000 && (window.pageYOffset < calc_offset || window.pageYOffset > calc_offset2)) {
        // if (window.pageYOffset > 1000) {
            btn.style.opacity = '1';
        } else {
            btn.style.opacity = '0';
        }
    }




    function scroll2book() {
        $([document.documentElement, document.body]).animate({scrollTop: $("#wizard_h1").offset().top}, 1000);
    }


    $('.js_datepicker').datepicker({
        dateFormat: 'dd.mm.yy'
    });


    // $('.js-select2').select2();



    $('#wizard a[href="#finish"]').on('click', function (e) {
        e.preventDefault();
        var form = $('#wizard');
        $.ajax({
            type: 'POST',
            url: '/webpay/order',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (json) {
                if (json.status == 'ok') {
                    yaCounter55131532.reachGoal('payment');
                    $('#webpay_form').html(json.html);
                    setTimeout($('#webpay_form').submit(), 1000);
                }
            }
        });
    });


    function popupSoloduha() {
        $('#global-modal').modal('show');
    }
    setTimeout(popupSoloduha, 25000);

});