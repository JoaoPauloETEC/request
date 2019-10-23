<?php

    //include('../../config.php');

    if($_SESSION['loginAdministrador'] == true){
        echo "a";
        //include('../administrador/');
    }
    else if($_SESSION['loginSecretario'] == true){
        //include('main.php');
        echo "s";
    }
    
?>