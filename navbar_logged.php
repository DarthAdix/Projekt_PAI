<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="index.php"><img src="img/logo3.png" width="40"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav" style="margin-right: auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="oferta.php">Oferta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="bronie.php" role="button" data-toggle="dropdown">Uzbrojenie</a>
        <ul class="dropdown-menu">
          <?php
            include 'connect.php';

            @mysqli_query($polaczenie, 'SET NAMES utf8');

            $sql = 'SELECT `id`, `nazwa`
               FROM `kategorie`
               ORDER BY `id`';
            $wynik = mysqli_query($polaczenie, $sql);
            if (mysqli_num_rows($wynik) > 0) {
              while ($kategoria = @mysqli_fetch_array($wynik)) {
                echo '<li class="dropdown-item">
                <a class="dropdown-item" href="bronie.php?kat_id=' . $kategoria['id'] . '">' . $kategoria['nazwa'] . '</a></li>' . PHP_EOL;
              }
            } else {
              echo 'wyników 0';
            }
            ?>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cennik.php">Cennik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="edycja_uzbrojenia.php">Edycja uzbrojenia</a>
      </li>   
    </ul>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="logout.php"><span class="fa fa-angle-right"></span> Logout</a></li>
    </ul>
  </div>  
</nav>