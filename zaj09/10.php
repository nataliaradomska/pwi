

<?php

$l1 = $_POST['liczba1'];
$l2 = $_POST['liczba2'];


//$dodawanie = $_POST['liczba1'] + $_POST['liczba2'];
//echo $dodawanie;

echo $l1 + $l2;


//$odejmowanie = $_POST['liczba1'] - $_POST['liczba2'];
echo $l1 - $l2;
//$mnozenie = $_POST['liczba1'] * $_POST['liczba2'];
echo $l1 * $l2;

//dzielenie = $_POST['liczba1'] / $_POST['liczba2'];

if($l2 == 0)
echo "Dzielenie przez zero";
else echo $l1 / $l2;


?>