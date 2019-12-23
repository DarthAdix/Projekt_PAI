<!DOCTYPE html>
<html lang="pl" id="top">
<head>
  <title>Strzelnica Gdańsk</title>
  <?php include 'header.html' ?>
</head>
<body>

<?php include 'navbar_check.php' ?>

<?php include 'logo-header.html' ?>

<div id="edycja" class="container bg-light">
  <h2>Edycja uzbrojenia</h2><br>
  
  <h3>Lista broni:</h3>
    <?php
      $sql = 'SELECT `id`, `kategoria_id`, `nazwa`, `opis`, `img`, `kaliber`, `pojemnosc` FROM `bronie` ORDER BY `id`';
      $result = mysqli_query($polaczenie,$sql);
      while($row = mysqli_fetch_assoc($result)){
          echo '<form action="zapisz_uzbrojenie.php" method="post">
          <div class="container">
          <div class="row" style="margin-bottom: 20px;">
          <div class="col-md"><h4>Kategoria</h4><input size="4" type="int" name="kategoria_id" value=' . $row['kategoria_id'] . ' /></div>
          <div class="col-md"><h4>Nazwa</h4><textarea name="nazwa" rows="1" cols="25" placeholder="opis">' . $row['nazwa'] . '</textarea></div>
          <div class="col-md"><h4>Obrazek</h4><input size="20" type="text" name="img" value=' . $row['img'] . ' /></div>
          </div>
          <div class="row" style="margin-bottom: 20px;">
          <div class="col-md"><h4>Kaliber</h4><textarea name="kaliber" rows="1" cols="25" placeholder="kaliber">' . $row['kaliber'] . ' </textarea></div>
          <div class="col-md"><h4>Pojemność</h4><input size="4" type="int" name="pojemnosc" value=' . $row['pojemnosc'] . ' /></div>
          </div>
          <div class="row" style="margin-bottom: 20px;"><div class="col-6"><h4>Opis</h4><textarea name="opis" rows="5" cols="50" placeholder="opis">' . $row['opis'] . '</textarea></div></div>
          <div class="row" style="margin-top: 20px;"><button type="submit" value="' . $row['id'] . '" name="id">Zapisz</button></div>
          </div>
          </form>

          <form action="usun_uzbrojenie.php" method="post">
          <div class="container">
          <div class="row" style="margin-top: 20px;""><button type="submit" value="' . $row['id'] . '" name="id">Usuń</button></div>
          </div>
          </form>
          <br>
          <hr>';
          
      } ?>

</div>
<div class="container bg-light">
  <?php
    echo '<h3>Dodaj do galerii</h3>

    <form action="dodaj_uzbrojenie.php" method="post">
    <div class="container">
    <div class="row" style="margin-bottom: 20px;">
    <div class="col-md"><h4>Kategoria</h4><input size="4" type="int" name="kategoria_id" placeholder="kategoria_id" /></div>
    <div class="col-md"><h4>Nazwa</h4><textarea name="nazwa" rows="1" cols="25" placeholder="nazwa"></textarea></div>
    <div class="col-md"><h4>Obrazek</h4><input size="20" type="text" name="img" placeholder="obrazek" /></div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
    <div class="col-md"><h4>Kaliber</h4><textarea name="kaliber" rows="1" cols="25" placeholder="kaliber"></textarea></div>
    <div class="col-md"><h4>Pojemność</h4><input size="4" type="int" name="pojemnosc" placeholder="pojemnosc" /></div>
    </div>
    <div class="row" style="margin-bottom: 20px;"><div class="col-6"><h4>Opis</h4><textarea name="opis" rows="5" cols="50" placeholder="opis"></textarea></div></div>
    <div class="row" style="margin-top: 20px;"><button type="submit" value="' . $row['id'] . '" name="id">Dodaj</button></div>
    </div>
    </form>';
    
    ?>
</div>

<?php include 'footer.html' ?>

</body>