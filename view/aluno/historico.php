<?php
  $listarRequerimento = Painel::exibirHistorico();
?> 
        <div class="row conteudo">
          <div class="col l1 m0 s0">
          </div>
          <div class="col l11 m12 s12" id="pageHistorico">

            <div class="row filtro">
              <form method="post">
                <div class="input-field col l3 m12 s12">
                  <i class="material-icons prefix fas fa-search"></i>
                  <input class="form-control" type="search" name="pesquisar" placeholder="Pesquisar">
                </div>
              </form>
              <div class="col l2 m12 s12 center-align hide-on-med-and-down" id="estiloInputMenu">
                <input type="text" name="" value="Filtros" id="textFiltros" readonly>
              </div>
              <div class="col l2 m12 s12 center-align hide-on-large-only" id="estiloInputMenu">
                <input type="text" name="" value="Filtros" id="textFiltrosMobile" readonly>
              </div>
              <div class="col l2 m6 s12" id="configSelectFiltro">
                <div class="form-group">
                  <form id="tipo" method="POST" onchange="document.getElementById('tipo').submit()">
                    <select name="tipo" class="form-control" id="selectAlign">
                      <option value="" disabled selected>Selecione um tipo</option>
                    <?php

                      $tipoRequerimento = Painel::listarTiposRequerimento();

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
              <div class="col l1 m0 s0">
              </div>
              <div class="col l4 m6 s12 center-align" id="estiloFiltro">
                <ul>
                  <li id="opcoesFiltro">
                    <a href="#" class="filtro left" id="fonteFiltroEstilo1">
                      Todos
                    </a>
                    <a href="#" class="filtro center" id="fonteFiltroEstilo2">
                      Semana
                    </a>
                    <a href="#" class="filtro right" id="fonteFiltroEstilo3">
                      Mês
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row titulos hide-on-med-and-down">
              <div class="col l1 m1 s12">
                <label id="checkboxAllLinha">
                  <input type="checkbox" class="filled-in" onClick="toggle(this)" id="checkboxAllStyle">
                  <span></span>
                </label>
              </div>
              <div class="col l4 m4 s12">
                <input class="center-align" type="text" value="Tipo de requerimento" id="estiloInputTitle" readonly>
              </div>
              <div class="col l2 m2 s12">
                <input class="center-align" type="text" value="Envio" id="estiloInputTitle" readonly>
              </div>
              <div class="col l2 m2 s12">
                <input class="center-align" type="text" value="Entrega" id="estiloInputTitle" readonly>
              </div>
              <div class="col l2 m2 s12">
                <input class="center-align" type="text" value="Situação" id="estiloInputTitle" readonly>
              </div>
              <div class="col l1 m1 s12">
                <input class="center-align" type="text" value="PDF" id="estiloInputTitle" readonly>
              </div>
            </div>

            <div class="row" id="scroll">
              <div class="col l12 m12 s12">
                <div class="hero-body" id="heroHistorico">
                  <div class="container emailsHistorico">
                    <ul id="emails">
                    <?php
                        if(isset($_POST['tipo'])){
	                        $tipo = $_POST['tipo'];

                          $assunto = Painel::pesquisaTipo($tipo);

                          foreach($assunto as $key => $value){
                            $data = $value['dt_envio'];
    
                            $data = explode("-", $data);
                              
                            list($dia, $mes, $ano) = $data;
                              
                            $data = "$ano/$mes/$dia";
                    ?>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoHistorico">
                          <div class="col l1 m1 s1">
                            <label id="checkboxLinha">
                              <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                              <span></span>
                            </label>
                          </div>
                          <div class="col l4 m4 s11" id="estiloInputEmails">
                            <input class="center-align" type="text" value="<?php echo $value['nm_assunto_requerimento']; ?>" id="assuntoHistorico" readonly>
                          </div>
                          <div class="col l2 m2 s6" id="estiloInputEmails">
                            <input class="center-align" type="text" value="<?php echo $data; ?>" id="envioHistorico" readonly>
                          </div>
                          <div class="col l2 m2 s6" id="estiloInputEmails">
                            <input class="center-align" type="text" value="<?php echo $data; ?>" id="entregaHistorico" readonly>
                          </div>
                          <div class="col l2 m2 s6" id="estiloInputEmails">
                            <input class="center-align" type="text" value="Aceito" id="situacaoHistorico"  readonly>
                          </div>
                          <div class="col l1 m1 s6 center-align">
                            <ul>
                              <li>
                                <a href="#"><i class="fas fa-file-download" id="pdfHistoricoButton"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php
                          }
                        }
                        else if(isset($_POST['pesquisar'])){
	                        $pesquisa = $_POST['pesquisar'];

                          $pesquisa = Painel::pesquisaHistorico($pesquisa);

                          foreach($pesquisa as $key => $value){
                            $data = $value['dt_envio'];
    
                            $data = explode("-", $data);
                              
                            list($dia, $mes, $ano) = $data;
                              
                            $data = "$ano/$mes/$dia";
	                  	?>
                      <li>
                        <a href="#">
                          <div class="row historico" id="conteudoHistorico">
                            <div class="col l1 m1 s1">
                              <label id="checkboxLinha">
                                <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                                <span></span>
                              </label>
                            </div>
                            <div class="col l4 m4 s11" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $value['nm_assunto_requerimento']; ?>" id="assuntoHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $data; ?>" id="envioHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $data; ?>" id="entregaHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="Aceito" id="situacaoHistorico"  readonly>
                            </div>
                            <div class="col l1 m1 s6 center-align">
                              <ul>
                                <li>
                                  <a href="#"><i class="fas fa-file-download" id="pdfHistoricoButton"></i></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </a>
                      </li>
                      <?php
                          }
                        }
                        else{
	                        foreach($listarRequerimento as $key => $value){
	                        	$data = $value['dt_envio'];
  
                            $data = explode("-", $data);
                              
                            list($dia, $mes, $ano) = $data;
                              
                            $data = "$ano/$mes/$dia";
	                  	?>
                      <li>
                        <a href="#">
                          <div class="row historico" id="conteudoHistorico">
                            <div class="col l1 m1 s1">
                              <label id="checkboxLinha">
                                <input type="checkbox" class="filled-in" name="select" id="checkboxStyle">
                                <span></span>
                              </label>
                            </div>
                            <div class="col l4 m4 s11" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $value['nm_assunto_requerimento']; ?>" id="assuntoHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $data; ?>" id="envioHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="<?php echo $data; ?>" id="entregaHistorico" readonly>
                            </div>
                            <div class="col l2 m2 s6" id="estiloInputEmails">
                              <input class="center-align" type="text" value="Aceito" id="situacaoHistorico"  readonly>
                            </div>
                            <div class="col l1 m1 s6 center-align">
                              <ul>
                                <li>
                                  <a href="#"><i class="fas fa-file-download" id="pdfHistoricoButton"></i></a>
                                </li>
                              </ul>
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
