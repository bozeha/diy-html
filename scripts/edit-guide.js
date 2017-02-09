

var temp_arr={};
var temp_loop_array = {'text_and_img':0,'textarea':0,'youtube':0}
$(document).ready(function(){
    startEnterVal();
    $('form').on('change','.fileToUpload',function(){resetImages()})
    //resave the new file in the array images
        }
    )
function startEnterVal()
{

$('#guide_title_en').val(guide_array['guide_title_en']);
$('#guide_title').val(guide_array['guide_title']);
$('#guide_sub_title').val(guide_array['guide_subtitle']);
$("#subject_name").val($("#subject_name [subject-user-id="+guide_array['subject']+"]").val());
$("#nick_name").val($("#nick_name [data-user-id="+guide_array['user']+"]").val());
//$("#nick_name").val($("#nick_name option")[guide_array['user']].value);
jQuery.each(guide_array['guide_accessories_array'],function(i,val)
    {
        $('#access [data-user-id='+val+']').addClass('access_select');        
})

jQuery.each(guide_array['type_of_steps_array'],function(i,val)
    {
        if(val=='text_and_img')
            {
            $( ".button_text_and_img" ).trigger( "click" );
                temp_loop_array['text_and_img']++;
            }
        else if(val=='textarea')
            {
                $( ".button_textarea" ).last().trigger( "click" ); 
                temp_loop_array['textarea']++;
    }
        else if(val=='youtube'){
            $( ".button_youtube" ).trigger( "click" );
            temp_loop_array['youtube']++;
        }
        
})

setTimeout(function(){ 
    //need timeout so the textarea iframe we be updated
    // cke_button__source is the button on textarea to convert to html code so we can change the value 
    $(".cke_button__source").trigger( "click" );
    for(var loop=0;loop!=temp_loop_array['textarea'];loop++){
    $('#cke_editor'+(loop+1)+' textarea').val(guide_array['guide_textarea_array'][loop]);
}

for(var loop2=0;loop2!=temp_loop_array['text_and_img'];loop2++){
    $('.one_of_steps')[loop2].value =guide_array['guide_text_array'][loop2];
}
// press agean on cke_button__source so the textarea back to GUI view
    setTimeout(function(){ $(".cke_button__source").trigger( "click" );
}, 100);

//$('form img').first().attr('src',guide_array['guide_images_array'][0]);

jQuery.each(guide_array['guide_images_array'],function(i,val)
    {
$('form .edit_guide_img img')[i].setAttribute('src',guide_array['guide_images_array'][i]);
$('form .fileToUpload')[i].setAttribute('data-id-img-input',i);
$('form .edit_guide_img')[i].setAttribute('data-id-img-div',i);
$('form .edit_guide_img button')[i].setAttribute('onclick','replaceImage('+i+')');
})

$('.fileToUpload').css('display','none');
    //remove the loader 
$('#load_div').css('display','none');
replaceImage(-1);
}, 3000);
}

function replaceImage(currentId)
{
    $("[data-id-img-input="+currentId+"]").css('display','inline-block');
    $("[data-id-img-div="+currentId+"]").css('display','none');
}
function resetImages()
{
jQuery.each($('input.fileToUpload'),function(i,val){
    
    if($(this).val())
    {
        console.log(guide_array['guide_images_array'][i]);
        var str = guide_array['guide_images_array'][i];
        var regexp = /.*(\/)/gi;
        var matches_array = str.match(regexp);
        matches_array[0]=matches_array[0]+$(this).val();
        //console.log(matches_array);
     guide_array['guide_images_array'][i]= matches_array[0];

    }

    temp_arr[i]=$(this).val();


})

}