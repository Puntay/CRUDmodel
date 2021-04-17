<?php
	header('Content-Type: text/html; charset=utf-8');

	//**Listar
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

	//** Buscar para modificar
	if (!empty($_GET['update'])) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_id($_GET['update']);

		$trabajadorDAO = new TrabajadorDAO();
		$listaTrabajador = $trabajadorDAO->buscar($trabajadorVO);

		$tpl = new Plantilla();
		$tpl->assign('listaTrabajador', $listaTrabajador);
		$tpl->display('trabajadorModificar.tpl.php');
		exit;
	}

	//** Delete
	if (!empty($_GET['delete'])) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_id($_GET['delete']);

		$trabajadorDAO = new TrabajadorDAO();
		$trabajadorDAO->eliminar($trabajadorVO);
		header('Location: index.php?action=trabajador&listar=TRUE');
		exit;
	}

	//** Grabar
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['grabar'])) ) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_id($_POST['id']);
		$trabajadorVO->set_nom_trab($_POST['nom']);
		$trabajadorVO->set_ape_trab($_POST['ape']);
		$trabajadorVO->set_sueldo($_POST['sue']);

		$trabajadorDAO = new TrabajadorDAO();
		$trabajadorDAO->actualizar($trabajadorVO);
		header('Location: index.php?action=trabajador&listar=TRUE');
		exit();
	}

	//** Read
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['read'])) ) {
		$tpl = new Plantilla();
		$tpl->display('trabajadorBuscar.tpl.php');
		exit;
	}

	//** Buscar
	if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['buscar'])) ) {
		$trabajadorVO = new TrabajadorVO();
		$trabajadorVO->set_id($_POST['id']);

		$trabajadorDAO = new TrabajadorDAO();
		$listaTrabajador = $trabajadorDAO->buscar($trabajadorVO);

		$tpl = new Plantilla();
		$tpl->assign('listaTrabajador', $listaTrabajador);
		$tpl->display('trabajadorMostrar.tpl.php');
		exit();
	}
?>