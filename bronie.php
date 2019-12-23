<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Strzelnica Gdańsk</title>
  <?php include 'header.html' ?>
</head>
<body>

<?php include 'navbar_check.php' ?>

<?php include 'logo-header.html' ?>

<div class="container">
  <?php $kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 1;
  @mysqli_query($polaczenie, 'SET NAMES utf8');

  $sql = 'SELECT `id`, `nazwa`
     FROM `kategorie`
     WHERE `id` = "'. $kat_id .'"';
  $wynik = mysqli_query($polaczenie, $sql);
  $row = @mysqli_fetch_array($wynik);
  echo "<h2>" . $row['nazwa'] . "</h2>";
  ?>
</div>

<div class="container" style="margin-top:30px">
  <div class="row">
    <?php include 'bronie_kategorie.php' ?>
  </div>
</div>


<div id="lightbox">
  <span id="close-button">&times;</span>
  <div class="container">
    <div class="row">
      <div id="lightbox-image" class="col-md-6">
        
      </div>
      <div id="lightbox-caption" class="col-md-6">
        
      </div>
    </div>
  </div>
</div>

<?php include 'footer.html' ?>

<script src="js/mylightbox.js"></script>
</body>