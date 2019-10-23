<?php

    include('../../config.php');

    if(Administrador::logado() == false){
        include('../secretario/login.php');
    }else{
        include('main.php');
    }
    
?>