
<?php

if(isset($_POST['uname'])) {
    $user['uname'] = $_POST['uname'];
    //   echo $user['uname'];
}
if(isset($_POST['pass'])) {
    $user['pass'] = $_POST['pass'];
    // echo $user['pass'];
}

include '../settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
//echo $user['uname'];
$sql = "SELECT firstname ,password FROM users  WHERE nickname = '".$user['uname']."'";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo $row["password"];
        if($row["password"]== $user['pass']){
            
            
            echo 'sssssssssssss';
            //header('Location: http://www.example.com/');
            echo "<form id='paypalpayment' name='paypalpayment' action='../index.php' method='post'>";
            echo "<input name='uname' type='hidden'  value='yyyy' class='form-control'>";
            echo "<input name='status' type='hidden' value='true' class='form-control'>";
            echo "</form>";
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
            echo "<script type='text/javascript'>$(document).ready(function(){ alert('xxx');$('#paypalpayment').submit()})</script>";
           // exit;
        }
    }
} else {
    echo "0 results";
}
$connection->close();



?>