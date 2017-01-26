<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="style/style_control.css">
  <?php include '/settings/head.php'; ?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body  style='padding-top:100px'>
    <?php include '/settings/top_menu.php'; ?>
  <div class="container">

    <?php
if(isset($_GET['mess'])) {
  echo "<h3 class='text-primary'>".$current_mess = $_GET['mess']."</h3>";
}
?>
<h1 class="display-3">מצרכים</h1>


    <form action="content/access_push.php" method="post" enctype="multipart/form-data">


      <div class="form-group">
        <label for="exampleInputEmail1">שם באנגלית למוצר</label>
        <input type="text" class="form-control" name="access_title_en" id="access_title_en" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">שם בעברית למוצר</label>
        <input type="text" class="form-control" name="access_title" id="access_title" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">תאור המוצר</label>
        <input type="text" class="form-control" name="access_disc" id="access_disc" required>
      </div>


      <div class="form-group">
        <label for="exampleInputFile">הוסף תמונה</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
      </div>

      </span>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>