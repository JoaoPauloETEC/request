<?php

    session_start();
    
    date_default_timezone_set('America/Sao_Paulo');
    
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoload.php');
        }
        require('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
     

    define('INCLUDE_PATH','http://request.etec.unaux.com/');
    define('INCLUDE_PATH_SECRETARIO',INCLUDE_PATH.'view/secretario/');
    define('INCLUDE_PATH_ADMIN',INCLUDE_PATH.'view/administrador/');
    
    //Conectar com Banco de Dados
    define('HOST','sql300.unaux.com');
    define('USER','unaux_24713842');
    define('PASSWORD','u5h34f');
    define('DATABASE','unaux_24713842_request');
    
    //Funções
    function pegaAssunto($assunto){
        $array =[
            '0' => 'Destrancamento de matrícula',
            '1' => 'Transferência',
            '2' => 'Administrador',
            '3' => 'Justificativa de Faltas',
            '4' => 'Prova Substituta',
            '5' => 'Declarações em Geral',
            '6' => 'Rematrícula fora de data',
            '7' => 'Oficio',
            '8' => 'Carta de Apresentação',
            '9' => 'Outros',
            '10' => 'Sugestões/Críticas/Elogios'
        ];

        return $array[$assunto];
    }
?>