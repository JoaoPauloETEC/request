<?php

    include('../../config.php');

    if(Secretario::logado() == false){
        include('login.php');
    }else{
        include('main.php');
    }
    
?>