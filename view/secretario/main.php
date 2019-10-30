<?php
  
    if(isset($_GET['loggout'])){
        Secretario::loggout();
    }

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Request - <?php echo ucfirst($url); ?></title>

  <!-- Bootstrap e estilo.css -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/reset.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/secretario/estilo.css">

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
  <section class="hero is-fullheight" id="heroFull">
    <div class="navbar-fixed">
      <nav class="bgtopo has-navbar-fixed-top">
        <div class="nav-wrapper container-fluid">
          <div class="row">
            <div class="col l3 m3 s3 left">
              <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
              </a>
            </div>
            <div class="col l9 m9 s9 right nomeSecretario">
              <div class="dropdown right" id="dropdownSecretarioButton">
                <button class="dropdown-toggle" data-toggle="dropdown" id="downButton">
                  <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" id="dropdownSecretarioEstilo">
                  <li><a data-target="modalSec" class="modal-trigger" href="#modalSec">Meu Perfil</a></li>
                  <li><a href="<?php echo INCLUDE_PATH_SECRETARIO; ?>?loggout">Sair</a></li>
                </ul>
              </div>
              <ul class="right">
                <p id="nomeSecretario"><?php echo $_SESSION['nomeFuncionario']; ?></p>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
      <li>
        <a href="<?php echo INCLUDE_PATH; ?>home" class="waves-effect" id="opcoesMenuMobile">
          <i class="material-icons" id="opcoesMenuMobile">home</i>Ínicio
        </a>
      </li>
      <li>
        <a href="<?php echo INCLUDE_PATH_SECRETARIO; ?>historico" class="waves-effect" id="opcoesMenuMobile">
          <i class="material-icons" id="opcoesMenuMobile">history</i>Histórico
        </a>
      </li>
      <li>
        <a data-target="modalSec" href="#modalSec" class="waves-effect modal-trigger" id="opcoesMenuMobile">
          <i class="material-icons" id="opcoesMenuMobile">person
          </i>Minha conta
        </a>
      </li>
    </ul>
    <section class="main hide-on-med-and-down">
      <aside class="keep">
        <ul id="marginItens">
          <li>
            <a href="<?php echo INCLUDE_PATH_SECRETARIO; ?>home">
              <span><i class="material-icons">home</i></span>
               Ínicio
            </a>
          </li>
          <li>
            <a href="<?php echo INCLUDE_PATH_SECRETARIO; ?>historico">
              <span><i class="material-icons">history</i></span>
               Histórico
            </a>
          </li>
          <li>
            <a data-target="modalSec" class="modal-trigger" href="#modalSec">
              <span><i class="material-icons">person</i></span>
               Minha conta
            </a>
          </li>
        </ul>
      </aside>
    </section>

    <?php
      include 'perfilSec.php';
    ?>

    <section class="hero is-fullheight-with-navbar" id="heroFullHeight">
      <?php
        if(file_exists($url.'.php'))
        {
            include($url.'.php');
        }
        else{
            if($url != 'home'){
                include('404.php');
            }
            else{
                include('home.php');
            }
        }
      ?>
    </section>

  </section>

  <!-- JavaScript no fim da body para optimizar o carregamento - Jquery e Bootstrap -->
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/comandos.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/secretario/materialize.min.js"></script>

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>

</body>
</html>
