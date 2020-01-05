<!DOCTYPE html>
<html lang="pl" id="top">
<head>
  <title>Strzelnica ORZEŁ - Strona główna</title>
  <?php include 'header.html' ?>
</head>
<body>

<?php include 'navbar_logged.php' ?>

<?php include 'logo-header.html' ?>

<?php include 'login_check.php' ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>WITAMY NA STRONIE STRZELNICY ORZEŁ</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum hendrerit nunc id tincidunt. Duis congue dolor tortor, non sodales ex sodales vitae. Aenean elit mauris, tincidunt a magna ac, ornare fermentum nunc. In hac habitasse platea dictumst. Integer bibendum ultricies risus, sit amet ultrices arcu mattis posuere. Mauris ullamcorper. </h4><br>
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

<?php include 'footer.html' ?>
</body>