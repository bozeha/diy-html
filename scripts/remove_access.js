
$(document).ready(function () {

    //$('.accessories').click(function(){($(this).attr('data-select-access')=='false')?$(this).attr('data-select-access','true'):$(this).attr('data-select-access','false')})
    $('.accessories').click(function () {
        ($(this).attr('data-select-access') == 'false') ? $(this).attr('data-select-access', 'true') : $(this).attr('data-select-access', 'false');
        ($(this).hasClass('data-select-access'))?$(this).removeClass('data-select-access'):$(this).addClass('data-select-access')
    });
   /* $('.users').change(function () {
        $("select option").attr('data-users-selected','false')  ;
        $("select option").removeClass('data-select-access');
        $("select option:selected").attr('data-users-selected','true');
        $("select option:selected").addClass('data-select-access');
    });
*/

})
