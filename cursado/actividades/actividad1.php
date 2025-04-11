//declaracion de las variables
<?php
$entero =  6;
$flotante= 5.23;
$cadena= 'lautaro';
$booleano= false;

var_dump($entero,$flotante,$cadena,$booleano);
//variables
function multiplicar($a,$b=3){
	return($a * $b);
}
echo multiplicar(5);

//operadores
echo "";
$c=2;
$d=4;

$suma = $c + $d;
$resta = $c - $d;
$multiplicacion = $c * $d;
$division = $c / $d;

var_dump($suma, $resta, $multiplicacion, $division);

echo "";
$e = 5;
$f = 9;

if ( $e < $f){
	echo $f . " es mayor que " . $e;
}
elseif($e == $f){
	echo $e . " es igual que " . $f;
}
else{
	echo $f . " no es mayor que"  . $e;
}
echo "";

$n1 = "juan ";
$n2 = "perez ";
echo $n1 . $n2;

echo  "";
echo "";
$edad1 = 19;
$edad2 = 17;
$edad3 = 21;

if ($edad1 >=18);


?>
