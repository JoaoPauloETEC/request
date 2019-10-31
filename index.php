<?php

    include('config.php');

    $url = isset($_GET['url']) ? $_GET['url'] : '';

    if($url == "funcionario"){
        header("Location: ".INCLUDE_PATH_SECRETARIO);
    }
    else if($url != "home" && $url != "requerimento" && $url != "historico" && $url != "perfil" &&  $url != "ajuda" &&  $url != ""){
        echo "pagina de erro";        
    }

    if(Painel::logado() == false){
        include('view/aluno/login.php');
    }else{
        // $_SESSION['loginAluno'] = true;
        // $_SESSION['codigoAluno'] = 8;
        // $_SESSION['nomeAluno'] = 'João Paulo';
        include('view/aluno/main.php');
    }
    
?>