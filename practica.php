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




?>