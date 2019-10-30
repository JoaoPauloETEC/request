<?php

    include('../../config.php');

    if(Administrador::logado() == true){
        include('../secretario/login.php');
    }else{
        $_SESSION['loginAdministrador'] = true;
        include('main.php');
    }
    
?>