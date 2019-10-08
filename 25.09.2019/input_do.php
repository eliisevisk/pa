<?php
//muutuja ja v''rtuse v]tmine vormist.
$nimi = $_GET['nimi']; //<input /...../ name="nimi">
$pikkus = $_GET['pikkus'];
$kaal = $_GET['kaal'];
$perenimi = $_GET['perenimi'];
$vanus = $_GET['vanus'];
print 'Nimi: '.$nimi.'<br>';
print 'Perenimi: '.$perenimi.'<br>';
print 'Vanus: '.$vanus.'<br>';
print 'Kaal: '.$kaal.'<br>';
print 'Pikkus: '.$pikkus.'<br>';
print '<hr>';
print '<a href="input.php">Sisesta andmed uuesti!</a>';