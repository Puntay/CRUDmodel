<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar</title>
</head>
<body>
	<form name="usuarios" action="index.php?action=trabajador" method="POST" enctype="multipart/form-data">
		<table>
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">NOMBRES</th>
					<th scope="col">APELLIDOS</th>
					<th scope="col">FECHA</th>
					<th scope="col">SUELDO</th>
					<th scope="col"> </th>
					<th scope="col"> </th>
				</tr>
			</thead>
			{section name=i loop=$listaTrabajador}
				<tbody> 
					<tr>
						<td>{$listaTrabajador[i]->get_id()}</td>
						<td>{$listaTrabajador[i]->get_nom_trab()}</td>
						<td>{$listaTrabajador[i]->get_ape_trab()}</td>
						<td>{$listaTrabajador[i]->get_fec_ini()}</td>
						<td>{$listaTrabajador[i]->get_sueldo()}</td>
						<td><a href="index.php?action=trabajador&ren={$listaTrabajador[i]->get_id()}">Rename</a></td>
						<td><a href="index.php?action=trabajador&del={$listaTrabajador[i]->get_id()}">Delete</a></td>
					</tr>
				</tbody>
			{/section}
		</table>
		<input type="submit" name="crea" value="Create">
		<input type="submit" name="exit" value="Exit">
	</form>
</body>
</html>