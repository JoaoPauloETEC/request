<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Request - Login</title>

  <!-- Bootstrap e estilo.css -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/reset.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/estiloLogar.css">

  <!-- Importa Google Icon Font e materialize.css -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/materialize.min.css"  media="screen,projection"/>

  <!-- Framework Bulma e Font Awesome -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/all.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/bulma.min.css">

  <!-- Materialize - Para o navegador saber que o site é optimizado para dispositivos móveis -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
  <div class="row conteudoLogin">
    <div class="col l7 m12 s12" id="loginEstilo">
      <section class="hero is-fullheight">

        <div class="row" id="logoPosition">
          <div class="col l12 m12 s12">
            <a href="login.html" class="logoLink">
              <div class="row valign-wrapper">
                <img src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png" id="logoRequest">
                <b id="logoTitulo">REQUEST</b>
              </div>
            </a>
          </div>
        </div>

        <div class="hero-body" id="hero-body">
          <div class="container">

            <div class="row">
              <div class="col l3 m0 s0">
              </div>
              <div class="col l6 m12 s12 center-align">
                <h1 id="tituloEntrar">Entrar</h1>
              </div>
            </div>

            <?php
              if(isset($_POST['entrar'])){
                  $email = $_POST['email'];
                  $senha = $_POST['senha'];
                  $password = md5($senha);
                  $sql = MySql::conectar()->prepare("SELECT * FROM `tb_aluno` WHERE ds_email = ? AND ds_senha = ?");
                  $sql->execute(array($email, $password));
                  if($sql->rowCount() == 1){
                      
                      $info = $sql->fetch();
                      $_SESSION['loginAluno'] = true;
                      $_SESSION['emailAluno'] = $email;
                      $_SESSION['passwordAluno'] = $password;
                      $_SESSION['codigoAluno'] = $info['cd_aluno'];
                      $_SESSION['nomeAluno'] = $info['nm_aluno'];
                      header('Location: '.INCLUDE_PATH);
                      die();

                  }
                  else if($sql->rowCount() == 0){
                      echo '<div class="erro-box">Usúario ou senha incorretos!</div>';
                  }
              }
            ?>

            <!-- Formulario para entrar -->
            <form method="post">
              <div class="row">
                <div class="row">
                  <div class="col l3 m3 s0">
                  </div>
                  <div class="input-field col l6 m6 s12" id="inputEmail">
                    <i class="material-icons prefix far fa-envelope"></i>
                    <input class="form-control" name="email" type="email" placeholder="E-mail">
                  </div>
                </div>
                <div class="row">
                  <div class="col l3 m3 s0">
                  </div>
                  <div class="input-field col l6 m6 s12" id="inputSenha">
                    <i class="material-icons prefix fas fa-lock"></i>
                    <input class="form-control" name="senha" type="password" placeholder="Senha">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col l3 m3 s0">
                </div>
                <center>
                  <div class="col l6 m6 s12">
                    <a href="">
                      <b id="btnNovaSenha">Esqueceu sua senha?</b>
                    </a>
                  </div>
                </center>
              </div>

              <div class="row">
                <div class="col l2 m2 s0">
                </div>
                <div class="col l8 m8 s12">
                  <ul>
                    <hr style="height:2px; margin-top: -10px; border:none; color:#000; background-color:gray;">
                  </ul>
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

            <div class="row hide-on-large-only center-align">
              <div class="col l12 m12 s12">
                <p>Não tem uma conta ainda?
                  <a>
                    <b id="btnCadastrarMobile">Cadastre-se</b>
                  </a>
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>

    <div class="col l5 m12 s12 hide-on-med-and-down" id="cadastrarEstilo">

      <section class="hero is-fullheight">
        <div class="hero-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col l12 m12 s12 center-align">
                <h1 id="tituloCadastrar">Olá Aluno!</h1>
              </div>
            </div>
            <div class="row">
              <div class="col l12 m12 s12">
                <p id="textoCadastrar">Insira seus dados pessoais e inicie sua jornada na REQUEST</p>
              </div>
            </div>
            <div class="row">
              <div class="col l2 m3 s2">
              </div>
              <div class="col l8 m6 s8">
                <div class="form-group">
                  <button type="button" name="button" class="btn btn-block" id="btnCadastrar">Cadastrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>

  <div class="row conteudoCadastro">
    <div class="col l5 m12 s12 hide-on-med-and-down" id="loginEstilo2">
      <section class="hero is-fullheight">

        <div class="row" id="logoPosition2">
          <div class="col l12 m12 s12">
            <a href="login.html" class="logoLink2">
              <div class="row valign-wrapper">
                <img src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png" id="logoRequest2">
                <b id="logoTitulo2">REQUEST</b>
              </div>
            </a>
          </div>
        </div>

        <div class="hero-body" id="hero-body2">
          <div class="container">
            <div class="row">
              <div class="col l12 m12 s12 center-align">
                <h1 id="tituloLogar">Bem vindo de volta!</h1>
              </div>
            </div>
            <div class="row">
              <div class="col l12 m12 s12">
                <p id="textoLogar">Para manter-se conectado conosco, faça o login com seus dados pessoais</p>
              </div>
            </div>
            <div class="row">
              <div class="col l2 m3 s2">
              </div>
              <div class="col l8 m6 s8">
                <div class="form-group">
                  <button type="button" name="button" class="btn btn-block" id="btnEntrar">Entrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="col l7 m12 s12" id="cadastrarEstilo2">

      <section class="hero is-fullheight">

        <div class="row hide-on-large-only" id="logoPosition2">
          <div class="col l12 m12 s12">
            <a href="login.html" class="logoLink2">
              <div class="row valign-wrapper">
                <img src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png" id="logoRequest2">
                <b id="logoTituloMobile">REQUEST</b>
              </div>
            </a>
          </div>
        </div>

        <div class="hero-body" id="hero-body3">
          <div class="container">

            <div class="row">
              <div class="col l12 m12 s12 center-align">
                <h1 id="tituloCadastro">Cadastrar</h1>
              </div>
            </div>
            
            <?php
              if(isset($_POST['cadastrar'])){
                $nome = $_POST['nome'];
                $rm = $_POST['rm'];
                $aluno = $_POST['aluno'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $password = md5($senha);
                $sql = MySql::conectar()->prepare("INSERT INTO tb_aluno (cd_aluno, nm_aluno, nr_rm, ds_tipoAluno, ds_email, ds_senha) VALUES (null, ?, ?, ?, ?, ?)");
                $sql->execute(array($nome,$rm,$aluno,$email,$password));
              }
            ?>

            <!-- Formulario para cadastrar -->
            <form method="post">
              <div class="row">
                <div class="form-group col l2 m2 s0">
                </div>
                <div class="form-group col l5 m5 s12">
                  <input id="inputCadastraNome" name="nome" type="text" class="form-control" placeholder="Nome completo" required>
                </div>
                <div class="form-group col l3 m3 s12">
                  <input id="inputCadastraRM" name="rm" type="text" class="form-control" placeholder="RM" title="O RM deve conter apenas números" pattern="[0-9]{1,}" required>
                </div>
              </div>

              <div class="row">
                <div class="col l1 m1 s1 center-align" id="radioAluno">
                </div>
                <div class="form-group col l5 m5 s5 center-align">
                  <label id="radioAluno">
                    <input class="with-gap" name="aluno" type="radio" id="radioEstilo" required>
                    <span>Aluno</span>
                  </label>
                </div>
                <div class="form-group col l5 m5 s5 center-align">
                  <label id="radioExAluno">
                    <input class="with-gap" name="aluno" type="radio" id="radioEstilo" required>
                    <span>Ex-aluno</span>
                  </label>
                </div>
                <div class="form-group col l1 m1 s1 center-align">
                </div>
              </div>

              <div class="row">
                <div class="form-group col l2 m2 s0">
                </div>
                <div class="form-group col l8 m8 s12">
                  <input id="inputCadastraEmail" name="email" class="form-control" type="email" placeholder="E-mail" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col l2 m2 s0">
                </div>
                <div class="form-group col l4 m4 s12">
                  <input id="inputCadastraSenha" name="senha" class="form-control" type="password" placeholder="Senha" title="A senha que deve conter 6 ou mais caracteres" placeholder="Senha" pattern=".{6,}" required>
                </div>
                <div class="form-group col l4 m4 s12">
                  <input id="inputConfSenha" class="form-control" type="password" placeholder="Confirmar senha" title="A senha que deve conter 6 ou mais caracteres" pattern=".{6,}" required>
                </div>
              </div>

              <div class="row">
                <div class="col l4 m4 s0">
                </div>
                <div class="col l4 m4 s10">
                  <div class="form-group">
                    <button type="submit" name="cadastrar" class="btn btn-block btnCadastrar" id="btnCadastrarUsuario">Cadastrar</button>
                  </div>
                </div>
              </div>
            </form>

            <div class="row hide-on-large-only center-align">
              <div class="col l12 m12 s12">
                <p>Já é cadastrado?
                  <a href="">
                    <b id="btnLogarMobile">Entre</b>
                  </a>
                </p>
              </div>
            </div>
          </div>
      </section>

    </div>
  </div>

  <!-- JavaScript no fim da body para optimizar o carregamento - Jquery e Bootstrap -->
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/comandosLogar.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/materialize.min.js"></script>

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>
