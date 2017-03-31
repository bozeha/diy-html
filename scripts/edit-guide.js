

var temp_arr={};
var current_images_path = guide_array['guide_key'];
var temp_loop_array = {'text_and_img':0,'textarea':0,'youtube':0}
$(document).ready(function(){
    startEnterVal();
    $('form').on('change','.fileToUpload:not(.run_reset_images_between)',function(){resetImages()})
    $('#all_images').val(guide_array['guide_images_array']);// add all images to array input
    $('#guide_id').val(guide_array['guide_id']);

     $('#user_number').val(guide_array['user']);
     //$('#user_number').val(upload_array['user_number']);
      $('#subject_number').val(guide_array['subject']);
      //$('#subject_number').val(upload_array['subject_number']);

    //resave the new file in the array images
//if we chage the en title the guide key will chage and the file names path will be change
$('form').on('change','#guide_title_en',function(){
    
    //replace(/\+/g, ' ');
    current_images_path = $('#guide_title_en').val().replace(/ /g,"_").toLowerCase();
    resetImages();
    
    
})

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
        //$('#access [data-user-id='+val+']').addClass('access_select');        
        $('#access [data-user-id='+val+']').trigger( "click" );
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
    $('.add_another_textarea').eq(loop).find('textarea').val(guide_array['guide_textarea_array'][loop]);
    //console.log(guide_array['guide_textarea_array'][0]+"ssssssssss");
}

for(var loop2=0;loop2!=temp_loop_array['text_and_img'];loop2++){
    var temp_replace_ascii =asciiToChar(guide_array['guide_text_array'][loop2]);
    //console.log(temp_replace_ascii);
    $('.one_of_steps')[loop2].value =temp_replace_ascii ;
    
}
// press agean on cke_button__source so the textarea back to GUI view
    setTimeout(function(){ $(".cke_button__source").trigger( "click" );
}, 100);

if(guide_array['guide_images_array'][0])
{
   
    jQuery.each(guide_array['guide_images_array'],function(i,val)
        {
    $('.edit_guide_img img')[i].setAttribute('src',guide_array['guide_images_array'][i]);
        $('.fileToUpload')[i].setAttribute('data-id-img-input',i);
        $('.edit_guide_img')[i].setAttribute('data-id-img-div',i);
        $('.edit_guide_img button')[i].setAttribute('onclick','replaceImage('+i+')');
    })
}

////start add values to youtube blocks
if((guide_array['guide_videos_array']!="")&&(guide_array['guide_videos_array']!=null))
{
jQuery.each(guide_array['guide_videos_array'],function(i,val)
    {
      
        $('.guide_videos_array').eq(i).parent().append("<div class='col-md-12'><iframe width='100%' height='500px' src='https://www.youtube.com/embed/"+guide_array['guide_videos_array'][i]+"' frameborder='0' allowfullscreen></iframe></div>");

            var str3 = guide_array['guide_videos_array'][i];
                var regexp3 = /.+?(?=\?)/gi;
                var regexp4 = new RegExp("autoplay=1");
                var regexp5 = new RegExp("loop=1");
                var regexp6 = new RegExp("controls=1");
                var regexp7 = new RegExp("rel=1");

        regexp4.test(guide_array['guide_videos_array'][i])?$(".youtube_btn #auto").eq(i).trigger( "click" ):"";
        regexp5.test(guide_array['guide_videos_array'][i])?$(".youtube_btn #loop").eq(i).trigger( "click" ):"";
        regexp6.test(guide_array['guide_videos_array'][i])?$(".youtube_btn #controler").eq(i).trigger( "click" ):"";
        regexp7.test(guide_array['guide_videos_array'][i])?$(".youtube_btn #rel").eq(i).trigger( "click" ):"";

        var main_youtube_url = str3.match(regexp3);

        $('.guide_videos_array').eq(i).val("https://www.youtube.com/watch?v="+main_youtube_url);
        $('.guide_videos_array_finel').eq(i).val(str3);
        

      //  youtube_options();

    })
    disable_next(false);
}



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
        if(!guide_array['guide_images_array'][0])console.log('xxxxxxxxxxxxxxxxxxxxx');
        
        // get the images path
        var str = guide_array['guide_images_array'][0];
        var str2 = $(this).val();
        var regexp = /.*(\/)/gi;
        var regexp2 = /(.*(\\))/gi;
        var matches_array = str.match(regexp);
        var regexp3 = /\..*/gi; 
        var matches_array2 = str2.replace(regexp2,""); 
        var only_extantion = matches_array2.match(regexp3);
        var full_image_path ="images/guides/"+current_images_path+"/"+current_images_path+"_"+i+only_extantion;
        matches_array[0]=matches_array[0]+matches_array2;
        //console.log(full_image_path);
        guide_array['guide_images_array'][i]= full_image_path;
    }
    temp_arr[i]=$(this).val();
})
$('#all_images').val(guide_array['guide_images_array']);
}

function asciiToChar(get_string)
{


get_string = get_string.replace(new RegExp("&#41;", "g"),")");
get_string = get_string.replace(new RegExp("&#40;", "g"),"(");
get_string = get_string.replace(new RegExp("&#39;", "g"),"'");
get_string = get_string.replace(new RegExp("&#34;", "g"),"\"");
get_string = get_string.replace(new RegExp("&#44;", "g"),",");
get_string = get_string.replace(new RegExp("&#91;", "g"),"[");
get_string = get_string.replace(new RegExp("&#93;", "g"),"]");
get_string = get_string.replace(new RegExp("&#92;", "g"),"\\");
get_string = get_string.replace(new RegExp("&#47;", "g"),"/");
return get_string;








}