<?php

require_once 'qrgenerator/lib/full/qrlib.php';

$path = 'assets/img/qrcode/';
$file = $path . uniqid() . ".png";

$qrtext = "|fathurwalkers|b9731f994fc1007c21778e52239a1405cd9cea3|";

$generated = QRcode::png($qrtext, $file, 'L', 10, 2);

echo "<center><img src='" . $file . "'></center>";
