
<?php
include 'settings/connect.php';

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
        echo " <div class='accessories' data-select-access='false' data-user-id='".$row["id"]."'data-disc='".$row["access_disc"]."'><label>".$row["access_name"]."</label><img style='float:left;width:100px;height:100px' src='".$row["access_img"]."'/></div>";
    }
    echo "</div></div>";
} else {
    echo "0 results";
}

// end accessories


echo <<<BOT

<div class='row'>
            <a href='dashboard.php?dash=new-access'>
              <button type="button" class="btn-lg button_access">מצרך נוסף</button>
            <lable>במידה וחסר מוצר ניתן להוסיף</lable>
            </a>
          </div>

BOT;


//users


$connection->close();
?>