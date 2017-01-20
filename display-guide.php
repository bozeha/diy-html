<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '/settings/head.php'; ?>
  

</head>
<body>
  <div id='resize_div'></div>
    
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
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Major Attractions<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Disney</a></li>
              <li><a href="#">Seaworld</a></li>
              <li><a href="#">Universal</a></li>

            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Flight Info</a></li>
          <li><a href="#">Ticket Info</a></li>
          <li><a href="#">Things To Do</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">



        <?php include '/content/guide_pull.php'; ?>



    </div>
</body>
</html>