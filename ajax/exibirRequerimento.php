<?php
	include('../config.php');
    

	$_SESSION['codigoRequerimento'] = $_POST['id'];

	Painel::exibirRequerimento($_SESSION['codigoRequerimento']);
	
?>