<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php	
	if ($_SERVER["REQUEST_METHOD"]="POST"){
		$id_anime=$_POST["id_anime"];

		//Prepare
		$sql = $_conexion -> prepare("DELETE FROM animes WHERE id_anime = ?");
		//Binding
		$sql -> bind_param("i",$id_anime);
		//Execute
		$sql -> execute();

	}
	$sql = "SELECT * FROM animes";
	$resultado = $_conexion -> query($sql);
	$_conexion -> close();
?>
<table>
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Estudio</th>
			<th>Año</th>
			<th>Numero de temporadas</th>
			<th>Imagen</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($fila = $resultado -> fetch_assoc()){
				echo "<tr>";
				echo "<td>" . $fila["titulo"] . "</td>";
				echo "<td>" . $fila["nombre_estudio"] . "</td>";
				echo "<td>" . $fila["anno_lanzamiento"] . "</td>";
				echo "<td>" . $fila["num_temporadas"] . "</td>";
		?>
			<td>
				<img width="200" height="200" src = "<?php echo $fila["imagen"] ?>">
			</td>
			<td>
				<a href="ver_anime.php?id_anime = <?php echo $fila["id_anime"] ?>">Editar</a>
			</td>
			<td>
				<form action="" method="post">
					<input type="hidden" name="id_anime" value="<?php echo $fila["id_anime"] ?>">
					<input type="sumbit" value="Borrar">
			</td>
			</tr>
			<?php } ?>
		
	</tbody>
</table>
</body>
</html>