<?php

    class Secretario{
        //Função se estiver logado
        public static function logado(){
			return isset($_SESSION['loginSecretario']) ? true : false;
		} 

		//Função loggout
		public static function loggout(){
			session_destroy();
			header('Location: '.INCLUDE_PATH_SECRETARIO);
		}
		public static function redirect($url){
			echo '<script>location.href="'.$url.'"</script>';
			die();
		}

		// public static function pesquisaRequerimento($texto){

        //     $sql = MySql::conectar()->prepare("
        //     	SELECT nm_assunto_requerimento, dt_envio, ds_requerimento
	    //         FROM tb_tipo_requerimento t
	    //         INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	    //         INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	    //         WHERE id_funcionario = "";
        //     ");

        //     $sql->execute(array($codigo));
			
		// 	return $sql->fetchAll();

		// }

		public static function caixaEntrada()
		{	
			$codigo = $_SESSION['codigoFuncionario'];

            $sql = MySql::conectar()->prepare("
				SELECT *
	            FROM tb_tipo_requerimento t
	            INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	            INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	            WHERE id_funcionario is null OR id_funcionario = ? AND ds_resposta is null ORDER BY dt_recebimento DESC;
            ");

            $sql->execute(array($codigo));
			
			return $sql->fetchAll();

		}
		
		
		public static function pesquisaTipo($texto){

            $sql = MySql::conectar()->prepare("
				SELECT cd_requerimento, nm_aluno, nm_funcionario, nm_assunto_requerimento, dt_recebimento 
				FROM tb_tipo_requerimento 
				RIGHT JOIN tb_requerimento ON cd_tipo_requerimento = id_tipo_requerimento 
				LEFT JOIN tb_funcionario ON cd_funcionario = id_funcionario 
				LEFT JOIN tb_aluno ON cd_aluno = id_aluno
	            WHERE nm_assunto_requerimento = '$texto';
            ");

            $sql->execute();
			
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

		public static function exibirHistorico(){

            $sql = MySql::conectar()->prepare("
			SELECT cd_requerimento, nm_aluno, nm_funcionario, nm_assunto_requerimento, dt_recebimento 
			FROM tb_tipo_requerimento 
			RIGHT JOIN tb_requerimento ON cd_tipo_requerimento = id_tipo_requerimento 
			LEFT JOIN tb_funcionario ON cd_funcionario = id_funcionario 
			LEFT JOIN tb_aluno ON cd_aluno = id_aluno;
            ");

            $sql->execute();
			
			return $sql->fetchAll();

		}

		// public static function exibirRequerimento()
		// {	
		// 	$codigo = $_SESSION['codigoRequerimento'];

        //     $sql = MySql::conectar()->prepare("
		// 		SELECT *
	    //         FROM tb_tipo_requerimento t
	    //         INNER JOIN tb_requerimento r ON t.cd_tipo_requerimento = r.id_tipo_requerimento
	    //         INNER JOIN tb_aluno a ON a.cd_aluno = r.id_aluno
	    //         WHERE cd_requerimento = ?;
        //     ");

        //     $sql->execute(array($codigo));
			
		// 	return $sql->fetchAll();

		// }
    }

?>