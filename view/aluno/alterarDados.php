<?php

    include_once "INCLUDE_PATH/config.php";

    $senhaAtual = $_POST['senhaAtual'];
    $novaSenha = $_POST['novaSenha'];
    $confirmaSenha = $_POST['confirmaSenha'];

    $sql = MySql::conectar()->prepare("
    SELECT ds_senha
    FROM tb_aluno
    WHERE cd_aluno = ?
    ");
    $sql->execute(array($_SESSION['codigoAluno']));
    $senha = $sql->fetch();
    if(md5($senhaAtual) == $senha['ds_senha']){
        if( $novaSenha == $confirmaSenha){
            $sql = MySql::conectar()->prepare("
            UPDATE tb_aluno 
            SET ds_senha = ?
            WHERE cd_aluno = ?"
            );
            $sql->execute(array(md5($novaSenha), $_SESSION['codigoAluno']));
            if($sql->rowCount() == 1){
                unset($_POST['alterarSenha']);
                unset($_POST['senhaAtual']);
                unset($_POST['novaSenha']);
                unset($_POST['confirmaSenha']);
                echo "<script>alert('Senha alterada com sucesso');</script>";
                header('Location: '.INCLUDE_PATH);
            }
        }else{
            echo "<script>alert('Senhas precisam ser iguais');</script>";
                header('Location: '.INCLUDE_PATH);
        }
    }else{
        echo "<script>alert('Senha incorreta');</script>";
                header('Location: '.INCLUDE_PATH);
    }
?>