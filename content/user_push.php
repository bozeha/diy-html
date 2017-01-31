

<?php
include '../settings/connect.php';

if (isset($_POST['user_first_name']))
{
    $upload_array_access ['user_first_name'] = $_POST['user_first_name'];
}
if (isset($_POST['user_last_name']))
{
    $upload_array_access ['user_last_name'] = $_POST['user_last_name'];
}
if (isset($_POST['user_nick_name']))
{
    $upload_array_access ['user_nick_name'] = $_POST['user_nick_name'];
}
if (isset($_POST['user_password']))
{
    $upload_array_access ['user_password'] = $_POST['user_password'];
}
if (isset($_POST['user_type']))
{
    $upload_array_access ['user_type'] = $_POST['user_type'];
}
if (isset($_POST['user_email']))
{
    $upload_array_access ['user_email'] = $_POST['user_email'];
}
if (isset($_POST['user_country']))
{
    $upload_array_access ['user_country'] = $_POST['user_country'];
}





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
mysqli_set_charset( $conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO users (firstname, lastname, nickname, password, type, email, country)
VALUES ('".$upload_array_access['user_first_name']."','". $upload_array_access['user_last_name']."', '".$upload_array_access['user_nick_name']."','".$upload_array_access['user_password']."','".$upload_array_access['user_type']."','".$upload_array_access['user_email']."','".$upload_array_access['user_country']."')";

if ($conn->query($sql) === TRUE) {
    $current_message= "משתמש נוצר בהצלחה";
} else {
    $current_message =  "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();

header("Location: ../dashboard.php?dash=manage-users&mess=".$current_message); /* Redirect browser */
exit();
//echo "Location: ../dashboard.php?dash=new-access?dash=new-access&mess=".$current_message."000";


?>

