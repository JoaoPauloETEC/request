                <!-- Selecionar tipo de requerimento -->
                <div class="col l5 m5 s12 form1" id="tipoRequerimento">
                  <div class="hero-body" id="heroTipoRequerimento">
                    <form method="post">
                      <div class="container">
                        <div class="form-group">
                          <select class="form-control" name="requerimentos" id="estiloSelect" onchange="conteudoSelect()">
                          <?php

                              $tipoRequerimento = Painel::listarTiposRequerimento();

                              foreach($tipoRequerimento as $key => $value):
                          ?>
                              <option value="<?php echo $value['cd_tipo_requerimento']; ?>"><?php echo $value['nm_assunto_requerimento']; ?></option>
                          <?php
                              endforeach;
                          ?>
                          </select>
                        </div>
                        <p id="pDescricao">Descrição detalhada de modo detalhado com vários detalhes do tipo de requerimento selecionado pelo usuário</p>
                        <button type="submit" class="btn right" name="assuntos" id="botaoProximo">Próximo</button>
                      </div>
                    </form>
                  </div>
                </div>
                <script>
                    // Codigo para troca de conteudo

                    function conteudoSelect() {
                    var opcao = document.getElementById("estiloSelect").value;
                    if(opcao == 8){
                        document.getElementById("pDescricao").innerHTML="Solicite uma carta de apresentação com um breve resumo de suas qualificações e experiências.";
                    }else if(opcao == 5){
                        document.getElementById("pDescricao").innerHTML="Solicitação de declarações em geral. Especificando o tipo de declaração de deseja na proxima etapa.";
                    }else if(opcao == 1){
                        document.getElementById("pDescricao").innerHTML="Solicitação de Destrancamento de uma matrácula que foi trancada na instituição. Informações necessarias na proxima etapa.";
                    }else if(opcao == 3){
                        document.getElementById("pDescricao").innerHTML="Solicitação de Justificativa de Falta na escola. Essa Solicitação deve conter um arquivo anexado e entrege a secretária.";
                    }else if(opcao == 7){
                        document.getElementById("pDescricao").innerHTML="Solicitar um comunicado paar ser repassado pela secretaria a outros alunos ou funcionários.";
                    }else if(opcao == 9){
                        document.getElementById("pDescricao").innerHTML="Solicitação de um pedido especifico que não se enquadra nas demais opções.";
                    }else if(opcao == 4){
                        document.getElementById("pDescricao").innerHTML="Solicitação de uma prova para substituir uma nota baixa ou uma avaliação não feita pelo aluno.";
                    }else if(opcao == 6){
                        document.getElementById("pDescricao").innerHTML="Realize sua rematricula fora da data estipulada pela instituição, garantindo sua matricula para o proximo semestre.";
                    }else if(opcao == 10){
                        document.getElementById("pDescricao").innerHTML="Deixe suas sugestões, criticas e elogias aos colaboradores ou ao corpo de docentes da escola :3";
                    }else if(opcao == 2){
                        document.getElementById("pDescricao").innerHTML="Solicitação de transferencia de instituição. Podendo se tranfeirir para as instituições que contém o seu curso";
                    }
                    }
                </script>