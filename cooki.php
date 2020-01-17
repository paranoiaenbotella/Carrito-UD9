
<?php  
//guardar datos

setcookie("producto"."[".$_POST["producto"]."]", $_POST["cantidad"], time()+(60*60*24),);
setcookie("producto1"."[".$_POST["producto1"]."]", $_POST["cantidad1"], time()+(60*60*24),);
setcookie("producto2"."[".$_POST["producto2"]."]", $_POST["cantidad2"], time()+(60*60*24),);
setcookie("producto3"."[".$_POST["producto3"]."]", $_POST["cantidad3"], time()+(60*60*24),);

echo "Producto añadido."."<br>";
echo "<a href="."index.php".">Regresar a productos</a>";

?>