<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";
var_dump($numero1 > $numero2);
echo "<br>";
var_dump($numero1 < $numero2);
echo "<br>";
var_dump($numero1 >= $numero2);
echo "<br>";
var_dump($numero1 <+ $numero2);
echo "<br>";
var_dump($numero2 == $numero3);
echo "<br>";
var_dump($numero2 == $numero4);
echo "<br>";
//Revisa el valor y tipo de dato
var_dump($numero2 === $numero4);
echo "<br>";
//Si el numero de la izquierda es menor nos da -1, 0 si es igual y si el de la derecha es mayour 1
var_dump($numero1 <=> $numero2);
echo "<br>";
var_dump($numero3 <=> $numero2);
echo "<br>";
var_dump($numero2 <=> $numero1);
echo "<br>";

include 'includes/footer.php';