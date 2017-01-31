<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="style/style_control.css">
  
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body style='padding-top:100px'>

    <div class="container">

      <?php
if(isset($_GET['mess'])) {
    echo "<h3 class='text-primary'>".$current_mess = $_GET['mess']."</h3>";
}
?>
        <h1 class="display-3">הוסף משתמש</h1>


        <form action="content/user_push.php" method="post" enctype="multipart/form-data">


          <div class="form-group">
            <label for="exampleInputEmail1">שם פרטי</label>
            <input type="text" class="form-control" name="user_first_name" id="user_first_name" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">שם משפחה</label>
            <input type="text" class="form-control" name="user_last_name" id="user_last_name" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">כינוי</label>
            <input type="text" class="form-control" name="user_nick_name" id="user_nick_name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">סיסמא</label>
            <input type="text" class="form-control" name="user_password" id="user_password" required>
          </div>
<div class="form-group">
<label for="exampleInputEmail1">סוג משתמש</label>
          <select name="user_type" id="user_type">
            <option value="basic">משתמש רגיל</option>
            <option value="admin">מנהל</option>
            <option value="super_admin">מנהל ראשי</option>

          </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="text" class="form-control" name="user_email" id="user_email" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">מדינה</label>
            <input type="text" class="form-control" name="user_country" id="user_country" >
          </div>


          </span>
          <button type="submit" class="btn btn-primary">צור משתמש</button>
        </form>



<?php
include 'settings/pull_users.php';


?>

  <link href="style/style_control.css" rel="stylesheet" />

  <div class='row'>
  <script src='scripts/remove_access.js'></script>


  <button class='btn btn-danger red-button-remove-user' onclick=elements_to_remove('users')>מחק את המשתמש המסומן</button>
  <div class='alert-danger' id='done_message'>
    </div>
  </div>

      </div>
</body>

</html>
