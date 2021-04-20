<?php
// --------------   Ejercicio uno
echo "<br><center><h1> Nivel UNO</h1></center>";
echo "<center><h3> Ejercicio numero UNO</h3></center>";

$entero = 2;
$doblete = 0.23;
$cadena = "Texto Encadenado";
$logico = true;

echo "<br> El valor de la variable <b>INTEGER </b> es: <b> $entero </b><hr Width=500px align=left>";
echo "<br> El valor de la variable <b>DOUBLE</b> es: <b> $doblete</b><hr Width=500px align=left>";
echo "<br> El valor de la variable <b>STRING </b> es: <b> $cadena </b><hr Width=500px align=left>";
echo "<br> El valor de la variable <b>BOOLEAN </b> es:<b> $logico </b><hr Width=500px align=left>";


// --------------    Ejercicio dos
echo "<br><br>";

$altraVariable = "altra variable string";

echo "<center><h3> Ejercicio numero DOS</h3></center>";

echo "<br>El largo del string del primer ejercicio es: <b>"  , strlen($cadena), "</b><hr Width=500px align=left>";

echo "<br> El largo del string del segundo ejercicio es: <b>", strlen($altraVariable),  "</b><hr Width=500px align=left>";


echo "<br> Aca se usa STRREV para invertir el valor de la variable cadena $cadena , el resultado es: ", strrev($cadena),  "</b><hr Width=500px align=left>";

echo"<br> La concatenacion de los dos string es : {$cadena} con {$altraVariable} ";


// --------------    Ejercicio tres

echo "<br><br><center><h3> Ejercicio numero TRES</h3></center>";

const nombre="Nestor Edgardo Lopez Martinez";

echo "Llamado a la constante que contiene nombre ", nombre , "<br>";


// --------------    Nivel DOS -----------------------------------------

echo "<br><center><h1> Nivel DOS</h1></center>";
echo "<center><h3> Ejercicio numero UNO</h3></center>";

// Declaro arrays

$arreglo1 = array(1,2,3,4,5,);
echo "Utilizo Var_dump() para mostrar el contenido del array llamado arreglo1 es: " , var_dump($arreglo1), "<br><hr Width=500px align=left>";

$arreglo2 = array(6,7,8);
echo "Utilizo Var_dump() para mostrar el contenido del array llamado arreglo2 es: " , var_dump($arreglo2), "<br><hr Width=500px align=left>";

//Agrego un valor a el array llamado $arreglo2

array_push($arreglo2,9);

echo " El nuevo contenido del array llamado arreglo2 es: " , var_dump($arreglo2), "<br><hr Width=500px align=left>";



$result = array_merge($arreglo1, $arreglo2);
print_r($result);

echo "<br>";



// ---------------------------------    Nivel DOS -----------------------------------------

echo "<br><br><center><h1> Nivel TRES</h1></center>";
echo "<center><h3> Ejercicio numero UNO</h3></center>";

// --------------    Ejercicio uno

// recorrido de ARRAY con Foreach
echo "listado de valores del arreglo1. ";
echo "<ul>";
foreach ($arreglo1 as $arreglo){
echo "<li>".$arreglo."</li>";
}
echo "</lu><br><hr>";


// --------------    Ejercicio dos
/*declarar dues variables X e Y de tipus int, dues variables N i M de
 tipous double i assigna a cada una un valor. 
 A continuació, mostra per pantalla, per a X e Y:
	La suma 
	La resta 
	El producte  
	La divisió 
	El mòdulo */


 $x = 3;
 $y = 4;

 $n = 0.5;
 $m = 3.1416;

 echo "<br>El valor de la variable x es: ". $x ."y el valor de la variable y es: " . $y;
 echo "<br>La suma de la variable x con la variable y es: " .$c = $x+$y;
 echo "<br>La resta de la variable x con la variable y es: " .$c = $x-$y;
 echo "<br>El producto de la variable x con la variable y es: " .$c = $x*$y; 
 echo "<br>La division de la variable x con la variable y es: " .$c = $x/$y;
 echo "<br>El modulo de la variable x con la variable y es: " .$c = $x%$y;


 echo "<hr><br>El valor de la variable n es: ". $n ."y el valor de la variable m es: " . $m;
 echo "<br>La suma de la variable n con la variable m es: " .$c = $n + $m;
 echo "<br>La resta de la variable n con la variable m es: " .$c = $n - $m;
 echo "<br>El producto de la variable n con la variable m es: " .$c = $n * $m; 
 echo "<br>La division de la variable n con la variable m es: " .$c = $n / $m;
 echo "<br>El modulo de la variable n con la variable m es: " .$c = $n % $m;

//--------------------------ejercicio tres

 /*I per a totes les variables(X,Y,N,M):
o	El doble de cada variable
o	La suma de totes les variables
o	El producte de totes les variables
*/

echo "<hr><br>El doble de la variable x es: ". $c= $x*2.;
echo " el doble del valor de la variable y es: " .$c=$y*2 ;
echo "<hr><br>El doble de la variable n es: ". $c=$n*2.;
echo ", el doble del valor de la variable m es: " .$c=$y*2 ;


?>