<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 


$sql = "SELECT id, firstname, lastname, nickname FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='row'><div class='form-group pull-right list_of_options'><label for='exampleSelect1'>משתמש</label>    <select class='form-control' id='nick_name' name='nick_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option data-user-id='".$row["id"]."'data-firstname='".$row["firstname"]."'data-lastname='".$row["lastname"]."' >".$row["nickname"]."</option>";
    }
    echo "</select></div>";
} else {
    echo "0 results";
}



$connection->close();
?>