<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php?action=trabajador" method="post">
		Nombres:
		<input type="text" name="nom"><p>
		Apellidos:
		<input type="text" name="ape"><p>
		Fecha:
		<input type="date" name="fec"><p>
		Sueldo:
		<input type="number" name="sue"><p>

		<input type="submit" name="insert" value="Insert">
		<input type="submit" name="salir" value="Sallir">
	</form>
</body>
</html>