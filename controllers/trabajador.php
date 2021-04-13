<?php
	header('Content-Type: text/html; charset=utf-8');

	if (!empty($_GET['listar']) ) {
		$trabajadorDAO = new TrabajadorDAO();
		$listaTrabajador = $trabajadorDAO->listarTrabajador();

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

?>