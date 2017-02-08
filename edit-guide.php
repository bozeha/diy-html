<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$guide_array=[];
$temp_temp = [];
if(isset($_GET['guide'])) {
    $current_guide = $_GET['guide'];
}else {
    //$test = '';
}
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, subject, user, guide_key, guide_title, guide_title_en,guide_subtitle, guide_accessories_array,guide_text_array ,guide_images_array, guide_videos_array, type_of_steps_array, guide_textarea_array FROM guides WHERE id = ".$current_guide;
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       // echo "var guide_array={}";
        //echo "console.log('sss')";
        echo "<script>var guide_array={}</script>";
        $guide_array['id'] = $row["id"];
        echo "<script>guide_array['id']=".$guide_array['id']."</script>";
        $guide_array['subject'] = $row["subject"];
        echo "<script>guide_array['subject']=".$guide_array['subject']."</script>";
        $guide_array['user'] = $row["user"];
        echo "<script>guide_array['user']=".$guide_array['user']."</script>";
        $guide_array['guide_key'] = $row["guide_key"];
        echo "<script>guide_array['guide_key']='".$guide_array['guide_key']."'</script>";
        $guide_array['guide_title'] = $row["guide_title"];
        echo "<script>guide_array['guide_title']='".$guide_array['guide_title']."'</script>";
        $guide_array['guide_title_en'] = $row["guide_title_en"];
        echo "<script>guide_array['guide_title_en']='".$guide_array['guide_title_en']."'</script>";
        $guide_array['guide_subtitle'] = $row["guide_subtitle"];
        echo "<script>guide_array['guide_subtitle']='".$guide_array['guide_subtitle']."'</script>";
        
        $guide_array['guide_accessories_array'] = $row["guide_accessories_array"];
        $guide_array['guide_accessories_array'] = str_replace(",","\",\"",$guide_array['guide_accessories_array']);
         echo "<script>guide_array['guide_accessories_array2']=JSON.parse('".$guide_array['guide_accessories_array']."')</script>";
         echo "<script>guide_array['guide_accessories_array']=guide_array['guide_accessories_array2'][0]</script>";
        $string2json =  json_decode($guide_array['guide_accessories_array'],TRUE);
        $guide_array['guide_accessories_array']=$string2json;
         //echo "<script>guide_array['guide_accessories_array']='".$guide_array['guide_accessories_array'][0]."'</script>";

        
        $guide_array['guide_text_array'] = $row["guide_text_array"];
        echo "<script>guide_array['guide_text_array']=JSON.parse('".$guide_array['guide_text_array']."')</script>";
        $string2json =  json_decode($guide_array['guide_text_array'],TRUE);
        $guide_array['guide_text_array']=$string2json;
        
        $guide_array['guide_images_array'] = $row["guide_images_array"];
        echo "<script>guide_array['guide_images_array']=JSON.parse('".$guide_array['guide_images_array']."')</script>";
         //echo "<script>guide_array['guide_images_array']=guide_array['guide_images_array2']</script>";
        $string2json =  json_decode($guide_array['guide_images_array'],TRUE);
        $guide_array['guide_images_array']=$string2json;
        
        
        if (is_null($row["guide_videos_array"]))
        {
        $guide_array['guide_videos_array'] = $row["guide_videos_array"];
        echo "<script>guide_array['guide_videos_array']=JSON.parse('".$guide_array['guide_videos_array']."')</script>";
        //echo "<script>guide_array['guide_videos_array']=guide_array['guide_videos_array2']</script>";
        $string2json =  json_decode($guide_array['guide_videos_array'],TRUE);
        $guide_array['guide_videos_array']=$string2json;
        }
        else{$guide_array['guide_videos_array']='';}
        
        
        $guide_array['guide_textarea_array'] = $row["guide_textarea_array"];
        $string2json =  base64_decode($guide_array['guide_textarea_array']);
        echo "<script>guide_array['guide_textarea_array']=".$string2json."</script>";
        $string2json2 = json_decode($string2json,TRUE);
        $guide_array['guide_textarea_array']=$string2json2;
       
        
        
        $guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
        echo "<script>guide_array['type_of_steps_array']=".$guide_array['type_of_steps_array']."</script>";
        $string2json =  json_decode($guide_array['type_of_steps_array'],TRUE);
        $guide_array['type_of_steps_array']=$string2json;
        

    }
} else {
    echo "0 results";
}

