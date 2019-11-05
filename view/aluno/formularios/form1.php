                <!-- Selecionar tipo de requerimento -->
                <div class="col l5 m5 s12 form1" id="tipoRequerimento">
                  <div class="hero-body" id="heroTipoRequerimento">
                    <form method="post">
                      <div class="container">
                        <div class="form-group">
                          <select class="form-control" name="requerimentos" id="estiloSelect">
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
                        <p>Descrição detalhada de modo detalhado com vários detalhes do tipo de requerimento selecionado pelo usuário</p>
                        <button type="submit" class="btn right" name="assuntos" id="botaoProximo">Próximo</button>
                      </div>
                    </form>
                  </div>
                </div>