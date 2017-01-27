$(document).ready(function () {
    var url = window.location.href;
    var n;
    $('.nav li').removeClass('active');
    if (url.search(/new-guide-form/i) > -1) {
        $('#li-guide-form').addClass('active');
    }
    else if (url.search(/new-access/i) > -1) {
        $('#li-new-access').addClass('active');

    }
    else if (url.search(/manage-guides/i) > -1) {
        $('#li-manage-guides').addClass('active');

    }
});
function markForDelete(current_guide) {
    console.log($(current_guide).parent());
    console.log($(current_guide).parent().attr('data-guide-selected'));
    //$(current_guide).parent().css('border', '1px solid blue');
    if ($(current_guide).parent().attr('data-guide-selected') == 'true') {
        console.log($(current_guide).val());
        $(current_guide).parent().attr('data-guide-selected', false);
        $(current_guide).parent().css('border', '0px solid blue');
        $(current_guide).html('סמן מדריך');
    }
    else {
        $(current_guide).parent().attr('data-guide-selected', true);
        $(current_guide).parent().css('border', '2px solid blue');
        $(current_guide).parent().css('border-radius', '5px');
        console.log($(current_guide).val());
        $(current_guide).html('בטל סימון');
    }

    var array_to_delet = [];
    var temp_loop = 0;

    function elements_to_remove() {

        $('.selected-guide').each(function (key, value) { ($(this).attr('data-guide-selected') == 'false') ? console.log('false') : array_to_delet[temp_loop] = $(this).attr('data-guide-id'); temp_loop++ });

    }
}