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

$sql = "SELECT id, subject, user, guide_key, guide_title, guide_title_en,guide_subtitle, guide_accessories_array,guide_text_array ,guide_images_array, guide_videos_array, type_of_steps_array FROM guides WHERE id = ".$current_guide;
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
        
        /*$guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
        $string2json =  json_decode($guide_array['type_of_steps_array'],TRUE);
        $guide_array['type_of_steps_array']=$string2json[0];
        //$guide_array['type_of_steps_array']=json_decode($guide_array['type_of_steps_array'][0],TRUE);
        $temp_temp[] = json_decode($guide_array['type_of_steps_array'],TRUE);*/
        
        $guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
        $string2json =  json_decode($guide_array['type_of_steps_array'],TRUE);
        $guide_array['type_of_steps_array']=$string2json;
        
    }
} else {
    echo "0 results";
}


$connection->close();

$loop=0;

echo "<div class='row' ><div class='co-xs-12 top_main_guide'>";
echo "<div class='col-xs-12 top_main_guide_img' style='background-image:url(".$guide_array['guide_images_array'][0].")'>";
echo "</div><div class='col-xs-12'>";
echo "<h1>".$guide_array['guide_title']."</h1>";
echo "</div><div class='col-xs-12'>";
echo "<h2>".$guide_array['guide_subtitle']."</h2>";
echo "</div>";
echo "</div></div>";
//echo $guide_array['type_of_steps_array'];
foreach($guide_array['type_of_steps_array'] as $val)
{
    echo "<div class='row' ><div class='guide-box co-xs-12 col-md-6 col-centered'>";
    echo "<span class='step_number'>".($loop+1)."<span id='triangle-right'></span></span>";
    if($guide_array['guide_images_array'][$loop+1])
    {
        echo "<div class='col-md-6'><img  onclick='fullSizeImage(this)' src='".$guide_array['guide_images_array'][$loop+1]."'/></div>";
    echo "<div class='col-md-6'>".$guide_array['guide_text_array'][$loop]."</div>";
    }
    else echo "<div class='col-md-12'>".$guide_array['guide_text_array'][$loop]."</div>";
    //print $val;
    
    echo "</div>";
    echo "</div>";
    $loop++;
}

$guide_array['guide_videos_array']








?>