<?php

    class Painel
    {	
    	//Função se estiver logado
        public static function logado(){
			return isset($_SESSION['loginAluno']) ? true : false;
		} 

		//Função loggout
		public static function loggout(){
			session_destroy();
			header('Location: '.INCLUDE_PATH);
		}

		//Função da Caixa de Entrada de todos requerimentos
		public static function caixaEntrada(){

			$codigo = $_SESSION['codigoAluno'];

            $sql = MySql::conectar()->prepare("
            	SELECT *
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_aluno = ? AND ds_resposta IS NOT NULL ORDER BY dt_envio DESC;
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		public static function verificarVisualizacao($codReq){

			$codigo = $codReq;

            $sql = MySql::conectar()->prepare("
			UPDATE `tb_requerimento` SET `sg_status` = '1' WHERE `cd_requerimento` = ?;
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		public static function exibirHistorico(){

			$codigo = $_SESSION['codigoAluno'];

            $sql = MySql::conectar()->prepare("
            	SELECT *
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_aluno = ?;
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		//Função para pesquisar assunto de requerimento
		public static function pesquisaAssunto($texto){

			$codigo = $_SESSION['codigoAluno'];

            $sql = MySql::conectar()->prepare("
            	SELECT nm_assunto_requerimento, dt_envio, ds_requerimento
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_aluno = ? AND ds_resposta IS NOT NULL AND nm_assunto_requerimento LIKE '$texto%' ORDER BY dt_envio DESC;
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		public static function pesquisaHistorico($texto){

			$codigo = $_SESSION['codigoAluno'];

            $sql = MySql::conectar()->prepare("
            	SELECT nm_assunto_requerimento, dt_envio, ds_requerimento
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_aluno = ? AND nm_assunto_requerimento LIKE '$texto%';
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		public static function pesquisaTipo($texto){

			$codigo = $_SESSION['codigoAluno'];

            $sql = MySql::conectar()->prepare("
            	SELECT nm_assunto_requerimento, dt_envio, ds_requerimento
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_aluno = ? AND nm_assunto_requerimento = '$texto';
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}

		public static function listarTiposRequerimento(){

            $sql = MySql::conectar()->prepare("
            	SELECT *
	            FROM tb_tipo_requerimento t;
            ");

            $sql->execute();
			
			return $sql->fetchAll();

		}

		public static function solicitarRequerimento($aluno, $assunto, $envio, $descricao, $recebimento){

			$sql = MySql::conectar()->prepare("INSERT INTO `tb_requerimento` (`cd_requerimento`, `id_aluno`, `id_tipo_requerimento`, `dt_envio`, `ds_requerimento`, `dt_recebimento`) VALUES (null, ?, ?, ?, ?, ?);");

			$sql->execute(array($aluno, $assunto, $envio, $descricao, $recebimento));
		}
	}

?>