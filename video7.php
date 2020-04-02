<?php
//video 7
echo"Practica 7";

echo"<br>";
echo"<br>";

$animales = ["Perro","Gato","Gallina"];
?>

<!DOCTYPE html>
<html lang="en">
<head><h1></h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for ($i=0;$i<=2;$i++){

    echo "<h1>Mis animales favoritos son: " .$animales[$i]."</h1>";


}
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

foreach ($animales as $valor)//El foreach se usa cuando no se sabe el valor de un arreglo
{

    echo "<h1>Mis animales favoritos son: " .$valor."</h1>";
}

?>


</body>
</html>