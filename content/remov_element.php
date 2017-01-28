<?php
include '../settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_POST['object_type'])) {
    $object_type = $_POST['object_type'];
}else {
}
if(isset($_POST['id_numbers'])) {
    $id_number = $_POST['id_numbers'];
    //echo $id_number[];
    $id_number_string =implode(',',$id_number);
    $sql = "DELETE from ".$object_type." WHERE id IN (".$id_number_string.")";
    $result = $connection->query($sql);
    
}else {
    
}

?>