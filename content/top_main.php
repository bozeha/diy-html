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

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <!-- <div class="container"> -->
      <!-- <div class="navbar-header"> -->
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">  
        <span class="navbar-toggler-icon "></span>
        </button>
        <a class="navbar-brand text-primary" href="/"><strong style="color:#29d846">DIY</strong>Guides</a>
      <!-- </div> -->
      <div id="navbar" class="align-items-center navbar-collapse collapse justify-content-end">
        <ul class="navbar-nav align-items-center flex-last">
          <li class="nav-item"><a class="nav-link h4" href="index.php">דף הבית</a></li>
          <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link h4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">מדריכים<span class="caret"></span></a>
            <ul class="dropdown-menu" id='top_main_drop'>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link h4" href="#">הודותינו</a>
          </li>
          
          <?php
          if((isset($_SESSION["id"]))&&($_SESSION["id"]!=''))
          {
          echo "<li class='nav-item'><a class='nav-link h4' href='dashboard.php'>לוח הבקרה</a></li>";
          $class_mess="text-success";
            }
            else $class_mess="text-warning";
            ?>
        </ul>
        <?php
          if((isset($_SESSION["id"]))&&($_SESSION["id"]!=''))
          {

echo <<<BOT

     <div id='top-main-message' class='d-flex flex-row align-items-center'> <form action="index.php" method="post" name='log_out' id='log_out'>
            
            
                  <button class='btn btn-outline-warning my-2 my-sm-0'>התנתק</button>
                  <input name='uname' type='hidden' class="form-control">
                  <input name='status' type='hidden' value='false' class="form-control">
          </form>
          
BOT;

              echo "<h5 class='pull-left'>". $_SESSION['uname']."  ברוך הבא   </h5></div>";

            
                  echo "<script type='text/javascript'>privileges('".$_SESSION['utype']."')</script>";
              


              //time out after 10 min (60 sec * 10 )

              if ($_SESSION['timeout'] + 30 * 60 < time()) {   
                
                    echo "<script>$('.log_out_button').click()</script>";

              } else {
                // the page has not pass time so reset time for more 10 minites
                $_SESSION['timeout'] = time();
              }


          }
          else {
            if(isset($_POST['mess'])) {
              $mess = $_POST['mess'];
              echo "<h3 class='message_text pr-3 ".$class_mess."'>".$mess."</h3>";
            }
echo <<<BOT

      <form id='log-in-form' action="settings/log-in.php" method="post">
            <ul class="nav align-items-end navbar-nav navbar-left">
                  <li>
                <a href="#">
                  <button class='btn btn-outline-success my-2 my-sm-0'>התחבר</button>
                </a>
              </li>
              <li class="navbar-text">
                  <input name='uname' placeholder="שם משתמש" type='text' class="form-control">
                </li>
              <li class="navbar-text">
                  <input name='pass' placeholder="סיסמא" type='text' class="form-control">
                </li>
            </ul>
          </form>
BOT;
          }

      
  
?>
    
      </div>
      <!--/.nav-collapse -->
    <!-- </div> -->
  </nav>

  <script>$(document).ready(function(){

$(top_sub).each(function(index){
      $('#top_main_drop').append("<li class='dropdown-item text-right'><a href='list-of-guides.php?subject="+top_sub_id[index]+"'>"+top_sub[index]+"</a></li>");

})

  
    })</script>


    <div style='height:100px;width:100%;background-color:gray;padding-top:5px;margin-top:80px;margin-bottom:10px'>
<?php 
                      include 'ads/top-big-ad.php';
              ?>
    </div>


    