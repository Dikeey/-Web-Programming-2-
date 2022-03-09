<?php 
    // definition const
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari ;
$keliling = 2 * PHI *$jari ;

echo "Luas Lingkarang dengan jari jari $jari : $luas";
echo "<br>Kelilingnya : $keliling";
?>
<hr>
<?php 
echo 'Nama Databasenya :' .DBNAME;
echo '<br>Lokasi databasenya ada di' .DBSERVER;
?>