// start pull accessores 
//$access_loop =0;
$sql = "SELECT id,access_name ,access_disc ,access_img FROM  accessories ";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo $row["id"]."--";
        $guide_array_access['id'][$row["id"]] = $row["id"];
        $guide_array_access['access_name'][$row["id"]] = $row["access_name"];
        $guide_array_access['access_disc'][$row["id"]] = $row["access_disc"];
        $guide_array_access['access_img'][$row["id"]] = $row["access_img"];
        //$access_loop++;
    }
}



$connection->close();



echo "<div class='row' ><div class='co-xs-12 top_main_guide'>";
echo "<div class='col-xs-12 top_main_guide_img' style='background-image:url(".$guide_array['guide_images_array'][0].")'>";
echo "</div><div class='col-xs-12'>";
echo "<h1>".$guide_array['guide_title']."</h1>";
echo "</div><div class='col-xs-12'>";
echo "<h2>".$guide_array['guide_subtitle']."</h2>";
echo "</div>";
echo "</div></div>";
//echo $guide_array['type_of_steps_array'];

echo "<div class'row pull_access_div' style='display:inline-block' >";
echo "<h3>רשימת המוצרים שצריך עבור מדריך זה </h3>";



//////////////////

//$access_loop--;
if($guide_array['guide_accessories_array'][0][0]!="")
{
    echo "<div class='access_div'>";
    //for(;$access_loop!=-1;$access_loop--)
    foreach($guide_array['guide_accessories_array'][0] as $key=>$value)
    {

            $current_access = $guide_array['guide_accessories_array'][0][$key];
        echo "<div class='pull-right' ><span  class='pull-right col-xs-12' data-access-id='".$guide_array_access['id'][$current_access]."'>";
        echo $guide_array_access['access_name'][$current_access]."</span>";
        echo "<img data-toggle='tooltip' data-placement='bottom' title='".$guide_array_access['access_disc'][$current_access]."' width='100px' height='100px' src='".$guide_array_access['access_img'][$current_access]."'/></div>";
        
    }
    echo "</div>";
}


/////////////////
/*include '/content/pull_access.php'; */
echo "</div>";



$array_of_loops['main']= 0;
$array_of_loops['text_img']= 0;
$array_of_loops['textarea']= 0;
$array_of_loops['youtube']= 0;
foreach($guide_array['type_of_steps_array'] as $val)
{
    if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="text_and_img")
    {
        echo "<div class='row' ><div class='guide-box co-xs-12 col-md-6 col-centered'>";
        echo "<span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span>";
        
        if($guide_array['guide_images_array'][$array_of_loops['text_img']+1])
        {
            echo "<div class='col-md-6'><img  onclick='fullSizeImage(this)' src='".$guide_array['guide_images_array'][$array_of_loops['text_img']+1]."'/></div>";
            echo "<div class='col-md-6'>".$guide_array['guide_text_array'][$array_of_loops['text_img']]."</div>";
        }
        else echo "<div class='col-md-12'>".$guide_array['guide_text_array'][$array_of_loops['text_img']]."</div>";
            //print $val;
        
        echo "</div>";
        echo "</div>";
        $array_of_loops['text_img']++;
    }
    
    else if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="textarea")
    {
        echo "<div class='row' ><div class='guide-box co-xs-12 col-md-6 col-centered'>";
        echo "<span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span>";
        
        echo "<div class='col-md-12'>".$guide_array['guide_textarea_array'][$array_of_loops['textarea']]."</div>";
        echo "</div>";
        echo "</div>";
        $array_of_loops['textarea']++;
    }
    else if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="youtube")
    {
        echo "<div class='row' ><div class='guide-box co-xs-12 col-md-6 col-centered'>";
        echo "<span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span>";
        echo "<div class='col-md-12'><iframe width='100%' height='500px' src='https://www.youtube.com/embed/".$guide_array['guide_videos_array'][$array_of_loops['youtube']]."' frameborder='0' allowfullscreen></iframe></div>";
        echo "</div>";
        echo "</div>";
        $array_of_loops['youtube']++;
    }
    $array_of_loops['main']++;
}

