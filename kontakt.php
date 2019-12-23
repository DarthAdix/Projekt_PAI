<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Strzelnica Gdańsk</title>
  <?php include 'header.html' ?>
</head>
<body>

<?php include 'navbar_check.php' ?>

<?php include 'logo-header.html' ?>

<form action="zapisz_uzbrojenie.php" method="post">
<div class="container">
          <div class="row">
          <div class="col-lg-2"><h4>Id</h4><input size="2" type="int" name="id" value=' . $row['id'] . ' /></div>
          <div class="col-lg-2"><h4>Kat.</h4><input size="2" type="int" name="kategoria_id" value=' . $row['kategoria_id'] . ' /></div>
          <div class="col-lg-3"><h4>Nazwa</h4><textarea name="opis" rows="1" cols="25" placeholder="opis">' . $row['nazwa'] . '</textarea></div>
          <div class="col-lg-5"><h4>Opis</h4><textarea name="opis" rows="5" cols="50" placeholder="opis">' . $row['opis'] . '</textarea></div>
          <div class="col-md-3"><h4>Obrazek</h4><input size="20" type="text" name="img" value=' . $row['img'] . ' /></div>
          <div class="col-md-3"><h4>Kaliber</h4><textarea name="opis" rows="1" cols="20" placeholder="kal.">' . $row['kaliber'] . ' </textarea></div>
          <div class="col-md-3"><h4>Pojemność</h4><input size="4" type="int" name="pojemnosc" value=' . $row['pojemnosc'] . ' /></div>
          <div class="col-md-12" style="margin-top: 20px;"><button type="submit" value="' . $row['id'] . '" name="id">Zapisz</button></div>
          </div>
          </div>
        </form>

<?php include 'footer.html' ?>

</body>