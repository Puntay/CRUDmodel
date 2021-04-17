<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar</title>
</head>
<body>
	<form name="usuarios" action="index.php?action=trabajador" method="POST" enctype="multipart/form-data">
		ID: 
		{$listaTrabajador->get_id()}<br/>
		NOMBRES:
		{$listaTrabajador->get_nom_trab()}<br/>
		APELLIDOS:
		{$listaTrabajador->get_ape_trab()}<br/>
		SUELDO:
		{$listaTrabajador->get_sueldo()}<br/>
		<input type="submit" name="exit" value="Exit">
	</form>
</body>
</html>