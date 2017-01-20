

<?php
include '../settings/connect.php';

if (isset($_POST['access_title_en']))
{
    $upload_array_access ['access_title_en'] = $_POST['access_title_en'];
}
if (isset($_POST['access_title']))
{
    $upload_array_access ['access_title'] = $_POST['access_title'];
}
if (isset($_POST['access_disc']))
{
    $upload_array_access ['access_disc'] = $_POST['access_disc'];
}



// **************** start upload files to server folder




$target_dir = "../images/accessories/" ;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$upload_array_access['file'] = "images/accessories/". basename($_FILES["fileToUpload"]["name"]);
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



$sql = "INSERT INTO accessories (access_key, access_name, access_disc, access_img)
VALUES ('".$upload_array_access['access_title_en']."','". $upload_array_access['access_title']."', '".$upload_array_access['access_disc']."','".$upload_array_access['file']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();
?>





<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include '../settings/head.php'; ?>
    <script src='scripts/upload_guide.js'></script>
    <title>Document</title>
  </head>
<body>
    <a href='../new-access.php'><button class="btn-lg button_p">next one</button></a>
<a href='../index.php'><button class="btn-lg button_p">home</button></a>
     

</body>
</html>