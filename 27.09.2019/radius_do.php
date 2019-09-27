<?php
// radius_do.php
//defineerime muutuja 'raadius' ja omistame kasutaja poolt sisestatud väärtuse.
$raadius=$_GET['raadius']; //<input /..../ name="raadius">
// v'ljastame saadud v''trtuse ekraanile.
echo 'Sisestatud raadius on: '.$raadius.'<br>';
// arvutused
//ringi pindala
$ringiPindala = 3.14 * $raadius * $raadius;
// ringi ümbermõõt
$ringiUmbermoot = 3.14 * $raadius * 2;
//  muutujate andmete tüüpide ja väärtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiUmbermoot);*/
// väljastame tulemuse
echo '<hr>';
echo 'Ringi pindala on '.$ringiPindala.'<br>';
echo 'Ringi ümbermõõt on '.$ringiUmbermoot.'<br>';