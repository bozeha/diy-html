        var temp_loop_array = {'text_and_img':0,'textarea':0,'youtube':0}


$(document).ready(function(){startEnterVal()})
function startEnterVal()
{

$('#guide_title_en').val(guide_array['guide_title_en']);
$('#guide_title').val(guide_array['guide_title']);
$('#guide_sub_title').val(guide_array['guide_subtitle']);
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
            //    alert(guide_array['guide_textarea_array'][temp_loop_array['textarea']]);
//                $( ".button_textarea" ).trigger( "click" );
        //alert(temp_loop_array['textarea']);
                    $( ".button_textarea" ).last().trigger( "click" ); 
                temp_loop_array['textarea']++;
    }
        else if(val=='youtube'){
            $( ".button_youtube" ).trigger( "click" );
            temp_loop_array['youtube']++;
        }
        
})

setTimeout(function(){ 
    $(".cke_button__source").trigger( "click" );
   // alert(guide_array['guide_textarea_array'][1]); 
    for(var loop=0;loop!=temp_loop_array['textarea'];loop++){
      //  alert('ss');
    $('#cke_editor'+(loop+1)+' textarea').val(guide_array['guide_textarea_array'][loop]);
}
    setTimeout(function(){ $(".cke_button__source").trigger( "click" );}, 100);
}, 1000);

//.done(function(){$(".cke_button__source").last().trigger( "click" )})


}




                    //$( ".cke_button__source" ).last().trigger( "click" );
//                $('#cke_editor1 textarea').val(guide_array['guide_textarea_array'][0]);

