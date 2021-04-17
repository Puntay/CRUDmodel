<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<form action="index.php?action=trabajador" method="post">
		Id:
		<input type="text" name="id" value="{$listaTrabajador->get_id()}" ><p>
		Nombres:
		<input type="text" name="nom" value="{$listaTrabajador->get_nom_trab()}"><p>
		Apellidos:
		<input type="text" name="ape" value="{$listaTrabajador->get_ape_trab()}"><p>
		Sueldo:
		<input type="number" name="sue" value="{$listaTrabajador->get_sueldo()}"><p>

		<input type="submit" name="grabar" value="Grabar">
		<input type="submit" name="salir" value="Salir">
	</form>
</body>
</html>