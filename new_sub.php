<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <?php include '/settings/head.php'; ?>
</head>
<body>
    
  <div class="container">
<form action="content/new_sub.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Guide Title</label>
    <input type="text" class="form-control" name="guide_title" id="guide_title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Guide SubTitle</label>
    <input type="text" class="form-control" name="guide_sub_title" id="guide_sub_title">
  </div>
  <?php


include '/settings/connect.php';


$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "SELECT id, firstname, lastname, nickname FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='form-group'><label for='exampleSelect1'>User nick</label>    <select class='form-control'' name='nick_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option data-user-id='".$row["id"]."'data-firstname='".$row["firstname"]."'data-lastname='".$row["lastname"]."' >".$row["nickname"]."</option>";
    }
    echo "</select></div>";
} else {
    echo "0 results";
}

$sql = "SELECT id, title FROM subjects";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='form-group'><label for='exampleSelect1'>Subject</label>    <select class='form-control'' name='nick_name'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <option data-user-id='".$row["id"]."'>".$row["title"]."</option>";
    }
    echo "</select></div>";
} else {
    echo "0 results";
}




$connection->close();

?>



  <div class="form-group">
    <label for="exampleInputFile">File input</label>
     <input type="file" name="fileToUpload" id="fileToUpload">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>