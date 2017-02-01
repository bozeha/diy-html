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
        <h1 class="display-3">הוסף קטגוריה</h1>


        <form action="content/sub_push.php" method="post" enctype="multipart/form-data">


          <div class="form-group">
            <label for="exampleInputEmail1">שם הקטגוריה באנגלית</label>
            <input type="text" class="form-control" name="sub_en_cat" id="sub_en_cat" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">שם הקטגוריה בעברית</label>
            <input type="text" class="form-control" name="sub_title_cat" id="sub_title_cat" required>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">תיאור הקטגוריה</label>
            <input type="text" class="form-control" name="sub_subtitle_cat" id="sub_subtitle_cat" required>
          </div>
              
          <div class="form-group">
            <label for="exampleInputFile">הוסף תמונה</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
          </div>


          <button type="submit" class="btn btn-primary">צור קטגוריה</button>
        </form>




</body>

</html>
