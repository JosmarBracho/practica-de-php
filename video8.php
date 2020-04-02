<?php
//video 8 arreglos asociativos
echo"Practica 8";

echo"<br>";
echo"<br>";

//$ciudades = ["Chivacoa","Barquisimeto","San Felipe"];

$ciudades [0]=[
    "nombre" => "Chivacoa",
    "poblacion"=>"50"
];

$ciudades [1]=[
    "nombre" => "Barquisimeto",
    "poblacion"=>"100"
];

$ciudades [2]=[
    "nombre" => "San Felipe",
    "poblacion"=>"75"
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 echo $ciudades[0][nombre];
 
echo"<br>";
echo"<br>";
//for($i=0;$i<=1;$i++){

   // echo "<h2>Nombre: " .$ciudades[$i]["nombre"]."</h2>";
   // echo "<h2>Poblacion: " .$ciudades[$i]["poblacion"]."</h2>";
   // echo "<hr>";
  //  }
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

    foreach ($ciudades as $valor){
        echo "<h2>Nombre: " .$valor["nombre"]."</h2>";
        echo "<h2>Poblacion: " .$valor["poblacion"]."</h2>";
        echo "<hr>";
    }
?>
</body>
</html>