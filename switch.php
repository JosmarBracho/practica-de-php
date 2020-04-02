<?php
//video 9 sentencia switch

$eleccion = "pizza";

switch($eleccion){

    case "helado":echo"El valor del helado es de 1000 BsS";
break;
case "pizza":echo"El valor del helado es de 2000 BsS";
break;

default:echo"Opcion NO valida";
break;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ingresa una opcion</h1>
<hr>
<h2>1) Helado</h2>
<h2>2) Pizza</h2>
<h2>3) Torta</h2>
</body>
</html>