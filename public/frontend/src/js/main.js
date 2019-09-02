// bootstrap/transition.js
// bootstrap/dropdown.js
// bootstrap/collapse.js
// bootstrap/tab.js
//= libs/jquery.maskedinput.min.js
//= libs/jquery.steps.js
//= libs/scripts.js

$(function() {
    var $data = new Date();
    var $month = $data.getMonth();
    var body = $('body');

    if(($month <= 4)){
        $('div h1 span').css({"color": "#rgb(179, 26, 33)"});
        $('.form-title').css({"background": "rgb(179, 26, 33)"});
        body.addClass('leto').removeClass('zima');
        $('#header-form').removeClass('col-sm-offset-6');
    } else {
        body.removeClass('zima').addClass('leto');
    }

    var $videoModal = $('#video');
    if ($videoModal.length) {
        var $videoBlock = $videoModal.find('.video');
        $videoModal.on('show.bs.modal', function (e) {
            $videoBlock.html('<iframe width="100%" height="315" src="https://www.youtube.com/embed/vrhTgB2FFm4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
        });

        $videoModal.on('hidden.bs.modal', function (e) {
            $videoBlock.empty();
        });
    }
});