<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style/style_control.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src='scripts/upload_page.js' ></script>
    <title>Document</title>
    <?php include '/settings/head.php'; ?>
</head>
<body>
    
  <div class="container">





<form action="content/new_sub.php" method="post" enctype="multipart/form-data">
<input type="hidden" id="subject_number" name="subject_number" />
<input type="hidden" id="user_number" name="user_number" />


  <div class="form-group">
    <label for="exampleInputEmail1">כותרת באנגלית למדריך</label>
    <input type="text" class="form-control" name="guide_title_en" id="guide_title_en">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">כותרת למדריך</label>
    <input type="text" class="form-control" name="guide_title" id="guide_title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">תת כותרת למדריך</label>
    <input type="text" class="form-control" name="guide_sub_title" id="guide_sub_title">
  </div>
  
  
  <?php
include '/settings/connect.php';
include '/settings/upload_code_form.php';
?>

<div class="add_another_step">
<div class="form-group">
    <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
    <input type="text" class="form-control" name="step[]" id="guide_title_en">
  </div>


  <div class="form-group">
    <label for="exampleInputFile">הוסף תמונה</label>
     <input type="file" name="fileToUpload[]" id="fileToUpload">
    <!--small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small-->
  </div>
</div>
<span class='start_steps'>


</span>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<button class="btn-lg button_p">+</button>
</div>
</body>
</html>