<?php
  $listarRequerimento = Secretario::exibirHistorico();
?> 

      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">
          <div class="row conteudo2" id="linhaHeader">
            <div class="input-field col l4 m4 s12">
              <input type="text" id="oHistorico" value="Histórico" readonly>
            </div>
            <div class="col l3 m3 s0">
            </div>
            <div class="input-field col l5 m5 s12" id="inputPesquisar">
              <i class="material-icons prefix fas fa-search"></i>
              <input class="form-control" type="search" placeholder="Pesquisar">
            </div>
          </div>

          <div class="row conteudo2">

            <div class="col l1 m1 s2 center-align" id="positionDownload">
              <a href="#"><i class="fas fa-download" id="iconDownload"></i></a>
            </div>

            <div class="col l2 m3 s5" id="legenda">
              <div class="row conteudo valign-wrapper">
                <i class="fas fa-circle" id="legendaNotifAcc"></i>
                <b id="textLegenda">= Aceito</b>
              </div>
            </div>

            <div class="col l2 m3 s5" id="legenda">
              <div class="row conteudo valign-wrapper">
                <i class="fas fa-circle" id="legendaNotifNeg"></i>
                <b id="textLegenda">= Negado</b>
              </div>
            </div>

            <div class="input-field col l2 m2 s6 right">
              <select class="form-control">
                <option>Todos</option>
                <option>Esta semana</option>
                <option>Este mês</option>
              </select>
            </div>

            <div class="input-field col l3 m3 s6 right">
              <form id="tipo" class="form-control" onchange="document.getElementById('tipo').submit()" method="post">
                <select name="tipo" class="form-control">
                  <option value="" disabled selected>Selecione um tipo</option>
                  
                  <?php

                    $tipoRequerimento = Secretario::listarTiposRequerimento();

                    foreach($tipoRequerimento as $key => $value):
                  ?>

                    <option value="<?php echo $value['nm_assunto_requerimento']; ?>"><?php echo $value['nm_assunto_requerimento']; ?></option>
                  
                  <?php
                    endforeach;
                  ?>

                </select>
              </form>
            </div>

          </div>

          <div class="row conteudo2" id="titulosEmails">
            <div class="col l1 m1 s1">
              <label id="checkboxTitulos">
                <input type="checkbox" class="filled-in" onClick="toggle(this)" id="checkboxTitleStyle">
                <span></span>
              </label>
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="N° de protocolo" readonly id="estiloTitulos">
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="Aluno" readonly id="estiloTitulos">
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="Secretário" readonly id="estiloTitulos">
            </div>
            <div class="col l3 m3 s3 hide-on-small-only">
              <input type="text" value="Tipo de requerimento" readonly id="estiloTitulos">
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="Data" readonly id="estiloTitulos">
            </div>
          </div>
          <div class="row emails">
            <div class="col l12 m12 s12" id="colHistoricoEmails">
              <div class="row conteudo">
                <div class="col l12 m12 s12">
                  <ul>

                  <?php
                      if(isset($_POST['tipo']))
                      {
                        $tipo = $_POST['tipo'];

                        $assunto = Secretario::pesquisaTipo($tipo);

                        foreach($assunto as $key => $value)
                        {
                          $codigo = $value['cd_requerimento'];
                          $aluno = $value['nm_aluno'];
                          $secretario = $value['nm_funcionario'];
                          $assunto = $value['nm_assunto_requerimento'];
                          $data = $value['dt_recebimento'];
  
                          $data = explode("-", $data);
                            
                          list($dia, $mes, $ano) = $data;
                            
                          $data = "$ano/$mes/$dia";
                  ?>

                    <li>
                      <a>
                        <div class="row historico" id="conteudoHistorico">
                          <div class="col l1 m1 s12">
                            <label id="checkboxLinha">
                              <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                              <span></span>
                            </label>
                          </div>
                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                            <input type="text" value="Protocolo:" id="titleEmail" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputEmails">
                            <input type="text" value="<?php echo $codigo; ?>" id="protocoloInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                            <input type="text" value="Aluno:" id="titleEmail" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputEmails">
                            <input type="text" value="<?php echo $aluno; ?>" id="alunoInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                            <input type="text" value="Secretário:" id="titleEmail" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputEmails">
                            <input type="text" value="<?php echo $secretario; ?>" id="secretarioInput" readonly>
                          </div>

                          <div class="col l0 m0 s5 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                            <input type="text" value="Requerimento:" id="titleEmail" readonly>
                          </div>
                          <div class="col l3 m3 s7" id="estiloInputEmails">
                            <input type="text" value="<?php echo $assunto; ?>" id="declaracaoInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only center-align" id="estiloInputEmails">
                            <input type="text" value="Data:" id="titleEmail" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputEmails">
                            <input type="text" value="<?php echo $data; ?>" id="dateInput" readonly>
                            <i class="fas fa-circle right" id="notifAceito"></i>
                          </div>
                        </div>
                      </a>
                    </li>

                  <?php
                        }
                      }
                      else if(isset($_POST['pesquisar']))
                      {
                        $pesquisa = $_POST['pesquisar'];

                        $pesquisa = Secretario::pesquisaHistorico($pesquisa);

                        foreach($pesquisa as $key => $value)
                        {
                          $data = $value['dt_envio'];
  
                          $data = explode("-", $data);
                            
                          list($dia, $mes, $ano) = $data;
                            
                          $data = "$ano/$mes/$dia";
                    ?>

                      <li>
                        <a>
                          <div class="row historico" id="conteudoHistorico">
                            <div class="col l1 m1 s12">
                              <label id="checkboxLinha">
                                <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                                <span></span>
                              </label>
                            </div>
                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Protocolo:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $codigo; ?>" id="protocoloInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Aluno:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $aluno; ?>" id="alunoInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Secretário:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $secretario; ?>" id="secretarioInput" readonly>
                            </div>

                            <div class="col l0 m0 s5 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Requerimento:" id="titleEmail" readonly>
                            </div>
                            <div class="col l3 m3 s7" id="estiloInputEmails">
                              <input type="text" value="<?php echo $assunto; ?>" id="declaracaoInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only center-align" id="estiloInputEmails">
                              <input type="text" value="Data:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $data; ?>" id="dateInput" readonly>
                              <i class="fas fa-circle right" id="notifAceito"></i>
                            </div>
                          </div>
                        </a>
                      </li>

                    <?php
                        }
                      }
                      else
                      {
                        foreach($listarRequerimento as $key => $value){
                          $codigo = $value['cd_requerimento'];
                          $aluno = $value['nm_aluno'];
                          $secretario = $value['nm_funcionario'];
                          $assunto = $value['nm_assunto_requerimento'];
                          $data = $value['dt_recebimento'];

                          $data = explode("-", $data);
                            
                          list($dia, $mes, $ano) = $data;
                            
                          $data = "$ano/$mes/$dia";
                    ?>

                      <li>
                        <a>
                          <div class="row historico" id="conteudoHistorico">
                            <div class="col l1 m1 s12">
                              <label id="checkboxLinha">
                                <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                                <span></span>
                              </label>
                            </div>
                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Protocolo:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $codigo; ?>" id="protocoloInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Aluno:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $aluno; ?>" id="alunoInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Secretário:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $secretario; ?>" id="secretarioInput" readonly>
                            </div>

                            <div class="col l0 m0 s5 hide-on-large-only hide-on-med-only" id="estiloInputEmails">
                              <input type="text" value="Requerimento:" id="titleEmail" readonly>
                            </div>
                            <div class="col l3 m3 s7" id="estiloInputEmails">
                              <input type="text" value="<?php echo $assunto; ?>" id="declaracaoInput" readonly>
                            </div>

                            <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only center-align" id="estiloInputEmails">
                              <input type="text" value="Data:" id="titleEmail" readonly>
                            </div>
                            <div class="col l2 m2 s8" id="estiloInputEmails">
                              <input type="text" value="<?php echo $data; ?>" id="dateInput" readonly>
                              <i class="fas fa-circle right" id="notifAceito"></i>
                            </div>
                          </div>
                        </a>
                      </li>

                    <?php
                        }
                      }
                    ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>