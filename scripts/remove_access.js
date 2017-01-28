
$(document).ready(function () {

    //$('.accessories').click(function(){($(this).attr('data-select-access')=='false')?$(this).attr('data-select-access','true'):$(this).attr('data-select-access','false')})
    $('.accessories').click(function () {
        ($(this).attr('data-select-access') == 'false') ? $(this).attr('data-select-access', 'true') : $(this).attr('data-select-access', 'false');
        ($(this).hasClass('data-select-access'))?$(this).removeClass('data-select-access'):$(this).addClass('data-select-access')});


})
