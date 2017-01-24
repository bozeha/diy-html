var upload_array = {};


upload_array['step_number'] = 1;
//upload_array['type_of_steps'] = {};
upload_array['type_of_steps'] = [];

temp_loop = 0;

$(document).ready(function () {
  upload_array['subject_number'] = $('#subject_name option:selected').attr('subject-user-id');
  $('#subject_number').val(upload_array['subject_number']);
  upload_array['user_number'] = $('#nick_name option:selected').attr('data-user-id');
  $('#user_number').val(upload_array['user_number']);


  $('#subject_name').change(function () {
    upload_array['subject_number'] = $('#subject_name option:selected').attr('subject-user-id');
    $('#subject_number').val(upload_array['subject_number']);
    console.log(upload_array['subject_number']);
  })


  $('#nick_name').change(function () {
    upload_array['user_number'] = $('#nick_name option:selected').attr('data-user-id');
    $('#user_number').val(upload_array['user_number']);
    console.log(upload_array['subject_number']);
  })


  $('.accessories').click(function () {
    $(this).hasClass('access_select') ? $(this).removeClass('access_select') : $(this).addClass('access_select');
    upload_array['access'] = []
    $.each($('.access_select'), function (index) {
      upload_array['access'][index] = $(this).attr('data-user-id');
    })
    $('#access_array').val(upload_array['access']);
  })

  //upload_array['type_of_steps'][0] = "text_and_img";// the first tet and image are already in the page 
  $('.button_text_and_img').click(function () {
    $('.add_another_step').first().clone().appendTo(".start_steps");
    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");
    $('form .one_of_steps').last().val('');


    upload_array['type_of_steps'][temp_loop] = "text_and_img";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    temp_loop++;
  })


  $('.button_textarea').click(function () {
    $('.add_another_textarea').last().clone().appendTo(".start_steps");
    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");

    var temp_loop2 = temp_loop + 1;// add new id name for every textarea
    $('form textarea').last().attr('id', 'editor' + temp_loop2);
    CKEDITOR.replace('editor' + temp_loop2);
    $('form .add_another_textarea').last().val('');
    upload_array['type_of_steps'][temp_loop] = "textarea";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    temp_loop++;

  })
  $('.button_youtube').click(function () {
    $('.add_guide_videos_array').last().clone().appendTo(".start_steps");
    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");


    $('form .add_guide_videos_array').last().val('');
    upload_array['type_of_steps'][temp_loop] = "youtube";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    temp_loop++;
      disable_next(true);

  })
})


function youtube_options() {

  var str = $('form .add_guide_videos_array input.guide_videos_array').last().val();
  str = str.replace(/.*=/, "");
  console.log(str);
  str = $('form #auto').last().is(':checked') ? str + "?autoplay=1" : str + "?autoplay=0";
  str = $('form #loop').last().is(':checked') ? str + "&loop=1" : str + "&loop=0";
  str = $('form #controler').last().is(':checked') ? str + "&controls=1" : str + "&controls=0";
  str = $('form #rel').last().is(':checked') ? str + "&rel=1" : str + "&rel=0";
  $('form .add_guide_videos_array input#guide_videos_array_finel').last().val(str);
  $('form .add_guide_videos_array input.guide_videos_array').last().attr('readonly', true);
  $('form .add_guide_videos_array input.guide_videos_array').last().css('background-color','#D3D3D3');
  disable_next(false);
}

function disable_next(current_step)
{
current_step?$('#gray-div').css('display','block'):$('#gray-div').css('display','none');


}