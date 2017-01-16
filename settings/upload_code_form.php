<?php
$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 


// accessories


$sql = "SELECT id, access_name, access_disc, access_img FROM accessories";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='access_cont'  ><label for='exampleSelect1'>כלים ומוצרים שחייב כדי ליצור את המוצר</label>    <div  id='access' name='access'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <div class='accessories' data-user-id='".$row["id"]."'data-disc='".$row["access_disc"]."'><label>".$row["access_name"]."</label><img style='float:left;width:100px;height:100px' src='".$row["access_img"]."'/></div>";
    }
    echo "</div></div>";
} else {
    echo "0 results";
}

// end accessories




//users

$sql = "SELECT id, firstname, lastname, nickname FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='form-group pull-right list_of_options'><label for='exampleSelect1'>משתמש</label>    <select class='form-control' id='nick_name' name='nick_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option data-user-id='".$row["id"]."'data-firstname='".$row["firstname"]."'data-lastname='".$row["lastname"]."' >".$row["nickname"]."</option>";
    }
    echo "</select></div>";
} else {
    echo "0 results";
}




//end users







$sql = "SELECT id, title FROM subjects";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='form-group list_of_options'><label for='exampleSelect1'>נושא המדריך</label>    <select class='form-control' id='subject_name' name='subject_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option subject-user-id='".$row["id"]."'>".$row["title"]."</option>";
    }
    echo "</select></div>";
} else {
    echo "0 results";
}




$connection->close();
?>