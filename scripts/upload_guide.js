var upload_array = {};

upload_array['step_number'] = 1; /// the level place 
upload_array['type_of_steps'] = [];
//console.log(upload_array['step_number']+"xxxxxxxxxxxxxxxxxxxxxxxxx");

temp_loop = 0; /// the type_of_steps place

$(document).ready(function () {
  upload_array['subject_number'] = $('#subject_name option:selected').attr('subject-user-id');
  $('#subject_number').val(upload_array['subject_number']);
  upload_array['user_number'] = $('#nick_name option:selected').attr('data-user-id');
  $('#user_number').val(upload_array['user_number']);


  $('#subject_name').change(function () {
    upload_array['subject_number'] = $('#subject_name option:selected').attr('subject-user-id');
    $('#subject_number').val(upload_array['subject_number']);
  //  console.log(upload_array['subject_number']);
  })


  $('#nick_name').change(function () {
    upload_array['user_number'] = $('#nick_name option:selected').attr('data-user-id');
    $('#user_number').val(upload_array['user_number']);
    //console.log(upload_array['subject_number']);
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
    $('.add_another_step').last().clone().appendTo(".start_steps");

// add option to add new step between 
    $(".start_steps").append("<div data-between-number='"+upload_array['step_number']+"' class='add-new-step-between' data-current-place='"+upload_array['step_number']+"'><button type='button' onclick='addStepBetweenButton(this)'>הוסף שלב ביניים</button></div>");
      
    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");
    $('form .btn-danger').last().attr('onclick',"removeBlock($(this).parent(),"+(upload_array['step_number']-1)+"),'text_and_img'");
    //do the reomve block option 
    $('form .one_of_steps').last().val('');


    upload_array['type_of_steps'][temp_loop] = "text_and_img";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    //console.log(upload_array['step_number']);
    temp_loop++;
  })


  $('.button_textarea').click(function () {
    $('.add_another_textarea').last().clone().appendTo(".start_steps");

    // add option to add new step between 
    $(".start_steps").append("<div data-between-number='"+upload_array['step_number']+"' class='add-new-step-between' data-current-place='"+upload_array['step_number']+"'><button type='button' onclick='addStepBetweenButton(this)'>הוסף שלב ביניים</button></div>");

    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");
    $('form .btn-danger').last().attr('onclick',"removeBlock($(this).parent(),"+(upload_array['step_number']-1)+"),'textarea'");
// do the romove bloc option

    var temp_loop2 = temp_loop + 1;// add new id name for every textarea
    $('form textarea').last().attr('id', 'editor' + temp_loop2);
    CKEDITOR.replace('editor' + temp_loop2);
    $('form .add_another_textarea').last().val('');
    upload_array['type_of_steps'][temp_loop] = "textarea";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    //console.log(upload_array['step_number']);
    temp_loop++;

  })
  $('.button_youtube').click(function () {
    $('.add_guide_videos_array').last().clone().appendTo(".start_steps");

// add step between 
$(".start_steps").append("<div data-between-number='"+upload_array['step_number']+"' class='add-new-step-between' data-current-place='"+upload_array['step_number']+"'><button type='button' onclick='addStepBetweenButton(this)'>הוסף שלב ביניים</button></div>");

    $('form .step_lable').last().html(upload_array['step_number'] + " שלב");
    $('form .btn-danger').last().attr('onclick',"removeBlock($(this).parent(),"+(upload_array['step_number']-1)+"),'youtube'");
    // do the romove bloc option

    $('form .add_guide_videos_array').last().val('');
    upload_array['type_of_steps'][temp_loop] = "youtube";
    $('#type_of_steps').val(upload_array['type_of_steps']);
    upload_array['step_number']++;
    //console.log(upload_array['step_number']);
    temp_loop++;
      disable_next(true);

  })
})


function youtube_options(current_this) {

$(current_this).parent().parent().find('input#auto').val()


  var str = $(current_this).parent().parent().parent().find('input.guide_videos_array').val();
  //var str = $('form .add_guide_videos_array input.guide_videos_array').last().val();
  str = str.replace(/.*=/, "");
  //console.log(str);
  str = $(current_this).parent().parent().find('input#auto').is(':checked') ? str + "?autoplay=1" : str + "?autoplay=0";
  str = $(current_this).parent().parent().find('input#loop').is(':checked') ? str + "&loop=1" : str + "&loop=0";
  str = $(current_this).parent().parent().find('input#controler').is(':checked') ? str + "&controls=1" : str + "&controls=0";
  str = $(current_this).parent().parent().find('input#rel').is(':checked') ? str + "&rel=1" : str + "&rel=0";
  //console.log(str);
  //$('form .add_guide_videos_array input.guide_videos_array_finel').last().val(str);
  $(current_this).parent().parent().parent().find('input.guide_videos_array_finel').val(str);
  
  $(current_this).parent().find('input.guide_videos_array').attr('readonly', true);
  $(current_this).parent().find('input.guide_videos_array').css('background-color','#D3D3D3');
  //$('form .add_guide_videos_array input.guide_videos_array').last().attr('readonly', true);
  //$('form .add_guide_videos_array input.guide_videos_array').last().css('background-color','#D3D3D3');
  disable_next(false);
}

