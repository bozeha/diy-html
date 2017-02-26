<?php
if(isset($_GET['msg'])) {
    $message = $_GET['msg'];

    echo "<h3>".$message."</h3>";
}




include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$guides_array=[];
if(isset($_GET['subject'])) {
    $current_subject = $_GET['subject'];
}else {
    //$test = '';
    $current_subject = 'all';
}
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($current_subject=='all'){$sql = "SELECT id, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides";}
else {$sql = "SELECT id, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides WHERE subject = ".$current_subject;}
$result = $connection->query($sql);
$loop = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $guides_array['id'][$loop] = $row["id"];
        $guides_array['subject'][$loop] = $row["subject"];
        $guides_array['user'][$loop] = $row["user"];
        $guides_array['guide_key'][$loop] = $row["guide_key"];
        $guides_array['guide_title'][$loop] = $row["guide_title"];
        $guides_array['guide_subtitle'][$loop] = $row["guide_subtitle"];
        $guides_array['guide_images_array'][$loop] = $row["guide_images_array"];
        $string2json =  json_decode($guides_array['guide_images_array'][$loop],TRUE);
        $guides_array['guide_images_array_fix'][$loop]=$string2json;
        $guides_array['guide_images_array_fix'][$loop] = explode(",",$guides_array['guide_images_array_fix'][$loop][0]);


        $loop++;
    }
} else {
    echo "<div cloass='' style='width:100px;height:100px;float:right;cursor: pointer;color:blue' onclick='window.history.back()'>כעת אין מדריכים בקטגוריה לחץ כאן לחזור אחורה</div>";
}

        //$guide_array['guide_images_array'] = $row["guide_images_array"];
        //$guide_array['guide_images_array']= $guide_array['guide_images_array'][0];
        //echo $guide_array['guide_images_array'][0];

$connection->close();
$loop2 = 0;

if ($current_subject=='all')
{
    
    for($loop2=0;$loop2!=$loop;$loop2++) {
        
        echo "<div data-guide-selected='false' data-guide-id='".$guides_array['id'][$loop2]."' class='col-xs-6 selected-guide'><a href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><button class='' style='background:#29d846;color:#fff'>לצפיה במדריך</button></a><button onclick='markForDelete(this)'>סמן מדריך</button><button onclick=window.open('dashboard.php?dash=edit-guide&guide=".$guides_array['id'][$loop2]."')>ערוך מדריך</button><img src='".$guides_array['guide_images_array_fix'][$loop2][0]."' class='img-responsive  pull-left' style='max-width:177px;height:100px'>";
        echo "<h5 style='margin-top:0px;padding:10px;font-weight:900;margin-bottom:0px;padding-bottom:0px;border-top:2px solid #29d846;font-family:open'><strong></strong>".$guides_array['guide_title'][$loop2]."</h5>";
        //echo "<p  style='background:#eee;margin-top:0px;padding:10px'>".$guides_array['guide_subtitle'][$loop2]."</p>";
        echo "</div>";
    } 
    echo "<button class='btn btn-danger' onclick=elements_to_remove('guides')>מחק את המדריכים המסומנים</button>";
}
else
{
    for($loop2=0;$loop2!=$loop;$loop2++) {
        echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><div class='hovereffect'><img src='".$guides_array['guide_images_array_fix'][$loop2][0]."' class='img-responsive'>";
        echo "<div class='overlay'><h2 >".$guides_array['guide_title'][$loop2]."</h2>";
        echo "<a class='info' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><p>".$guides_array['guide_subtitle'][$loop2]."</p>";
        echo "</a></div></div></div>";
    }
}



?>