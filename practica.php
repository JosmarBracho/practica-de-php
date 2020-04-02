<?php

//Video 1
echo"Practica 1";

echo"<br>";
echo"<br>";

echo("Hola Mundo desde PHP");

//Video 2
echo"<br>";
echo"<br>";

echo"Practica 2";

$edad = 17;

//PHP es sencible a mayusculas y minusculas por ejemplo si escribimos el mismo nombre pero con una mayuscula

$Edad = 18; //es diferente
echo"<br>";//salto de linea
echo"<br>";

echo $edad;

echo"<br>";
echo"<br>";

echo $Edad;


echo"<br>";
echo"<br>";

//Concatenacion

echo"Mi edad es:  ".$edad;


echo"<br>";
echo"<br>";
 
$nombre = "Josmar";//<-- Declaracion de variable de tipo string


echo $nombre .  "tiene la edad de ".$edad."años";


echo"<br>";
echo"<br>";

//Tercer video
echo"Practica 3";

echo"<br>";
echo"<br>";

$dinero = 1000;

if($dinero>3000){

    echo"Puedo ir al cine";

}else{
    echo"No puedo ir al cine :`(";
}

//Con variable buleana
echo"<br>";
echo"<br>";

$tengo = true;

if($tengo){

    echo"Puedo ir al cine";

}else{
    echo"No puedo ir al cine :`(";
}

echo"<br>";
echo"<br>";
//Video 4 operadores
echo"Practica 4";

 $a = 4;
 $A = "2";
 $b = 2;
 $c = $a + $b;//lo mismo con multiplicacion *,division / etc...
 $z = 3;
 echo"<br>";
echo"<br>";

echo $c;

echo"<br>";
echo"<br>";
//con operador de comparacion:

if($a>$b){

    echo"Es verdadero";

}else{

 echo"Es falso";

}

echo"<br>";
echo"<br>";

if($A === $b)//Al colocarle triple igual se evalua como identico,pero con doble igual se evalua como igual(valga la redundancia)
{

    echo"Es verdadero";

}else{

 echo"Es falso";
}

echo"<br>";
echo"<br>";
//Operadores logicos:
if($z<$a && $z>$b )
{

    echo"Es verdadero";

}else{

 echo"Es falso";

}



?>