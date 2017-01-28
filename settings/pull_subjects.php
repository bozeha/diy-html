<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 


$sql = "SELECT id, title FROM subjects";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='form-group list_of_options'><label for='exampleSelect1'>נושא המדריך</label>    <select class='form-control' id='subject_name' name='subject_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option subject-user-id='".$row["id"]."'>".$row["title"]."</option>";
    }
    echo "</select></div></div>";
} else {
    echo "0 results";
}




$connection->close();
?>