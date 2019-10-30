<?php
	include('../config.php');
    

	$_SESSION['codigoRequerimento'] = $_POST['id'];

	Painel::verificarVisualizacao($_SESSION['codigoRequerimento']);
	
?>