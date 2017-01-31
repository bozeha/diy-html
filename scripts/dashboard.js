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
    else if (url.search(/manage-access/i) > -1) {
        $('#li-manage-access').addClass('active');

    }
    else if (url.search(/manage-users/i) > -1) {
        $('#li-manage-users').addClass('active');

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

}

function elements_to_remove(object_type) {
    var array_to_delet = [];
    var temp_loop = 0;
    if (object_type== 'guides')
    {
    $('.selected-guide').each(function (key, value) { ($(this).attr('data-guide-selected') == 'false') ? console.log('false') : array_to_delet.push($(this).attr('data-guide-id'));});
    }
    else if(object_type== 'accessories')
    {
        $('.accessories').each(function (key, value) { ($(this).attr('data-select-access') == 'false') ? console.log('false') : array_to_delet.push($(this).attr('data-user-id'));});

    }
    else if(object_type== 'users')
    {
        array_to_delet.push($('select.users option:selected').attr('data-user-id'));
    }
    //console.log(array_to_delet);

    $.post("content/remov_element.php",
    {
        object_type: object_type,
        id_numbers: array_to_delet
    },
    function(data, status){
        console.log("\nStatus: " + status);
        $('#done_message').html('the process has done');
        location.reload();
    });

}