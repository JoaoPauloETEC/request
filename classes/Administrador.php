<?php

    class Administrador{
        //Função se estiver logado
        public static function logado(){
			return isset($_SESSION['loginAdministrador']) ? true : false;
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
    }

?>