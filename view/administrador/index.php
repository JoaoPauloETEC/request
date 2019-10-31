<?php

    include('../../config.php');

    if(Administrador::logado() == false){
        include('../secretario/login.php');
    }else{
        //$_SESSION['loginAdministrador'] = true;
        include('main.php');
    }
    
?>