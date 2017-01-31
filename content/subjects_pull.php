<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$subjects_array=[];
mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, key_name, img, title, sub_title FROM subjects";
$result = $connection->query($sql);
$loop = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $subjects_array['id'][$loop] = $row["id"];
        $subjects_array['key_name'][$loop] = $row["key_name"];
        $subjects_array['img'][$loop] = $row["img"];
        $subjects_array['title'][$loop] = $row["title"];
        $subjects_array['sub_title'][$loop] = $row["sub_title"];
        $loop++;
    }
} else {
    echo "0 results";
}


$connection->close();
$loop2 = 0;
//echo "<script>var top_sub_id =[]</script>";
//echo "<script>var top_sub =[]</script>";
for($loop2=0;$loop2!=$loop;$loop2++) {
    
    echo "<div class='col-md-4'><img src='".$subjects_array['img'][$loop2]."' class='img-responsive' style='min-height:275px'>";
    echo "<h3 style='background:#eee;margin-top:0px;padding:10px;font-weight:900;margin-bottom:0px;padding-bottom:0px;border-top:2px solid #29d846;font-family:open'><strong></strong>".$subjects_array['title'][$loop2]."</h3>";
    echo "<p  style='background:#eee;margin-top:0px;padding:10px'>".$subjects_array['sub_title'][$loop2]."</p>";
    echo "<a href='list-of-guides.php?subject=".$subjects_array['id'][$loop2]."'><button class='btn btn-block' style='background:#29d846;color:#fff'>לצפיה במדריכים</button></a></div>";
 //  echo "<script>top_sub_id[".$loop2."]='".$subjects_array['id'][$loop2]."'</script>";
//   echo "<script>top_sub[".$loop2."]='".$subjects_array['title'][$loop2]."'</script>";
}



?>

