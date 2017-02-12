
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
        echo "<script>var guide_array={}</script>";
         echo "<script>guide_array['guide_id']='".$current_guide."'</script>";
        $guide_array['id'] = $row["id"];
        echo "<script>guide_array['id']=".$guide_array['id']."</script>";
        $guide_array['subject'] = $row["subject"];
        echo "<script>guide_array['subject']=".$guide_array['subject']."</script>";
        if($row["user"]!= "")
        {
        //  echo 'ssssssssssssssssssssssssssssssssssssss';
        $guide_array['user'] = $row["user"];
        echo "<script>guide_array['user']=".$guide_array['user']."</script>";
        }
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
         

        
        $guide_array['guide_text_array'] = $row["guide_text_array"];
        echo "<script>guide_array['guide_text_array']=JSON.parse('".$guide_array['guide_text_array']."')</script>";
        $string2json =  json_decode($guide_array['guide_text_array'],TRUE);
        $guide_array['guide_text_array']=$string2json;
        
        $guide_array['guide_images_array'] = $row["guide_images_array"];
        echo "<script>guide_array['guide_images_array']=JSON.parse('".$guide_array['guide_images_array']."')</script>";    
        $string2json =  json_decode($guide_array['guide_images_array'],TRUE);
        $guide_array['guide_images_array']=$string2json;
        
        
        if (!is_null($row["guide_videos_array"]))
        {
        $guide_array['guide_videos_array'] = $row["guide_videos_array"];
        echo "<script>guide_array['guide_videos_array']=JSON.parse('".$guide_array['guide_videos_array']."')</script>";
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

$sql = "SELECT id,access_name ,access_disc ,access_img FROM  accessories ";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $guide_array_access['id'][$row["id"]] = $row["id"];
        $guide_array_access['access_name'][$row["id"]] = $row["access_name"];
        $guide_array_access['access_disc'][$row["id"]] = $row["access_disc"];
        $guide_array_access['access_img'][$row["id"]] = $row["access_img"];
    }
}



$connection->close();


?>


XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

<!DOCTYPE html>
<html lang="en">

<head>
<script>$('#load_div').css('display','inline-block');</script>
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
        <input type="hidden" id="guide_id" name="guide_id" />
        <input type="hidden" id="all_images" name="all_images[]" />


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
          <input type="file" data-id-img-input=0 name="fileToUpload[]" id="fileToUpload" class='fileToUpload' >
          <div data-id-img-div=0 class='edit_guide_img'><img onclick='fullSizeImage(this)' src=""/>
            <button type='button' onclick='replaceImage(0)'>x</button>
          </div>
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
<button class="btn btn-danger" onclick="">x</button>
        <div class="form-group">
          <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
          <input type="text" class="form-control one_of_steps" name="step[]">
        </div>


        <div class="form-group">
          <label for="exampleInputFile">החלף תמונה</label>
          <input type="file"  data-id-img-input=-1 name="fileToUpload[]" class='fileToUpload' id="fileToUpload">
          <div data-id-img-div=-1 class='edit_guide_img'><img onclick='fullSizeImage(this)' src=""/>
            <button type='button' onclick='replaceImage(-1)'>x</button>
          </div>
        </div>
      </div>

      <div class="add_another_textarea">
        <button type='button' class="btn btn-danger" onclick="">x</button>
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <textarea name="editor1[]" id="editor1" rows="10" cols="80">
        </textarea>
      </div>


      <div class="add_guide_videos_array">
        <button type='button' class="btn btn-danger" onclick="">x</button>
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