var upload_array={};




$( document ).ready(function() {
upload_array=  $('#subject_name option:selected').attr('data-user-id');
$('#subject_name').change(function() {
  upload_array=  $('#subject_name option:selected').attr('data-user-id');
  console.log(upload_array);
})

})