
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
for($loop2=0;$loop2!=$loop;$loop2++) {
    


    echo "<figure class='snip1570 col-lg-3 col-md-4 col-sm-6 col-xs-12'><img src='".$subjects_array['img'][$loop2]."'  alt='sample88' /><i class='ion-android-arrow-forward'></i>";
    echo "<a href='list-of-guides.php?subject=".$subjects_array['id'][$loop2]."'><h3>".$subjects_array['title'][$loop2]."</h3><h4>".$subjects_array['sub_title'][$loop2]."</h4></a>";
    echo "</figure>";
 
}



?>

