<?php
include '../settings/connect.php';

$upload_array = array();
$upload_array['accessories'][0]= '0';
$upload_array['videos'][0]= '0';
$temp_file_name= 0;



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
    $upload_array ['guide_title']=  str_replace('\'','&#39;',$upload_array ['guide_title']);
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
    $upload_array ['guide_sub_title']=  str_replace('\'','&#39;',$upload_array ['guide_sub_title']);
}

if (isset($_POST['step']))
{
    $step = $_POST['step'];
    foreach( $step as $key => $n ) {
        $upload_array['steps'][$key] = $n ;   
    }   
}
else $upload_array['steps']= [];

if (isset($_POST['editor1']))
{
    $step = $_POST['editor1'];
    foreach( $step as $key => $n ) {
        $upload_array['guide_textarea_array'][$key] = $n ;   
    }   
}
else $upload_array['guide_textarea_array'] = [];

if (isset($_POST['access_array']))
{
    $access_array = $_POST['access_array'];
    foreach( $access_array as $key => $n ) {
        $upload_array['access_array'][$key] = $access_array ;
    }
}
if (isset($_POST['type_of_steps']))
{
    $type_of_steps = $_POST['type_of_steps'];
    foreach( $type_of_steps as $key => $n ) {
        $upload_array['type_of_steps'][$key] = $type_of_steps ;
    }
}

if (isset($_POST['guide_videos_array']))
{
    $guide_videos_array = $_POST['guide_videos_array'];
    foreach( $guide_videos_array as $key => $n ) {
        $upload_array['guide_videos_array'][$key] = $guide_videos_array ;
    }
}
else $upload_array['guide_videos_array']=[];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
mysqli_set_charset( $conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






// **************** start upload files to server folder




$target_dir = "../images/guides/".$upload_array ['guide_key']."/" ;
if (!file_exists ($target_dir)){mkdir($target_dir, 0777);}

foreach($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name)
{
    /// this two first steps  are to get file extantion for example jpg or png
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$key]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    /////
    
    //create the real file name
    $target_file = $target_dir.$upload_array['guide_key']."_".$temp_file_name.".".$imageFileType ;
    
    //create the file path
    $upload_array['files'][$key] = str_replace('../','',$target_file);
    
    if(!$imageFileType)$upload_array['files'][$key]='';
    
    $uploadOk = 1;
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
    
    
    $temp_file_name ++;
}


// **************** end upload files



// fix array
$temp_array = explode(",",$upload_array['type_of_steps'][0][0]);
$upload_array['type_of_steps'] =$temp_array;
// fix array


$sql = "INSERT INTO guides (subject, user, guide_key, guide_title, guide_title_en, guide_subtitle, guide_accessories_array, guide_text_array,guide_images_array, guide_videos_array, type_of_steps_array,guide_textarea_array )
VALUES ('".$upload_array['subject']."','". $upload_array['user']."', '".$upload_array['guide_key']."','".$upload_array['guide_title']."','".$upload_array['guide_title_en']."','".$upload_array['guide_sub_title']."','".json_encode($upload_array['access_array'])."','".json_encode($upload_array['steps'],JSON_UNESCAPED_UNICODE)."','".json_encode($upload_array['files'])."','".json_encode($upload_array['guide_videos_array'][0])."','".json_encode($upload_array['type_of_steps'])."','".base64_encode(json_encode($upload_array['guide_textarea_array']))."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();
?>