$guide_array['guide_videos_array']

?>


XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

<!DOCTYPE html>
<html lang="en">

<head>

    <script src='scripts/upload_guide.js'></script>
    <!-- script for text area editor  -->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/config.js"></script>
    <script src='scripts/edit-guide.js'></script>

    <title>Document</title>
</head>

<body>

  
    <div class="container">
      <h1 class="display-3">הוספת מדריך</h1>
      
    <?php
if(isset($_GET['mess'])) {
  echo "<h3 class='text-primary'>".$current_mess = $_GET['mess']."</h3>";
}
?>
      <form action="content/guide_push.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="subject_number" name="subject_number" />
        <input type="hidden" id="user_number" name="user_number" />
        <input type="hidden" id="access_array" name="access_array[]" />
        <input type="hidden" id="type_of_steps" name="type_of_steps[]" />


        <div class="form-group">
          <label for="exampleInputEmail1">כותרת באנגלית למדריך</label>
          <input type="text" class="form-control" name="guide_title_en" id="guide_title_en" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">כותרת למדריך</label>
          <input type="text" class="form-control" name="guide_title" id="guide_title" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">תמונה ראשית למדריך</label>
          <input type="file" name="fileToUpload[]" id="fileToUpload" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">תת כותרת למדריך</label>
          <input type="text" class="form-control" name="guide_sub_title" id="guide_sub_title" required>
        </div>


        <?php
include '/settings/connect.php';
include '/settings/pull_access.php';
include '/settings/pull_users.php';
include '/settings/pull_subjects.php';
?>


          <span class='start_steps'>


</span>
          <div class="row youtube_buttons">
            <!--<div id="gray-div">
              </div>-->
            <div class='col-xs-6 pull-right'>
              <button type="button" class="btn-lg button_youtube">צור שלב של סרטון יוטיוב</button>
              <button type="button" class="btn-lg button_textarea">קטע טקסט</button>
              <button type="button" class="btn-lg button_text_and_img">צור שלב של טקסט ותמונה</button>
            </div>

            <div class='col-xs-6'>
              <button type="submit" class="btn btn-primary pull-right">אשר ושמור מדריך</button>
            </div>
            
          </div>
      </form>

    </div>





    <div style='display:none'>
      <div class="add_another_step">
<button class="btn btn-danger" onclick="$(this).parent().remove()">x</button>
        <div class="form-group">
          <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
          <input type="text" class="form-control one_of_steps" name="step[]">
        </div>


        <div class="form-group">
          <label for="exampleInputFile">הוסף תמונה</label>
          <input type="file" name="fileToUpload[]" id="fileToUpload">
          <!--small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small-->
        </div>
      </div>

      <div class="add_another_textarea">
        <button type='button' class="btn btn-danger" onclick="$(this).parent().remove()">x</button>
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <textarea name="editor1[]" id="editor1" rows="10" cols="80">
        </textarea>
      </div>


      <div class="add_guide_videos_array">
        <button class="btn btn-danger" onclick="$(this).parent().remove();disable_next(false)">x</button>
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <div class="form-group">
          <div class="row">
            <label for="exampleInputEmail1">הוסף סירטון יוטיוב</label>
            <input type="text" class="col-xs-6 pull-right guide_videos_array" name="guide_videos_array_temp">
            <button type="button" class="col-xs-2 btn-md btn btn-primary pull-right" onclick='youtube_options()'>אשר</button>
          </div>

          <div class="btn-group row" data-toggle="buttons">

            <table id='youtube_table'>
              <tr>
                <td>
                  הפעלת הסרטון אוטומתי
                </td>
                <td>
                  הפעלת את הסרטון בלולאה
                </td>
                <td>
                  אפשרות שליטה על הסרטון
                </td>
                <td>
                  הצג סרטונים קשורים בסוף הקטע
                </td>
              </tr>

              <tr>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='auto' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='loop' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='controler' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='rel' autocomplete="off">
                  </label>
                </td>
              </tr>
              <input type="hidden" id="guide_videos_array_finel" name="guide_videos_array[]" />

            </table>
          </div>


        </div>
      </div>


    </div>
</body>

</html>