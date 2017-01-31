
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
            // $_SERVER['HTTP_REFERER'] --> this function get the previous url
            echo "<form id='paypalpayment' name='paypalpayment' action='".$_SERVER['HTTP_REFERER']."' method='post'>";
            echo "<input name='uname' type='hidden'  value='".$user['uname']."' class='form-control'>";
            echo "<input name='status' type='hidden' value='true' class='form-control'>";
            echo "<input name='mess' type='hidden' value='התחברתה בהצלחה' class='form-control'>";
            echo "</form>";
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
            echo "<script type='text/javascript'>$(document).ready(function(){ $('#paypalpayment').submit()})</script>";
        }
    }
} else {
    // $_SERVER['HTTP_REFERER'] --> this function get the previous url
      echo "<form id='paypalpayment' name='paypalpayment' action='".$_SERVER['HTTP_REFERER']."' method='post'>";
            echo "<input name='status' type='hidden' value='false' class='form-control'>";
            echo "<input name='mess' type='hidden' value='שם משתמש או סיסמא שגויה' class='form-control'>";
            echo "</form>";
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
            echo "<script type='text/javascript'>$(document).ready(function(){ $('#paypalpayment').submit()})</script>";



}
$connection->close();



?>