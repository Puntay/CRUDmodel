<?php
	require_once ('configuration.php');

	if (isset($_GET['action'])) {
		include('controllers/trabajador.php');
	} else {
		include('controllers/main.php');
	}
?>