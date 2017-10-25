<html>

<title>אתר מדריכים</title>

<head>
  <?php include 'settings/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="style/new_effects2.css">

</head>

<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <?php
include 'content/top_main.php';
?>

    </div>
    <div id="section2">
      <div class="container">
        <div class="row" >
          <div id="adds" style="" class="col-md-4 hidden-xs hidden-sm">
          <!--  <div class='row'>
              <div class='col-xs-12 an-add' style='background-color:blue;height:200px'>
              </div>
            </div>-->
            <div class='row'>
              <div class='col-xs-12  an-add' style=''>
              <?php 
                      include 'ads/left-big-ad.php';
              ?>

              </div>
            </div>
  <!--          <div class='row'>
              <div class='col-xs-12 an-add' style='background-color:blue;height:200px'>

              </div>
            </div>-->
          </div>
          <?php include 'content/subjects_pull.php'; ?>
        </div>

      </div>
  
    </div>
    </div>
    </div>

</body>

</html>