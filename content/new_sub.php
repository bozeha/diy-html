<?php
include '../settings/connect.php';

$upload_array = array();
$upload_array['accessories'][0]= '0';
$upload_array['videos'][0]= '0';


if (isset($_POST['subject_number']))
{
    $upload_array ['subject'] = $_POST['subject_number'];
}
if (isset($_POST['user_number']))
{
    $upload_array ['user'] = $_POST['user_number'];
}
if (isset($_POST['guide_title']))
{
    $upload_array ['guide_title'] = $_POST['guide_title'];
    echo $upload_array ['guide_title'];
}
if (isset($_POST['guide_title_en']))
{
    $upload_array ['guide_title_en'] = $_POST['guide_title_en'];
    $upload_array ['guide_key'] = str_replace(' ','_',strtolower($_POST['guide_title_en']));
}
if (isset($_POST['guide_sub_title']))
{
    $upload_array ['guide_sub_title'] = $_POST['guide_sub_title'];
}

if (isset($_POST['step']))
{
    $step = $_POST['step'];
    foreach( $step as $key => $n ) {
        $upload_array['steps'][$key] = $step ;
    }   
}

if (isset($_POST['access_array']))
{
    $access_array = $_POST['access_array'];
    foreach( $access_array as $key => $n ) {
        $upload_array['access_array'][$key] = $access_array ;
    }   
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
mysqli_set_charset( $conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





/*// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
echo "Table MyGuests created successfully";
} else {
echo "Error creating table: " . $conn->error;
}*/





// **************** start upload files to server folder




$target_dir = "../images/guides/".$upload_array ['guide_key']."/" ;
if (!file_exists ($target_dir)){mkdir($target_dir, 0777);}

foreach($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name)
{
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$key]);
    $upload_array['files'][$key] = $target_file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$key]);
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
    if ($_FILES["fileToUpload"]["size"][$key] > 10000000) {
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
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    
    
}


// **************** end upload files


$sql = "INSERT INTO guides (subject, user, guide_key, guide_title, guide_title_en, guide_subtitle, guide_accessories_array, guide_text_array,guide_images_array, guide_videos_array)
VALUES ('".$upload_array['subject']."','". $upload_array['user']."', '".$upload_array['guide_key']."','".$upload_array['guide_title']."', '".$upload_array['guide_title_en']."','".$upload_array['guide_sub_title']."','".json_encode($upload_array['access_array'])."','".json_encode($upload_array['steps'])."','".json_encode($upload_array['files'])."','".json_encode($upload_array['videos'])."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();
?>