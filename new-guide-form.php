<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '/settings/head.php'; ?>
    <script src='scripts/upload_guide.js'></script>
    <!-- script for text area editor  -->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/config.js"></script>
    <title>Document</title>
</head>

<body>

  <?php include '/settings/top_menu.php'; ?>
    <div class="container">
      <h1 class="display-3">הוספת מדריך</h1>
      <form action="content/guide_push.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="subject_number" name="subject_number" />
        <input type="hidden" id="user_number" name="user_number" />
        <input type="hidden" id="access_array" name="access_array[]" />
        <input type="hidden" id="type_of_steps" name="type_of_steps[]" />


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


          <span class='start_steps'>


</span>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <button class="btn-lg button_youtube">צור שלב של סרטון יוטיוב</button>
      <button class="btn-lg button_textarea">קטע טקסט</button>
      <button class="btn-lg button_text_and_img">צור שלב של טקסט ותמונה</button>
    </div>





    <div style='display:none'>
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

      <div class="add_another_textarea">
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <textarea name="editor1[]" id="editor1" rows="10" cols="80">
        </textarea>
      </div>


      <div class="add_guide_videos_array">
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <div class="form-group">
          <label for="exampleInputEmail1">הוסף סירטון יוטיוב</label>
          <input type="text" class="form-control guide_videos_array" name="guide_videos_array[]">


          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
            </label>
            <label class="btn btn-primary">
              <input type="checkbox" autocomplete="off"> Checkbox 2
            </label>
            <label class="btn btn-primary">
              <input type="checkbox" autocomplete="off"> Checkbox 3
            </label>
          </div>
          Radio 1 (preselected) Radio 2 Radio 3

        </div>
      </div>


    </div>
</body>

</html>