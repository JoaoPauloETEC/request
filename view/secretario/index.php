<?php

    include('../../config.php');

    if(Secretario::logado() == true){
        include('login.php');
    }else{
        $_SESSION['loginSecretario'] = true;
        $_SESSION['codigoFuncionario'] = 8;
        $_SESSION['nomeFuncionario'] = 'Fylipe Pablo';
        include('main.php');
    }
    
?>