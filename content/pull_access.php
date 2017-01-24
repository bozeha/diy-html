<?php
//  $guide_array_access= [];
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$access_loop =0;
$sql = "SELECT id,access_name ,access_disc ,access_img FROM  accessories ";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $guide_array_access['id'][$access_loop] = $row["id"];
        $guide_array_access['access_name'][$access_loop] = $row["access_name"];
        $guide_array_access['access_disc'][$access_loop] = $row["access_disc"];
        $guide_array_access['access_img'][$access_loop] = $row["access_img"];
        $access_loop++;
    }
}

$connection->close();


$access_loop--;
echo "<div class='access_div'>";
for(;$access_loop!=-1;$access_loop--)
{
    echo "<div class='pull-right' ><span  class='pull-right col-xs-12' data-access-id='".$guide_array_access['id'][$access_loop]."'>";
    echo $guide_array_access['access_name'][$access_loop]."</span>";
    echo "<img width='100px' height='100px' src='".$guide_array_access['access_img'][$access_loop]."'/></div>";
     $guide_array_access['access_disc'][$access_loop];
}

echo "</div>";
?>