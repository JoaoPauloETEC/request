<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Request - Login</title>

  <!-- Bootstrap e estilo.css -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/reset.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/estiloLogar.css">

  <!-- Importa Google Icon Font e materialize.css -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/materialize.min.css"  media="screen,projection"/>

  <!-- Framework Bulma e Font Awesome -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/all.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/bulma.min.css">

  <!-- Materialize - Para o navegador saber que o site é optimizado para dispositivos móveis -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

  <body>
    <div class="row conteudoLogin">
      <div class="col l12 m12 s12" id="loginEstilo">
        <section class="hero is-fullheight" id="colorFullHeight">

          <div class="hero-body">
            <div class="container">
              <?php
                if(isset($_POST['entrar'])){
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $password = md5($senha);
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_funcionario` WHERE ds_email = ? AND ds_senha = ?");
                    $sql->execute(array($email,$password));
                    if($sql->rowCount() == 1){
                        $info = $sql->fetch();
                        $_SESSION['emailFuncionario'] = $email;
                        $_SESSION['passwordFuncionario'] = $password;
                        $_SESSION['codigoFuncionario'] = $info['cd_funcionario'];
                        $_SESSION['nomeFuncionario'] = $info['nm_funcionario'];
                        $_SESSION['nivelFuncionario'] = $info['nr_nivel_acesso'];
                        if($_SESSION['nivelFuncionario'] == 1){
                          $_SESSION['loginAdministrador'] = true;
                          Administrador::redirect(INCLUDE_PATH_ADMIN);
                        }
                        else if($_SESSION['nivelFuncionario'] == 2){
                          $_SESSION['loginSecretario'] = true;
                          Secretario::redirect(INCLUDE_PATH_SECRETARIO);
                        }
                        die();
                    }else{
                        echo '<div class="erro-box">Usúario ou senha incorretos!</div>';
                    }
                }
              ?>
              <form method="POST">
                <div class="row">
                  <div class="col l3 m3 s0">
                  </div>
                  <div class="col l7 m7 s12">
                    <a href="login.html" class="logoLink">
                      <div class="row valign-wrapper" id="centerLogo">
                        <img src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png" id="logoRequest">
                        <b id="logoTitulo">REQUEST</b>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div class="row">
                    <div class="col l3 m3 s0">
                    </div>
                    <div class="col l6 m6 s12" id="inputEmail">
                      <input class="form-control" name="email" type="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l3 m3 s0">
                    </div>
                    <div class="col l6 m6 s12" id="inputSenha">
                      <input class="form-control" name="senha" type="password" placeholder="Senha">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l3 m3 s0">
                  </div>
                  <div class="col l6 m6 s12 center-align">
                    <a href="">
                      <b id="btnNovaSenha">Esqueceu sua senha?</b>
                    </a>
                  </div>
                </div>

                <div class="row">
                  <div class="col l4 m4 s0">
                  </div>
                  <div class="col l4 m4 s12">
                    <button type="submit" name="entrar" class="btn btn-block" id="btnLogar">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- JavaScript no fim da body para optimizar o carregamento - Jquery e Bootstrap -->
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/comandos.js"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/materialize.min.js"></script>

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </body>
</html>
