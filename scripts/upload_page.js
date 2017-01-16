var upload_array={};


upload_array['step_number']= 1;

$( document ).ready(function() {
upload_array['subject_number']=  $('#subject_name option:selected').attr('subject-user-id');
$('#subject_number').val(upload_array['subject_number']);
upload_array['user_number']=  $('#nick_name option:selected').attr('data-user-id');
$('#user_number').val(upload_array['user_number']);


$('#subject_name').change(function() {
  upload_array['subject_number']=  $('#subject_name option:selected').attr('subject-user-id');
$('#subject_number').val(upload_array['subject_number']);
  console.log( upload_array['subject_number']);
})


$('#nick_name').change(function() {
  upload_array['user_number']=  $('#nick_name option:selected').attr('data-user-id');
$('#user_number').val(upload_array['user_number']);
  console.log( upload_array['subject_number']);
})


$('.accessories').click(function(){
 $(this).hasClass('access_select')?$(this).removeClass('access_select'):$(this).addClass('access_select');

})


$('.button_p').click(function(){$('.add_another_step').first().clone().appendTo( ".start_steps" );})



})