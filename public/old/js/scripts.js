$(document).ready(function() {
    $(function() {
        var Month = '';
        Data = new Date();
        Month = Data.getMonth();

        if((Month <= 4)){
			$('div h1 span').css({"color": "#rgb(179, 26, 33)"});
			$('.form-title').css({"background": "rgb(179, 26, 33)"})
            $('header').addClass('leto').removeClass('zima');
            $('#header-form').removeClass('col-sm-offset-6');
        } else {
            $('header').removeClass('zima').addClass('leto');
           // $('#header-form').addClass('col-sm-offset-6');
        }
    });

/*	
$('form').submit(function(){
   $('button').prop('disabled', 1);
});
*/
    $('form.form').submit(function(e){
		$('button:submit').prop('disabled', 1);
        e.preventDefault();
        var m_data=jQuery(this).serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/old/send',
            data: m_data,
            success: function(result){
                var results=(result);
                if(results == 'GOOD'){
                    alert('Мы перезвоним Вам в рабочее  время в течение 10 минут!');
                    $('form.form input[type=text]').val('');
					$('button:submit').prop('disabled', 0);
					yaCounter47736742.reachGoal('Send_Order');
					dataLayer.push({'eventCategory':'СallBackForm_Send','eventAction':'Send','eventLabel':'СallBackForm_Send','event':'UAevent'});
                } else {
                    if (results == 'err1') {
                        alert('Некорректный номер телефона');
						$('button:submit').prop('disabled', 0);
                        return false;
                    }
                }
            },
            error: function(){
                alert('Ошибка!');
				$('button:submit').prop('disabled', 0);
            }
        });
    });

    $('#step2').click(function() {
        event.preventDefault();
        $('#step-one').hide(0).removeClass('active');
        $('#step-two').show(0).addClass('active');
    });

    $('#step1').click(function() {
        event.preventDefault();
        $('#step-two').hide(0).removeClass('active');
        $('#step-one').show(0).addClass('active');
    });

    $('#step3').click(function() {
        event.preventDefault();
        $('#step-two').hide(0).removeClass('active');
        $('#step-three').show(0).addClass('active');
    });

    $('#step2-prev').click(function() {
        event.preventDefault();
        $('#step-three').hide(0).removeClass('active');
        $('#step-two').show(0).addClass('active');
    });

    $('#step4').click(function() {
        event.preventDefault();
        $('#step-three').hide(0).removeClass('active');
        $('#step-thour').show(0).addClass('active');
    });

    $('#step3-prev').click(function() {
        event.preventDefault();
        $('#step-thour').hide(0).removeClass('active');
        $('#step-three').show(0).addClass('active');
    });

    $('#step5').click(function() {
        event.preventDefault();
        $('#step-thour').hide(0).removeClass('active');
        $('#step-five').show(0).addClass('active');
    });

    $('#step4-prev').click(function() {
        event.preventDefault();
        $('#step-five').hide(0).removeClass('active');
        $('#step-thour').show(0).addClass('active');
    });

    $('#back-top').click(function (){
        $('body,html').animate({
            scrollTop:0
        }, 1200);
        return false;
    });

    $('.date').mask('99.99.9999', {placeholder: '__.__.____' });

    $('.phone').mask('9(999) 999 99 99');

    $(function() {
        $('#datep-on, #datep-off').datepicker({
            minDate: "Date",
            onSelect: function(date, datepicker) {
                if (datepicker.id == "datep-on") {
                    $('#datep-off')
                       .datepicker("enable").datepicker("option", "minDate", date)
                }

                if (!$('#datep-off').datepicker("isDisabled")) {
                    var startDate = $('#datep-on').datepicker("getDate");
                    var endDate = $('#datep-off').datepicker('getDate');
                }
            }
        }).filter("#datep-off").datepicker("disable");

        $('#datep-on2, #datep-off2').datepicker({
            minDate: "Date",
            onSelect: function(date, datepicker) {
                if (datepicker.id == "datep-on2") {
                    $('#datep-off2')
                       .datepicker("enable").datepicker("option", "minDate", date)
                }

                if (!$('#datep-off2').datepicker("isDisabled")) {
                    var startDate = $('#datep-on2').datepicker("getDate");
                    var endDate = $('#datep-off2').datepicker('getDate');
                }
            }
        }).filter("#datep-off2").datepicker("disable");

        $('#datep-on3, #datep-off3').datepicker({
            minDate: "Date",
            onSelect: function(date, datepicker) {
                if (datepicker.id == "datep-on3") {
                    $('#datep-off3')
                       .datepicker("enable").datepicker("option", "minDate", date)
                }

                if (!$('#datep-off3').datepicker("isDisabled")) {
                    var startDate = $('#datep-on3').datepicker("getDate");
                    var endDate = $('#datep-off3').datepicker('getDate');
                }
            }
        }).filter("#datep-off3").datepicker("disable");

        $('#datep-on, #datep-off, #datep-on2, #datep-off2, #datep-on3, #datep-off3').datepicker($.datepicker.regional["ru"]);

        ( function( factory ) {
            if ( typeof define === "function" && define.amd ) {
                define( [ "../widgets/datepicker" ], factory );
            } else {
                factory( jQuery.datepicker );
            }
        }( function( datepicker ) {
            datepicker.regional.ru = {
                closeText: "Закрыть",
                prevText: "&#x3C;Пред",
                nextText: "След&#x3E;",
                currentText: "Сегодня",
                monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь",
                    "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
                monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
                    "Июл","Авг","Сен","Окт","Ноя","Дек" ],
                dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
                dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
                dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
                weekHeader: "Нед",
                dateFormat: "dd.mm.yy",
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: "" };
            datepicker.setDefaults( datepicker.regional.ru );

            return datepicker.regional.ru;

        }));
    });

    $(function() {
        $( "#slider_price" ).slider({
            range: true,
            min: 1000,
            max: 20000,
            step: 500,
            values: [ 5000, 10000 ],
            slide: function( event, ui ) {
                $( "#price" ).val(ui.values[ 0 ]);
                $("#price2").val(ui.values[1]); }
        });
        $( "#price" ).val($( "#slider_price" ).slider( "values", 0 ));
        $("#price2").val($("#slider_price").slider( "values", 1 ));
    });

    $('#video').on('show.bs.modal', function (e) {
        $('#video .video').html('<iframe width="100%" height="315" src="https://www.youtube.com/embed/vrhTgB2FFm4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
    });

    $('#video').on('hidden.bs.modal', function (e) {
        $('#video .video').empty();
    });
});