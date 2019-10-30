
      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">
          <div class="row conteudo" id="primeiraLinha">
            <div class="input-field col l3 m3 s6" id="procura">
              <i class="material-icons prefix fas fa-search" id="lupaEstilo"></i>
              <input class="form-control" type="search" placeholder="Pesquisar" id="inputProcurar">
            </div>
            <div class="col l8 m8 s5">
              <ul>
                <li>
                  <a href="#">
                    <i class="fas fa-redo-alt left" id="redoButton"></i>
                  </a>
                </li>
              </ul>
              <div class="dropdown">
                <button class="dropdown-toggle" data-toggle="dropdown" id="manStyleButton">
                  <i class="fas fa-user left" id="manButton"></i>
                  <i class="fas fa-sort-down left" id="manButton"></i>
                </button>
                <ul class="dropdown-menu" id="dropdownFiltro">
                  <li><a href="#">Meus</a></li>
                  <li><a href="#">Todos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row requerimentos">
            <div class="col l4 m4 s12" id="colEmails">
              <ul>
              <?php
                
                $listarRequerimento = Secretario::caixaEntrada();

                foreach($listarRequerimento as $key => $value)
                {
                  $codigo = $value['cd_requerimento'];
                  $nome = $value['nm_assunto_requerimento'];
                  $descricao = $value['ds_requerimento'];
                  $data = $value['dt_envio'];
                  $visualizado = $value['sg_status'];
                  $funcioario = $value['id_funcionario'];

                  $data = explode("-", $data);
                    
                  list($dia, $mes, $ano) = $data;
                    
                  $data = "$ano/$mes/$dia";

                  if($visualizado == 1)
                  {
              ?>
                <li>
                  <div class="row emailPadding" id="emailsSelect">
                    <div class="col l10 m10 s10">
                      <b id="nomeAluno"><?php echo $nome; ?></b>
                      <p id="tipoRequerimento"><?php echo $descricao; ?></p>
                      <p id="dataRequerimento"><?php echo $data; ?></p>
                    </div>
                  </div>
                </li>
              <?php
                  }
                  else
                  {
              ?>
                <li onclick="var codigo = <?php echo $codigo; ?>; $.post('ajax/exibirRequerimento.php', { id: codigo }).done(function(data){  }, 'json');">
                  <div class="row emailPadding" id="emailsEstilo">
                    <div class="col l10 m10 s10">
                      <b id="nomeAluno"><?php echo $nome; ?></b>
                      <p id="tipoRequerimento"><?php echo $descricao; ?></p>
                      <p id="dataRequerimento"><?php echo $data; ?></p>
                    </div>
                    <div class="col l1 m1 s1">
                      <i class="fas fa-circle right" id="notifNovo"></i>
                    </div>
                  </div>
                </li>
              <?php
                  }
                }
              ?>
              </ul>
            </div>
            <div class="col l8 m8 s12" id="colResposta">
              <div class="row conteudo" id="linhaUm">
                <div class="col l12 m12 s12">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-download right" id="downloadIcon"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row conteudo" id="linhaDois">
                <div class="col l1 m1 s0">
                </div>
                <div class="col l10 m10 s12" id="emailRequest">
                  <div class="row emailRequest" id="linhaRequest">
                    <div class="input-field col l6 m6 s6">
                      <b>Protocolo:</b>
                      <b id="requestProtocolo">012-2019</b>
                    </div>
                    <div class="input-field col l6 m6 s6">
                      <b id="requestData" class="right">21 de Agosto de 2019</b>
                    </div>
                  </div>
                  <div class="row emailRequest" id="linhaRequest">
                    <div class="input-field col l10 m10 s10">
                      <div class="row emailRequest">
                        <b id="requestNome">Matheus Costa de Souza</b>
                      </div>
                      <div class="row emailRequest">
                        <b>RM:</b>
                        <b id="requestRM">12345</b>
                      </div>
                      <div class="row emailRequest">
                        <b>RG:</b>
                        <b id="requestRG">12.456.789-X</b>
                      </div>
                      <div class="row emailRequest">
                        <b id="requestEmail">matheus.costa@etec.sp.gov.br</b>
                      </div>
                    </div>
                    <div class="input-field col l2 m2 s2">
                      <b id="requestSala" class="right">3DS2</b>
                    </div>
                  </div>
                  <div class="row emailRequest">
                    <div class="input-field col l12 m12 s12">
                      <div class="row emailRequest">
                        <b id="requestTipoRequerimento">Declaração em geral</b>
                      </div>
                      <div class="row emailRequest">
                        <b>Assunto:</b>
                        <b id="requestAssunto">Declaração escolar</b>
                      </div>
                      <div class="row emailRequest">
                        <b>Descrição:</b>
                        <b id="requestDescricao">Solicito uma declaração escolar para apresentar na empresa BR Mobilidade na retirada do passe Passe escolar</b>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row conteudo" id="linhaTres">
                <div class="col l1 m1 s0">
                </div>
                <div class="col l4 m4 s12">
                  <b id="respostaTitle">Resposta*</b>
                  <form action="#" id="formRadio">
                    <p>
                      <label>
                        <input name="group1" type="radio">
                        <span>Defiro</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group1" type="radio">
                        <span>Indefiro</span>
                      </label>
                    </p>
                  </form>
                </div>
                <div class="col l6 m6 s12">
                  <b id="respostaTitle">Mensagem</b>
                  <textarea name="name" rows="8" cols="80" id="textarea"></textarea>
                  <button type="submit" class="btn right" name="button" id="botaoEnviar">Enviar</button>
                  <button type="button" class="btn right" name="button" id="botaoCancelar">Cancelar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>