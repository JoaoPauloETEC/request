
        <div class="row conteudo">
          <div class="col l1 m0 s0">
          </div>
          <div class="col l11 m12 s12" id="pageRequerimento">
            <div class="row conteudo">
              <div class="row primeiraLinha">
                <div class="col l12 m12 s12" id="paginaTitulo">
                  <b>Solicitação de Requerimento</b>
                </div>
              </div>
              <ul>
                <hr style="height:2px; width:100%; border:none; color:#333333; background-color:#333333; margin-bottom: 0px;">
              </ul>

              <div class="row linhaConteudo">

                <div class="col l1 m1 s0">
                </div>

                <?php
                  //Se ele selecionar um assunto e enviar, entra nesse IF
                  if(isset($_POST['assuntos']))
                  {
                    $requerimento = $_POST['requerimentos'];

                    $_SESSION['requerimento'] = $requerimento;

                    include('formularios/form2.php');//Se tudo der certo manda pro form2
                  }

                  //Primeiro Button para retornar a pagina anterior
                  else if(isset($_POST['anterior']))
                  {
                    include('formularios/form1.php');
                  }

                  //Se ele enviar os dados do assunto e enviar, entra nesse IF
                  else if(isset($_POST['formulario']))
                  {
                    $_SESSION['descricao'] = $_POST['descricao'];

                    include('formularios/form3.php');
                  }
                  //Segundo Button para retornar a pagina anterior
                  else if(isset($_POST['anterior2']))
                  {
                    include('formularios/form2.php');
                  }

                  //Se ele confirmar os dados e enviar entra nesse IF
                  else if(isset($_POST['solicitar']))
                  {
                    $envio = date('Y/m/d');

                    $recebimento = date('Y/m/d');

                    Painel::solicitarRequerimento($_SESSION['codigoAluno'], $_SESSION['requerimento'], $envio, $_SESSION['descricao'], $recebimento);

                    //Concluido a solicitção
                    echo '<script> alert("Solicitado"); </script>';

                    include('formularios/form1.php');
                  }

                  //Inicia abrindo form1 
                  else{
                    include('formularios/form1.php');
                  }
                ?>

                <div class="col l0 m0 s0">
                </div>

                <div class="col l6 m6 s12">
                  <div class="hero-body" id="heroEtapasRequerimento">
                    <div class="container" id="etapasRequerimento">
                      <ul class="steps is-vertical">
                        <li class="steps-segment">
                          <span href="#" class="steps-marker"></span>
                          <div class="steps-content">
                            <p class="has-text-weight-bold title is-size-4">Selecionar tipo de Requerimento</p>
                          </div>
                        </li>
                        <li class="steps-segment is-active">
                          <span href="#" class="steps-marker"></span>
                          <div class="steps-content">
                            <p class="has-text-weight-bold title is-size-4">Preencher formulário</p>
                          </div>
                        </li>
                        <li class="steps-segment">
                          <span href="#" class="steps-marker"></span>
                          <div class="steps-content">
                            <p class="has-text-weight-bold title is-size-4">Confirmar dados pessoais</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>