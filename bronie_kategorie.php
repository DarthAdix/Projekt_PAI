<?php
  $sql = 'SELECT `nazwa`, `opis`, `img`, `kaliber`, `pojemnosc`
               FROM `bronie`
               WHERE `kategoria_id` = ' . $kat_id .
               ' ORDER BY `id`';
  $wynik = mysqli_query($polaczenie, $sql);
  if (mysqli_num_rows($wynik) > 0) {
    while ($bron = @mysqli_fetch_array($wynik)) {
        echo '<div class="col-md-4 col-sm-6"><img class="bron" src="img/'. $bron['img'] . '" alt="<h2>' . $bron['nazwa'] . '</h2>
          <br><p>' . $bron['opis'] . '</p>
          <ul>
          <li> Kaliber: ' . $bron['kaliber'] . '</li>
          <li> Pojemność magazynka: ' . $bron['pojemnosc'] . '</li>
          </ul>" width=100%><p><b>' . $bron['nazwa'] . '</b>: ' . $bron['opis'] . '</p></div>' . PHP_EOL;
    }
  } else {
    echo 'wyników 0';
  }
mysqli_close($polaczenie); ?>