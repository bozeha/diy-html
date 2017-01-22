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
    while($row = $result->fetch_assoc()) {;
        //$row = mysql_fetch_row($result);
        $guide_array['id'] = $row["id"];
        $guide_array['subject'] = $row["subject"];
        $guide_array['user'] = $row["user"];
        $guide_array['guide_key'] = $row["guide_key"];
        $guide_array['guide_title'] = $row["guide_title"];
        $guide_array['guide_title_en'] = $row["guide_title_en"];
        $guide_array['guide_subtitle'] = $row["guide_subtitle"];
        
        $guide_array['guide_accessories_array'] = $row["guide_accessories_array"];
        $string2json =  json_decode($guide_array['guide_accessories_array'],TRUE);
        $guide_array['guide_accessories_array']=$string2json;
        
        $guide_array['guide_text_array'] = $row["guide_text_array"];
        $string2json =  json_decode($guide_array['guide_text_array'],TRUE);
        $guide_array['guide_text_array']=$string2json;
        
        $guide_array['guide_images_array'] = $row["guide_images_array"];
        $string2json =  json_decode($guide_array['guide_images_array'],TRUE);
        $guide_array['guide_images_array']=$string2json;
        
        $guide_array['guide_videos_array'] = $row["guide_videos_array"];
        $string2json =  json_decode($guide_array['guide_videos_array'],TRUE);
        $guide_array['guide_videos_array']=$string2json;
        
        
        $guide_array['guide_textarea_array'] = $row["guide_textarea_array"];
        $string2json =  base64_decode($guide_array['guide_textarea_array']);
        $string2json2 = json_decode($string2json,TRUE);
        $guide_array['guide_textarea_array']=$string2json2;
       // echo $guide_array['guide_textarea_array'][0];
      //  echo $guide_array['guide_textarea_array'][1];
        
        
        
        $guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
        $string2json =  json_decode($guide_array['type_of_steps_array'],TRUE);
        $guide_array['type_of_steps_array']=$string2json;
        
    }
} else {
    echo "0 results";
}


$connection->close();

//$loop=0;

echo "<div class='row' ><div class='co-xs-12 top_main_guide'>";
echo "<div class='col-xs-12 top_main_guide_img' style='background-image:url(".$guide_array['guide_images_array'][0].")'>";
echo "</div><div class='col-xs-12'>";
echo "<h1>".$guide_array['guide_title']."</h1>";
echo "</div><div class='col-xs-12'>";
echo "<h2>".$guide_array['guide_subtitle']."</h2>";
echo "</div>";
echo "</div></div>";
//echo $guide_array['type_of_steps_array'];


$array_of_loops['main']= 0;
$array_of_loops['text_img']= 0;
$array_of_loops['textarea']= 0;
$array_of_loops['video']= 0;
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
    $array_of_loops['main']++;
}

$guide_array['guide_videos_array']








?>