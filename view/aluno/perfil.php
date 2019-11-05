
        <div class="row conteudo">
          <div class="col l1 m0 s0">
          </div>
          <div class="col l11 m12 s12" id="conteudoPerfil">
            <div class="row conteudo" id="rowInfos">
              <div class="row titleConta valign-wrapper hide-on-small-and-down" id="primeiraLinha">
                <div class="col l10 m9 s8">
                  <b class="title is-4">Informações da conta</b>
                </div>
                <div class="col l2 m3 s4">
                  <button type="button" class="button is-dark" id="btnHabilitar" title="Habilitar edição">
                    Alterar
                    <i class="fas fa-pen" id="iconSpace"></i>
                  </button>
                </div>
              </div>

              <div class="row titleConta2 valign-wrapper hide-on-large-only hide-on-med-only" id="primeiraLinha">
                <div class="col l10 m9 s8">
                  <b class="title is-4">Informações da conta</b>
                </div>
                <div class="col l2 m3 s4">
                  <button type="button" class="button is-dark" id="btnHabilitar" title="Habilitar edição">
                    Alterar
                    <i class="fas fa-pen" id="iconSpace"></i>
                  </button>
                </div>
              </div>

              <ul>
                <hr id="hr">
              </ul>

              <div class="row inputs">
                <div class="col l3 m12 s12 center-align">
                  <b class="title is-5">Informações básicas</b>
                </div>
                <div class="col l4 m5 s8">
                  <div class="form-group">
                    <label for="nome" id="titleLabel">Nome</label>
                    <input type="text" class="form-control" id="inputEstiloNm" disabled>
                  </div>
                </div>
                <div class="col l2 m2 s4">
                  <div class="form-group">
                    <label for="rm" id="titleLabel">RM</label>
                    <input type="number" class="form-control" id="inputEstiloRM" disabled>
                  </div>
                </div>
                <div class="col l2 m2 s4">
                  <div class="form-group">
                    <label for="turma" id="titleLabel">Turma</label>
                    <input type="text" class="form-control" id="inputEstiloTr" disabled>
                  </div>
                </div>
                <div class="col l3 m0 s0"></div>
                <div class="col l3 m3 s8">
                  <div class="form-group">
                    <label for="rg" id="titleLabel">RG</label>
                    <input type="text" class="form-control" id="inputEstiloRG" disabled>
                  </div>
                </div>
              </div>

              <ul>
                <hr id="hrForm">
              </ul>

              <div class="row inputs">
                <div class="col l3 m12 s12 center-align">
                  <b class="title is-5">Endereço</b>
                </div>
                <div class="col l3 m5 s8">
                  <div class="form-group">
                    <label for="logradouro" id="titleLabel">Logradouro</label>
                    <input type="text" class="form-control" id="inputEstiloLog" disabled>
                  </div>
                </div>
                <div class="col l2 m2 s4">
                  <div class="form-group">
                    <label for="numero" id="titleLabel">Número</label>
                    <input type="number" class="form-control" id="inputEstiloNumero" disabled>
                  </div>
                </div>
                <div class="col l3 m4 s6">
                  <div class="form-group">
                    <label for="bairro" id="titleLabel">Bairro</label>
                    <input type="text" class="form-control" id="inputEstiloBr" disabled>
                  </div>
                </div>
                <div class="col l3 m0 s0"></div>
                <div class="col l3 m4 s6">
                  <div class="form-group">
                    <label for="cidade" id="titleLabel">Cidade</label>
                    <input type="text" class="form-control" id="inputEstiloCd" disabled>
                  </div>
                </div>
                <div class="col l1 m2 s4">
                  <div class="form-group">
                    <label for="estado" id="titleLabel">UF</label>
                    <input type="text" class="form-control" id="inputEstiloEstd" disabled>
                  </div>
                </div>
                <div class="col l2 m3 s8">
                  <div class="form-group">
                    <label for="cep" id="titleLabel">CEP</label>
                    <input type="text" class="form-control" id="inputEstiloCp" disabled>
                  </div>
                </div>
              </div>

              <ul>
                <hr id="hrForm">
              </ul>

              <div class="row inputs">
                <div class="col l3 m12 s12 center-align">
                  <b class="title is-5">Informações de Login</b>
                </div>
                <div class="col l4 m6 s12">
                  <div class="form-group">
                    <label for="email" id="titleLabel">E-mail</label>
                    <input type="text" class="form-control" id="inputEstiloMail" disabled>
                  </div>
                </div>
                <div class="col l3 m4 s9">
                  <div class="form-group">
                    <label for="senha" id="titleLabel">Senha</label>
                    <input readonly type="password" value="**********" class="form-control" title="Clique no botão para alterar" id="inputEstiloMail" disabled>
                  </div>
                </div>
                <div class="col l1 m2 s2">
                  <button type="button" class="button is-dark modal-trigger" id="alterarSenha" title="Alterar senha" data-target="modalPass" href="#modalPass">
                    <i class="fas fa-pen"></i>
                  </button>
                </div>
              </div>

              <div class="row inputs">
                <div class="right" id="fooPerfil">
                  <button type="submit" class="button is-dark" id="btnSalvar">Salvar</button>
                  <button type="button" class="button is-light" id="btnCancelar" onclick="javascript:location.href=''">Cancelar</button>
                </div>
              </div>

            </div>

            <div id="modalPass" class="modal modal-fixed-footer">
              <div class="modal-content" id="modalStylePass">
                <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
                <div class="container">
                  <div class="row" id="formSpace">
                    <div class="col l12 m12 s12">
                      <h1 class="center-align title is-3">Alterar senha</h1>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col l0 m1 s0">
                    </div>
                    <div class="col l12 m10 s12">
                      <div class="form-goup">
                        <div class="col l10 m10 s10" id="colPass">
                          <input type="password" placeholder="Digite sua senha atual" class="input form-control" id="inputPassword">
                        </div>
                        <div class="col l2 m2 s2" id="colEye">
                          <i id="pass-status" class="fa fa-eye toggle-password" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col l0 m1 s0">
                    </div>
                    <div class="col l12 m10 s12">
                      <div class="form-goup">
                        <div class="col l12 m12 s12">
                          <input type="password" placeholder="Nova senha" class="input form-control" id="inputNPassword">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col l0 m1 s0">
                    </div>
                    <div class="col l12 m10 s12">
                      <div class="form-goup">
                        <div class="col l12 m12 s12">
                          <input type="password" placeholder="Confirmar nova senha" class="input form-control" id="inputNCPassword">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer" id="modalFooPass">
                <button type="button" class="button is-dark" id="modalSalvar">Salvar</button>
                <button type="button" class="button is-light" id="modalCancelar" onclick="javascript:location.href=''">Cancelar</button>
              </div>
            </div>
            
          </div>
        </div>
