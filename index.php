<!DOCTYPE html>
<html lang="pl" id="top">
<head>
  <title>Strzelnica ORZEŁ</title>
  <?php include 'header.html' ?>
</head>
<body>

<?php 
  include('session.php');
  if($_SESSION['login_user'] != "none"){
    header("location:index_logged.php");
    die();
  }
?>

<?php include 'navbar.php' ?>

<?php include 'logo-header.html' ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>WITAMY NA STRONIE STRZELNICY ORZEŁ</h2><br>
      <h4><strong>Strzelnica Gdańsk</strong> posiada jeden z największych arsenałów broni w Polsce. Istniejemy od asiao sifoab oauso awho ashdo ashdo asdh aoshdoaishoad </h4><br>
    </div>
    <div class="col-sm-4">
      <img src="img/rifle.png" width="100%">
    </div>
  </div>
</div>
  <div class="container text-center">
    <div id="carousel-gallery" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-gallery" data-slide-to="1"></li>
      <li data-target="#carousel-gallery" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/falcon1.jpg" style="width: 80%; min-width: 300px;" alt=".1.">
      </div>
      <div class="carousel-item">
        <img src="img/falcon2.jpg" style="width: 80%; min-width: 300px;" alt=".2.">
      </div>
      <div class="carousel-item">
        <img src="img/ss.jpg" style="width: 80%; min-width: 300px;" alt=".3.">
      </div>
      <a class="carousel-control-prev" href="#carousel-gallery" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#carousel-gallery" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    
  </div>
</div>



<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<?php include 'footer.html' ?>
</body>