function disable_next(current_step)
{
//current_step?$('#gray-div').css('display','block'):$('#gray-div').css('display','none');
    if (current_step==true)
      {
      $('.button_youtube').attr("disabled", true);
      $('.button_textarea').attr("disabled", true);
      $('.button_text_and_img').attr("disabled", true);
      $('#a-submit-button').attr("disabled", true);
      $('.button_youtube').addClass("dis-button");
      $('.button_textarea').addClass("dis-button");
      $('.button_text_and_img').addClass("dis-button");
      $('#submit-button').addClass("dis-button");
      }
    if (current_step==false)
      {
      $('.button_youtube').attr("disabled", false);
      $('.button_textarea').attr("disabled", false);
      $('.button_text_and_img').attr("disabled", false);
      $('#a-submit-button').attr("disabled", false);
      $('.button_youtube').removeClass("dis-button");
      $('.button_textarea').removeClass("dis-button");
      $('.button_text_and_img').removeClass("dis-button");
      $('#submit-button').removeClass("dis-button");
      }
}
function removeBlock(current_div,number_of_step_to_remove,type_of_block)
{

//if this div with image and text we need to remove the img from images array need to work only on edit guide not on new guid page
var get_url = window.location.href;
if(($(current_div).hasClass('add_another_step'))&&(get_url.indexOf("new-guide-form") == -1))
{
  guide_array['guide_images_array'].splice($(current_div).find('.edit_guide_img').attr('data-id-img-div'),1);
  $('#all_images').val(guide_array['guide_images_array']);
}

// remove the option step between 
$(current_div).next().remove();



 upload_array['type_of_steps'].splice([number_of_step_to_remove],1);
 $(current_div ).remove();
$("#type_of_steps").val(upload_array['type_of_steps']);
//console.log(upload_array['step_number']);
temp_loop--;
upload_array['step_number'] --;
//console.log(upload_array['step_number']);
type_of_block= 'youtube'?disable_next(false):"";

//set the levels names
$.each($('.step_lable'), function (index) {
$('.step_lable')[index].textContent = (index+1)+' שלב';
    })
$.each($('form .remove-block'), function (index) {
$('form .remove-block').eq(index).attr('onclick',"removeBlock($(this).parent(),"+index+"),'"+upload_array['type_of_steps'][index]+"'")
    })



 //console.log($(current_div ).children("label").val());
}



function addStepBetweenButton(current_button)
{
  
  $(current_button).after($('.block-of-between-buttons').last().clone())
  $(current_button).remove();
}


