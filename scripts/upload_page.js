var upload_array={};




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

})