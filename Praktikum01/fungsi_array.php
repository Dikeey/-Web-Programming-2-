<?php 
$ar_buah = ["p" => "pepaya" , "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $k => $v) {
    echo "<li> $k = $v </li>";
}
echo "</ol>";


echo "<hr>";
// ======================
sort ($ar_buah);
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>

<!-- ================= -->
<?php 
$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<br>";
?>


<?php 
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "farhan");
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<br>";
?>



<?php 
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<hr>";
?>



<?php 
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims, "muhammad", "ismail");
foreach ($tims as $person) {
    echo "$person <br>";
}
?>