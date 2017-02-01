

<?php
include '../settings/connect.php';

if (isset($_POST['sub_en_cat']))
{
    //$upload_array_sub['sub_en_cat'] = $_POST['sub_en_cat'];
    $upload_array_sub['sub_en_cat'] = strtolower(str_ireplace(" ","_",$_POST['sub_en_cat']));
}
if (isset($_POST['sub_title_cat']))
{
    $upload_array_sub['sub_title_cat'] = $_POST['sub_title_cat'];
}
if (isset($_POST['sub_subtitle_cat']))
{
    $upload_array_sub['sub_subtitle_cat'] = $_POST['sub_subtitle_cat'];
}



// **************** start upload files to server folder




$target_dir = "../images/subjects/" ;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$upload_array_sub['file'] = "images/subjects/". basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// **************** end upload files




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
mysqli_set_charset( $conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO subjects (key_name	, title, sub_title, img)
VALUES ('".$upload_array_sub['sub_en_cat']."','".$upload_array_sub['sub_title_cat']."', '".$upload_array_sub['sub_subtitle_cat']."','".$upload_array_sub['file']."')";

if ($conn->query($sql) === TRUE) {
    $current_message= "קטגוריה נוצרה בהצלחה";
} else {
    $current_message =  "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();

header("Location: ../dashboard.php?dash=manage-sub&mess=".$current_message); /* Redirect browser */
exit();
//echo "Location: ../dashboard.php?dash=new-access?dash=new-access&mess=".$current_message."000";


?>

