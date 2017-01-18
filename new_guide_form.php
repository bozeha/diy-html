<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '/settings/head.php'; ?>
    <script src='scripts/upload_guide.js'></script>
    <title>Document</title>
</head>

<body style='padding-top:100px'>

  <?php include '/settings/top_menu.php'; ?>
    <div class="container">
      <h1 class="display-3">הוספת מדריך</h1>
      <form action="content/guide_push.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="subject_number" name="subject_number" />
        <input type="hidden" id="user_number" name="user_number" />
        <input type="hidden" id="access_array" name="access_array[]" />


        <div class="form-group">
          <label for="exampleInputEmail1">כותרת באנגלית למדריך</label>
          <input type="text" class="form-control" name="guide_title_en" id="guide_title_en" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">כותרת למדריך</label>
          <input type="text" class="form-control" name="guide_title" id="guide_title" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">תמונה ראשית למדריך</label>
          <input type="file" name="fileToUpload[]" id="fileToUpload" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">תת כותרת למדריך</label>
          <input type="text" class="form-control" name="guide_sub_title" id="guide_sub_title" required>
        </div>


        <?php
include '/settings/connect.php';
include '/settings/upload_code_form.php';
?>
          
          <div class="add_another_step">
            <div class="form-group">
              <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
              <input type="text" class="form-control one_of_steps" name="step[]">
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