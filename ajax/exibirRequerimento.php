<?php
	include('../config.php');
    

	$codigo = $_POST['id'];

	$exibe =  Painel::exibirRequerimento($codigo);

	foreach($exibe as $key => $value){
		$id = $value['cd_requerimento'];
		$assunto = $value['nm_assunto_requerimento'];
	}

	$registro = array(
		'requerimento' => array(
			'id' => $id,
			'assunto' => $assunto
		)
	);

	echo json_encode($registro);
	
?>