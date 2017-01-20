    var temp_img = {};
$(document).ready(function () {

    $('#resize_div').click(function () {
        $('#resize_div').css('display', 'none');


    })

})
function fullSizeImage(current_img) {
    temp_img['src'] = $(current_img).attr('src');
    temp_img['height'] = $(window).height();
    temp_img['width'] = $(window).width();
    var xxx = temp_img['src'].replace(/1/g , "x");
    $('#resize_div').css('background-image', "url(" + temp_img['src'] + ")");
    $('#resize_div').css('width', temp_img['width']);
    $('#resize_div').css('height', temp_img['height']);
    $('#resize_div').css('display', 'block');

}