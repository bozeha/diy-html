<!DOCTYPE html>
<html lang="en">

<head>

    <script src='scripts/upload_guide.js'></script>
    <!-- script for text area editor  -->
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/config.js"></script>
    <title>Document</title>
</head>

<body>

  
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
include '/settings/pull_access.php';
include '/settings/pull_users.php';
include '/settings/pull_subjects.php';
?>


          <span class='start_steps'>


</span>
          <div class="row youtube_buttons">
            <!--<div id="gray-div">
              </div>-->
            <div class='col-xs-6 pull-right'>
              <button type="button" class="btn-lg button_youtube">צור שלב של סרטון יוטיוב</button>
              <button type="button" class="btn-lg button_textarea">קטע טקסט</button>
              <button type="button" class="btn-lg button_text_and_img">צור שלב של טקסט ותמונה</button>
            </div>

            <div class='col-xs-6'>
              <button type="submit" class="btn btn-primary pull-right">אשר ושמור מדריך</button>
            </div>
            
          </div>
      </form>

    </div>





    <div style='display:none'>
      <div class="add_another_step">
<button class="btn btn-danger" onclick="$(this).parent().remove()">x</button>
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
        <button type='button' class="btn btn-danger" onclick="$(this).parent().remove()">x</button>
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <textarea name="editor1[]" id="editor1" rows="10" cols="80">
        </textarea>
      </div>


      <div class="add_guide_videos_array">
        <button class="btn btn-danger" onclick="$(this).parent().remove();disable_next(false)">x</button>
        <label class='step_lable' for="exampleInputEmail1">שלב 1</label>
        <div class="form-group">
          <div class="row">
            <label for="exampleInputEmail1">הוסף סירטון יוטיוב</label>
            <input type="text" class="col-xs-6 pull-right guide_videos_array" name="guide_videos_array_temp">
            <button type="button" class="col-xs-2 btn-md btn btn-primary pull-right" onclick='youtube_options()'>אשר</button>
          </div>

          <div class="btn-group row" data-toggle="buttons">

            <table id='youtube_table'>
              <tr>
                <td>
                  הפעלת הסרטון אוטומתי
                </td>
                <td>
                  הפעלת את הסרטון בלולאה
                </td>
                <td>
                  אפשרות שליטה על הסרטון
                </td>
                <td>
                  הצג סרטונים קשורים בסוף הקטע
                </td>
              </tr>

              <tr>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='auto' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='loop' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='controler' autocomplete="off">
                  </label>
                </td>
                <td>
                  <label class="btn btn-primary col-xs-3 youtube_btn">
                    <input type="checkbox" id='rel' autocomplete="off">
                  </label>
                </td>
              </tr>
              <input type="hidden" id="guide_videos_array_finel" name="guide_videos_array[]" />

            </table>
          </div>


        </div>
      </div>


    </div>
</body>

</html>