
<?php
   if(session_status() == PHP_SESSION_NONE){  session_start(); }
if(isset($_POST['uname'])) {
    
              $_SESSION['uname'] = $_POST['uname'];
              //   echo $user['uname'];
          }
          if((isset($_POST['status']))&& ($_POST['status'])=='true') {

                      $user['status'] = $_POST['status'];
                        $_SESSION['id'] = session_id();
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
        <a class="navbar-brand" href="/"><strong style="color:#29d846">Orlando</strong>Guests</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="/">דף הבית</a></li>
          <li><a href="#">מדריכים</a></li>
          <li><a href="#">הודותינו</a></li>
          
          <?php
          if((isset($_SESSION["id"]))&&($_SESSION["id"]!=''))
          {
          echo "<li><a href='dashboard.php'>לוח הבקרה</a></li>";

            }
            ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Major Attractions<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Disney</a></li>
              <li><a href="#">Seaworld</a></li>
              <li><a href="#">Universal</a></li>

            </ul>
          </li>
          <li>
            <?php
        if(isset($_POST['mess'])) {
    $mess = $_POST['mess'];
    //   echo $user['uname'];
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

          }
          else {

echo <<<BOT

      <form action="settings/log-in.php" method="post">
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