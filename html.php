<?php
//video 6
echo"Practica 6";

echo"<br>";
echo"<br>";

$nombre = "Josmar";
$animales = ["Perro","Gato","Gallina"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola:<?php echo$nombre  ?></h1>
<!--Arreglos-->
<br>

<h1>Mis animales favoritos son:<?php echo$animales[0]  ?></h1>
<!--Arreglos con ciclo while-->
<br>
<?php
$i = 0;

echo"<br>";
echo"<br>";

while($i<=2){

    echo "<h1>Mi animal favorito es: " .$animales[$i]."</h1>";
    $i++;
}
?>
</body>
</html>