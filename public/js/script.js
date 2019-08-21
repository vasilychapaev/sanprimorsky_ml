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

        $([document.documentElement, document.body]).animate({scrollTop: $("#wizard_h1").offset().top},1000);


    });


});