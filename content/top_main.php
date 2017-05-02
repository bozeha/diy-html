<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$subjects_array=[];
mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, key_name, img, title, sub_title FROM subjects";
$result = $connection->query($sql);
$loop = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $subjects_array['id'][$loop] = $row["id"];
        $subjects_array['key_name'][$loop] = $row["key_name"];
        $subjects_array['img'][$loop] = $row["img"];
        $subjects_array['title'][$loop] = $row["title"];
        $subjects_array['sub_title'][$loop] = $row["sub_title"];
        $loop++;
    }
} else {
    echo "0 results";
}


$connection->close();
$loop2 = 0;
echo "<script>var top_sub_id =[]</script>";
echo "<script>var top_sub =[]</script>";
for($loop2=0;$loop2!=$loop;$loop2++) {
    
   echo "<script>top_sub_id[".$loop2."]='".$subjects_array['id'][$loop2]."'</script>";
   echo "<script>top_sub[".$loop2."]='".$subjects_array['title'][$loop2]."'</script>";
}



?>


<?php
   if(session_status() == PHP_SESSION_NONE){  session_start(); }
if(isset($_POST['uname'])) {
    
              $_SESSION['uname'] = $_POST['uname'];
              $_SESSION['utype'] = $_POST['type'];
              //   echo $user['uname'];
          }
          if((isset($_POST['status']))&& ($_POST['status'])=='true') {

                      $user['status'] = $_POST['status'];
                        $_SESSION['id'] = session_id();
                          
                          //strat calculate time .. for timeout log in 
                          if(!isset($_SESSION['timeout']))
                          {
                            $_SESSION['timeout'] = time(); 
                            //echo "<script>alert('".$_SESSION['timeout']."')</script>";
                          
                          }

                            
          }
          if((isset($_POST['status']))&& ($_POST['status'])=='false') 
          {
          $_SESSION = array();
          session_destroy();

          }
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><strong style="color:#29d846">DIY</strong>Guides</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="index.php">דף הבית</a></li>
          <!--<li><a href="#">מדריכים</a></li>-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">מדריכים<span class="caret"></span></a>
            <ul class="dropdown-menu" id='top_main_drop'>
            </ul>
          </li>
          <li><a href="#">הודותינו</a></li>
          
          <?php
          if((isset($_SESSION["id"]))&&($_SESSION["id"]!=''))
          {
          echo "<li><a href='dashboard.php'>לוח הבקרה</a></li>";

            }
            ?>
          <li>
            <?php
        if(isset($_POST['mess'])) {
    $mess = $_POST['mess'];
    echo "<h3 class='message_text'>".$mess."</h3>";
}
    ?>

            </li>

        </ul>
        <?php
          if((isset($_SESSION["id"]))&&($_SESSION["id"]!=''))
          {

echo <<<BOT

     <div id='top-main-message'> <form action="index.php" method="post" name='log_out' id='log_out'>
            
            
                  <button class='btn log_out_button'>התנתק</button>
                  <input name='uname' type='hidden' class="form-control">
                  <input name='status' type='hidden' value='false' class="form-control">
          </form>
          
BOT;

              echo "<h5 class='pull-left'>". $_SESSION['uname']."  ברוך הבא   </h5></div>";

            
                  echo "<script type='text/javascript'> privileges('".$_SESSION['utype']."')</script>";
              


              //time out after 10 min (60 sec * 10 )

              if ($_SESSION['timeout'] + 10 * 60 < time()) {   
                
                    echo "<script>$('.log_out_button').click()</script>";

              } else {
                // the page has not pass time so reset time for more 10 minites
                $_SESSION['timeout'] = time();
              }



          }
          else {

echo <<<BOT

      <form id='log-in-form' action="settings/log-in.php" method="post">
            <ul class="nav navbar-nav navbar-left">
                  <li>
                <a href="#">
                  <button class='btn'>התחבר</button>
                </a>
              </li>
              <li>שם משתמש
                  <input name='uname' type='text' class="form-control">
                </li>
              <li>סיסמא
                  <input name='pass' type='text' class="form-control">
                </li>
            </ul>
          </form>
BOT;


          }


?>
    
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <script>$(document).ready(function(){

$(top_sub).each(function(index){
      $('#top_main_drop').append("<li><a href='list-of-guides.php?subject="+top_sub_id[index]+"'>"+top_sub[index]+"</a></li>");

})

  
    })</script>


    <div style='height:100px;width:100%;background-color:gray;padding-top:5px;margin-top:80px;margin-bottom:10px'>
<?php 
                      include 'ads/top-big-ad.php';
              ?>
    </div>


    