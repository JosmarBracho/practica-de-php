<?php
//video 11 funciones
echo "Practica 11";
echo "<br>";
echo "<br>";

echo date("Y");//date me da la fecha actual,la Y devuelve el año

echo "<br>";
echo "<br>";

function lorem(){
    return " <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quia error totam voluptatibus! Qui dolor, assumenda expedita, alias laboriosam neque labore sed rem at molestias, consequatur ut? Modi, repellendus voluptatibus.</p>";
  
  }
  
  function promedio($n1,$n2){
 return($n1+$n2)/2;
}
echo promedio(10,20);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quia error totam voluptatibus! Qui dolor, assumenda expedita, alias laboriosam neque labore sed rem at molestias, consequatur ut? Modi, repellendus voluptatibus.</p>
<br>
<section>
<?php echo lorem() ?>
<?php echo lorem() ?>
<?php echo lorem() ?>
</section>
<p></p>
</body>
</html>