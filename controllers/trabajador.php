<?php
	header('Content-Type: text/html; charset=utf-8');

	if (!empty($_GET['listar']) ) {
		$trabajadorDAO = new TrabajadorDAO();
		$listaTrabajador = $trabajadorDAO->listar();

		$tpl = new Plantilla();
		$tpl->assign('listaTrabajador', $listaTrabajador);
		$tpl->display('trabajadorListar.tpl.php');
		exit();
	}

	//** Exit
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['exit'])) ) {
		header('Location: index.php');
		exit;
	}

	//** Crear
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['create'])) ) {
		$tpl = new Plantilla();
		$tpl->display('trabajadorFormulario.tpl.php');
		exit;
	}

	//** Insert
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['insert'])) ) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_nom_trab($_POST['nom']);
		$trabajadorVO->set_ape_trab($_POST['ape']);
		$trabajadorVO->set_fec_ini($_POST['fec']);
		$trabajadorVO->set_sueldo($_POST['sue']);

		$trabajadorDAO = new TrabajadorDAO();
		$trabajadorDAO->insertar($trabajadorVO);
		header('Location: index.php?action=trabajador&listar=TRUE');
		exit();
	}

	//** Salir
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['salir'])) ) {
		header('Location: index.php?action=trabajador&listar=TRUE');
		exit;
	}

	if (!empty($_GET['update'])) {
		echo "ACTUALIZAR";
		exit;
	}

	if (!empty($_GET['delete'])) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_id($_GET['delete']);

		$trabajadorDAO = new TrabajadorDAO();
		$trabajadorDAO->eliminar($trabajadorVO);
		header('Location: index.php?action=trabajador&listar=TRUE');
		exit;
	}
?>