function step_between(current_between)
{
  //console.log(current_between);

    
        if($(current_between).hasClass('button_text_and_img_between'))
            {
                $( ".button_text_and_img" ).trigger( "click" );
                temp_loop_array['text_and_img']++;
                
                $('form .add_another_step').last().appendTo($(current_between).parent());
                
               /* $('form .add-new-step-between').last().insertAfter($(current_between).parent().parent());
                $('.add-new-step-between').each(function(i){
                  $(this).attr('data-between-number',i+1);
                  $(this).attr('data-current-place',i+1);
                })*/

                //to block the resetimages i'm adding a class 
                  $(current_between).parent().find('.add_another_Step input.fileToUpload').addClass('run_reset_images_between');

                // set steps 
                $(current_between).parent().parent().addClass('add_another_step');
                $.each($('.step_lable'), function (index) {
                $('.step_lable')[index].textContent = (index+1)+' שלב';
                    })
                $.each($('form .remove-block'), function (index) {
                $('form .remove-block').eq(index).attr('onclick',"removeBlock($(this).parent(),"+index+"),'"+upload_array['type_of_steps'][index]+"'")
                    })

                    // update the type of step
                    upload_array['type_of_steps'].splice(temp_loop-1,1);
                    upload_array['type_of_steps'].splice($(current_between).parent().parent().attr('data-between-number'),0,'text_and_img');
                    $('#type_of_steps').val(upload_array['type_of_steps']);

                $(current_between).parent().find($('.button_youtube_between')).remove();
                $(current_between).parent().find($('.button_textarea_between')).remove();
                $(current_between).parent().find($('.button_text_and_img_between')).remove();
              //$('form .add-new-step-between').last().remove();
           //     resetImages();


            }
        else if($(current_between).hasClass('button_textarea_between'))
            {
                $( ".button_textarea" ).last().trigger( "click" ); 
              //  temp_loop_array['textarea']++;

/*                setTimeout(function(){
                  $('.start_steps .add_another_textarea').last().appendTo($(current_between).parent());
                 // $('.start_steps .add_another_textarea').last().remove();
              
                
                // set steps 
                $(current_between).parent().parent().addClass('add_another_textarea');
                $.each($('.step_lable'), function (index) {
                $('.step_lable')[index].textContent = (index+1)+' שלב';
                    })
                $.each($('form .remove-block'), function (index) {
                $('form .remove-block').eq(index).attr('onclick',"removeBlock($(this).parent(),"+index+"),'"+upload_array['type_of_steps'][index]+"'")
                    })

                    // update the type of step
                    upload_array['type_of_steps'].splice(temp_loop-1,1);
                    upload_array['type_of_steps'].splice($(current_between).parent().parent().attr('data-between-number'),0,'textarea');
                    $('#type_of_steps').val(upload_array['type_of_steps']);



                  $(current_between).parent().find($('.button_youtube_between')).remove();
                $(current_between).parent().find($('.button_text_and_img_between')).remove();
                $(current_between).parent().find($('.button_textarea_between')).remove();

                }, 5000);*/
            }
        else if($(current_between).hasClass('button_youtube_between'))
            {
            $( ".button_youtube" ).trigger( "click" );
            temp_loop_array['youtube']++;

                $('form .add_guide_videos_array').last().appendTo($(current_between).parent());
               // $('.add_guide_videos_array').last().remove();
                           
                // set steps 
                $(current_between).parent().parent().addClass('add_guide_videos_array');
                $.each($('.step_lable'), function (index) {
                $('.step_lable')[index].textContent = (index+1)+' שלב';
                    })
                $.each($('form .remove-block'), function (index) {
                $('form .remove-block').eq(index).attr('onclick',"removeBlock($(this).parent(),"+index+"),'"+upload_array['type_of_steps'][index]+"'")
                    })

                    // update the type of step
                    upload_array['type_of_steps'].splice(temp_loop-1,1);
                    upload_array['type_of_steps'].splice($(current_between).parent().parent().attr('data-between-number'),0,'youtube');
                    $('#type_of_steps').val(upload_array['type_of_steps']);

                    //remove 3 big buttons
                $(current_between).parent().find($('.button_textarea_between')).remove();
                $(current_between).parent().find($('.button_text_and_img_between')).remove();
                $(current_between).parent().find($('.button_youtube_between')).remove();



             }
$('form').one('change','.run_reset_images_between',function(){  var x= resetImagesBetween();})
        
}



function resetImagesBetween()
{
    var enter_only_ons = 0;
jQuery.each($('form .start_steps').children('.add_another_step'),function(i,val){
    if($(this).find('input.run_reset_images_between').val())
    {
        var temp_this_val =$(this).find('input.run_reset_images_between');
        enter_only_ons =1;
        if(!guide_array['guide_images_array'][0])console.log('xxxxxxxxxxxxxxxxxxxxx');
        
        // get the images path
        var str = guide_array['guide_images_array'][0];
        var str2 = $(temp_this_val).val();
        var regexp = /.*(\/)/gi;
        var regexp2 = /(.*(\\))/gi;
        var matches_array = str.match(regexp);
        var regexp3 = /\..*/gi; 
        var matches_array2 = str2.replace(regexp2,""); 
        var only_extantion = matches_array2.match(regexp3);
        var full_image_path ="images/guides/"+current_images_path+"/"+current_images_path+"_"+($('input.fileToUpload').length-2)+only_extantion;
        matches_array[0]=matches_array[0]+matches_array2;
        //guide_array['guide_images_array'].push(full_image_path);

        //enter image src to images array
         guide_array['guide_images_array'].splice(i+1,0,full_image_path);

         $(temp_this_val).parent().find('label').html('Done');
         $(temp_this_val).css('display','none');
         //$(this).parent().parent().parent().html('Done');
         //send to end of page of the form upload image add the image with last index
          $(temp_this_val).appendTo($('.start_steps'));
          temp_arr[i]=$(temp_this_val).val();
          
    }
// between step need only one element to add so if its enterd exit  
      if(enter_only_ons==1) { return false; } 
      
})
$('#all_images').val(guide_array['guide_images_array']);
// this make new between div that need to remove 
  //$('.add-new-step-between').last().remove();

}

