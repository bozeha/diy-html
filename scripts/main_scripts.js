    var temp_img = {};
$(document).ready(function () {

    $('#resize_div').click(function () {
        $('#resize_div').css('display', 'none');


    })

    // this to show messages on hover the images tooltip of bootstrap 
    $('[data-toggle="tooltip"]').tooltip();   
 //start_count_time_login();
})
function fullSizeImage(current_img) {
    temp_img['src'] = $(current_img).attr('src');
    temp_img['height'] = $(window).height();
    temp_img['width'] = $(window).width();
    var xxx = temp_img['src'].replace(/ /g , "%20");
    xxx = xxx.replace(/\(/g , "&#40;");
    xxx = xxx.replace(/\)/g , "&#41;");
    $('#resize_div').css('background-image', "url(" + xxx + ")");
    $('#resize_div').css('width', temp_img['width']);
    $('#resize_div').css('height', temp_img['height']);
    $('#resize_div').css('display', 'block');

}


function start_count_time_login()
{
    setTimeout(function(){ $('#myModal2').modal() }, 3000);

}
