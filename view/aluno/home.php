<?php
  $listarRequerimento = Painel::caixaEntrada();

    if(Painel::preencherDados() == true){
        echo "<script>alert('preencher campos');</script>";
    }
  //$visualizar = Painel::visualizarRequerimento();
?>
        <div class="row conteudo">
          <div class="col l1 m0 s0">
          </div>
          <div class="col l11 m12 s12">
            <div class="row conteudo" id="conteudo">
              <div class="row search">
                <form method="post">
                  <div class="input-field col l5 m5 s12 left">
                    <i class="material-icons prefix fas fa-search"></i>
                    <input class="form-control" name="pesquisar" type="search" placeholder="Pesquisar">
                  </div>
                </form>
                <div class="col l7 m7 s12 hide-on-small-only">
                  <button type="button" name="button" class="btn right" id="gerarPDF">
                    <i class="far fa-sticky-note"></i> Gerar PDF
                  </button>
                </div>
                <div class="col l7 m7 s12 hide-on-large-only hide-on-med-only center-align">
                  <button type="button" name="button" class="btn" id="gerarPDF">
                    <i class="far fa-sticky-note"></i> Gerar PDF
                  </button>
                </div>
              </div>
              <ul>
                <hr style="height:2px; width:100%; border:none; color:#333333; background-color:#333333; margin-bottom: 5px;">
              </ul>
              <div class="row emails">
                <div class="col l5 m5 s12" id="emailsEstilo">
                  <ul>
                    <?php
                      if(isset($_POST['pesquisar'])){

                        $pesquisa = $_POST['pesquisar'];

                        $pesquisa = Painel::pesquisaAssunto($pesquisa);

                        foreach($pesquisa as $key => $value){
                          $data = $value['dt_envio'];
  
                          $data = explode("-", $data);
                            
                          list($dia, $mes, $ano) = $data;
                            
                          $data = "$ano/$mes/$dia";
                    ?>
                    <li>
                      <a href="#">
                        <div class="row email">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b id="tituloEmail"><?php echo $value['nm_assunto_requerimento']; ?></b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail"><?php echo $data; ?></b>
                            </div>
                            <div class="col l1 m1 s1 right">
                              <i class="fas fa-circle right" id="notifNovo"></i>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail"><?php echo $value['ds_requerimento'] ?></p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php
                        }
                      }
                      else
                      {
                        foreach($listarRequerimento as $key => $value)
                        {
                          $codigo = $value['cd_requerimento'];
                          $nome = $value['nm_assunto_requerimento'];
                          $descricao = $value['ds_requerimento'];
                          $data = $value['dt_envio'];
                          $visualizado = $value['sg_status'];
  
                          $data = explode("-", $data);
                            
                          list($dia, $mes, $ano) = $data;
                            
                          $data = "$ano/$mes/$dia";

                          if($visualizado == 0)
                          {
                    ?>
                    <li onclick="var codigo = <?php echo $codigo; ?>; $.post('ajax/formulario.php', { id: codigo }).done(function(data){ window.location.reload(); });">
                        <div class="row email">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b name="assunto" id="tituloEmail"><?php echo $nome; ?></b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail"><?php echo $data; ?></b>
                            </div>
                            <div class="col l1 m1 s1 right">
                              <i class="fas fa-circle right" id="notifNovo"></i>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail"><?php echo $descricao; ?></p>
                            </div>
                          </div>
                        </div>
                    </li>
                    <?php
                          }
                          else
                          {
                    ?>
                    <li>
                      <a href="#">
                        <div class="row email">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b id="tituloEmail"><?php echo $nome; ?></b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail"><?php echo $data; ?></b>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail"><?php echo $descricao; ?></p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php
                          }
                        } 
                      }
                    ?>
                    <!-- <li>
                      <a href="#">
                        <div class="row email">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b id="tituloEmail">Declaração em geral</b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail">21/08/2019</b>
                            </div>
                            <div class="col l1 m1 s1 right">
                              <i class="fas fa-circle right" id="notifNovo"></i>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail">Solicitação de uma declaração escolar para retirada do Passe livre.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row email">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b id="tituloEmail">Declaração em geral</b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail">21/08/2019</b>
                            </div>
                            <div class="col l1 m1 s1 right">
                              <i class="fas fa-circle right" id="notifNovo"></i>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail">Solicitação de uma declaração escolar para retirada do Passe livre.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row email" id="emailSelected">
                          <div class="row emailTituloData">
                            <div class="col l6 m5 s6">
                              <b id="tituloEmail">Declaração em geral</b>
                            </div>
                            <div class="col l5 m5 s5">
                              <b id="dataEmail">21/08/2019</b>
                            </div>
                            <div class="col l1 m1 s1 right">
                              <i class="fas fa-circle right" id="notifNovoDisabled"></i>
                            </div>
                          </div>
                          <div class="row emailAssunto">
                            <div class="col l12 m12 s12">
                              <p id="assuntoEmail">Solicitação de uma declaração escolar para retirada do Passe livre.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li> -->
                  </ul>
                </div>
                <div class="col l7 m7 s12" id="pdfCol">
                  <div class='container' id="pdfEstilo">
                    <input type="text" id="nomeReq">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
