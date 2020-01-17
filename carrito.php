
<?php  
// mostrar carrito



if (isset($_COOKIE['producto'])) {
		foreach ($_COOKIE['producto'] as $name => $value) {
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
                   }

               echo ("Producto:  ".$name."<br>");   
               echo ("Cantidad:  ".$value."<br>");
               echo ("------------------<br>");
                }

if (isset($_COOKIE['producto1'])) {
		foreach ($_COOKIE['producto1'] as $name => $value) {
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
                   }

               echo ("Producto:  ".$name."<br>");   
               echo ("Cantidad:  ".$value."<br>");
               echo ("------------------"."<br>");
                }
                	if (isset($_COOKIE['producto2'])) {
		foreach ($_COOKIE['producto2'] as $name => $value) {
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
                   }

               echo ("Producto:  ".$name."<br>");   
               echo ("Cantidad:  ".$value."<br>");
               echo ("------------------"."<br>");
                }

                	if (isset($_COOKIE['producto3'])) {
		foreach ($_COOKIE['producto3'] as $name => $value) {
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
                   }

               echo ("Producto:  ".$name."<br>");   
               echo ("Cantidad:  ".$value."<br>");
               echo ("------------------"."<br>");
                }



?>