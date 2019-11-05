<?php
	require('../config.php');
    

	$codigo = $_POST['id'];

	Painel::verificarVisualizacao($codigo);

	echo $codigo;
	
?>