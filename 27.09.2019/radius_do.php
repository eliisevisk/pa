<?php
// radius_do.php
//defineerime muutuja 'raadius' ja omistame kasutaja poolt sisestatud väärtuse.
$raadius=$_GET['raadius']; //<input /..../ name="raadius">
// v'ljastame saadud v''trtuse ekraanile.
echo 'Sisestatud raadius on: '.$raadius.'<br>';
// arvutused
//ringi pindala
$ringiPindala = pi() * $raadius * $raadius;
// ringi ümbermõõt
$ringiUmbermoot = pi() * $raadius * 2;
//  muutujate andmete tüüpide ja väärtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiUmbermoot);*/
// väljastame tulemuse
echo '<hr>';
echo 'Ringi pindala on '.round($ringiPindala, 3).'<br>'; //ümardamine round(mida ümardan, palju komakohti jääb}
echo 'Ringi ümbermõõt on '.round($ringiUmbermoot, 3).'<br>';//(kui täpsustust ei pane, siis ümardab täisarvuni)