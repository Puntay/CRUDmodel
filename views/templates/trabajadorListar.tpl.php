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
					<th>ID</th>
					<th>NOMBRES</th>
					<th>APELLIDOS</th>
					<th>FECHA</th>
					<th>SUELDO</th>
					<th> </th>
					<th> </th>
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
						<td><a href="index.php?action=trabajador&update={$listaTrabajador[i]->get_id()}">Update</a></td>
						<td><a href="index.php?action=trabajador&delete={$listaTrabajador[i]->get_id()}">Delete</a></td>
					</tr>
				</tbody>
			{/section}
		</table>
		<input type="submit" name="create" value="Create">
		<input type="submit" name="read" value="Read">
		<input type="submit" name="exit" value="Exit">
	</form>
</body>
</html>