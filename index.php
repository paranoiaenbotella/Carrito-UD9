<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<style>
	 #contenedor{
	 	width: 60%;
	 	height: 8em;
	 	border: 1px solid black;
	 	margin-left: 1em;
	 }	

	 .producto {
	 	display: inline;
	 	float: left;
	 	width: 20%;
	 	margin: 0.7em;
	 	background-color: #93AD8A;
	 	padding: 0.5em;
	 	text-align: center;
	 }
	 #carrito{

	 }
	</style>
</head>
<body>
<div id="contenedor">
	<div class="producto">
		<h3>Aceite</h3>
		<a href="productos/aceite.php">Ver producto</a>
	</div>
	<div class="producto">
		<h3>Harina</h3>
		<a href="productos/harina.php">Ver producto</a>
	</div>
	<div class="producto">
		<h3>Azucar</h3>
		<a href="productos/azucar.php">Ver producto</a>
	</div>
	<div class="producto">
		<h3>Sal</h3>
		<a href="productos/sal.php">Ver producto</a>
	</div>
</div>

<h3 id="carrito"><a href="carrito.php">Ver carrito</a></h3>
<?php  

?>
</body>
</html>