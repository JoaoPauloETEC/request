
      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">
          <div class="row conteudo2" id="barraComponentes">
            <div class="input-field col l12 m12 s12" id="opcoesComponentes">
              <ul>
                <li>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>curso" id="componentesOpc2">Curso</a>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>disciplina" id="componentesOpc1">Disciplina</a>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>professor" id="componentesOpc3">Professor</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="row conteudo2" id="componentesFerramentas">
            <div class="col l6 m8 s12" id="positionOptions">
              <button id="btnNovaDisciplina" class="button waves-effect waves-light modal-trigger is-dark" type="button" href="#modal4" data-target="modal4">Nova disciplina
                <i class="material-icons right">library_books</i>
              </button>
              <button type="button" id="btnEditarDisciplina" data-target="modal5" class="button waves-effect waves-light modal-trigger is-light" href="#modal5">Editar disciplina</button>
            </div>
            <div class="input-field col l6 m4 s12" id="inputPesquisar">
              <i class="material-icons prefix fas fa-search"></i>
              <input class="form-control" type="search" placeholder="Pesquisar">
            </div>
          </div>

          <div id="modal4" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle4">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal4">Cadastro de disciplina</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-goup">
                      <div class="col l5 m5 s5">
                        <label for="curso" class="title is-6 input-field">Disciplina</label>
                      </div>
                      <div class="col l7 m7 s7">
                        <input type="text" placeholder="Disciplina" class="input form-control" id="inputCadastroDisciplina">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l4 m4 s4">
                        <label for="modulo" class="title is-6">Curso</label>
                      </div>
                      <div class="col l8 m8 s8">
                        <select class="form-control">
                          <option>Desenvolvimento de Sistemas</option>
                          <option>Manutenção e suporte em informática</option>
                          <option>Enfermagem</option>
                          <option>Edificações</option>
                          <option>Turismo receptivo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label for="modulo" class="title is-6">Módulo</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button class="button is-light waves-effect waves-light">Adicionar curso
                      <i class="fas fa-plus" id="plusButton"></i>
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12" id="tableStyle">
                    <div class="col l12 m12 s12">
                      <div class="col l8 m8 s8" id="tableTitle">
                        <b>Curso</b>
                      </div>
                      <div class="col l4 m4 s4" id="tableTitle">
                        <b>Anular</b>
                      </div>
                    </div>
                    <div class="col l12 m12 s12" id="tableStyleTop">
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Manutenção e Suporte em Informática</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Administração</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Desenvolvimento de sistemas</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle4">
              <button type="button" class="button is-dark" id="modalButton4Cad">Cadastrar</button>
              <button type="button" class="button is-light" id="modalButton4" onclick="javascript:location.href='disciplina.html'">Cancelar</button>
            </div>

          </div>

          <div id="modal5" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle5">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal5">Editar disciplina</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-5">Buscar disciplina</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="input-field col l12 m12 s12" id="inputPesquisar">
                      <i class="material-icons prefix fas fa-search"></i>
                      <input class="form-control" type="search" placeholder="Pesquisar">
                    </div>
                  </div>
                </div>

                <hr style="height:1px; border:none; color:#ccc; background-color:#ccc; margin-top: 0px; margin-bottom: 1.5rem;"/>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-5">Alterar disciplina</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="col l10 m10 s10">
                      <div class="form-goup">
                        <input type="text" placeholder="Disciplina" class="input form-control" id="inputCadastroProfessor" disabled>
                      </div>
                    </div>
                    <div class="col m1 m1 s1">
                      <button class="button is-light waves-effect waves-light" id="modalBtn">
                          <i class="fas fa-pen"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button class="button is-light waves-effect waves-light">Adicionar novo curso
                      <i class="fas fa-plus" id="plusButton"></i>
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12" id="tableStyle">
                    <div class="col l12 m12 s12">
                      <div class="col l8 m8 s8" id="tableTitle">
                        <b>Curso</b>
                      </div>
                      <div class="col l4 m4 s4" id="tableTitle">
                        <b>Editar</b>
                      </div>
                    </div>
                    <div class="col l12 m12 s12" id="tableStyleTop">
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Manutenção e Suporte em Informática</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarCurso" title="Editar curso">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifNegado2" readonly></i>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Administração</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarCurso" title="Editar curso">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifAceito2" readonly></i>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Desenvolvimento de sistemas</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarCurso" title="Editar curso">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifAceito2" readonly></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row" id="formulariosCad">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l4 m4 s4">
                        <label for="modulo" class="title is-6">Curso</label>
                      </div>
                      <div class="col l8 m8 s8">
                        <select class="form-control" disabled>
                          <option>Desenvolvimento de Sistemas</option>
                          <option>Manutenção e suporte em informática</option>
                          <option>Enfermagem</option>
                          <option>Edificações</option>
                          <option>Turismo receptivo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label for="modulo" class="title is-6">Módulo</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" disabled>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label for="modulo" class="title is-6">Situação</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" disabled>
                          <option>Ativado</option>
                          <option>Desativado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button type="button" class="button is-dark" id="btnSalvarEdit" disabled>Cadastrar</button>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle5">
              <button type="button" class="button is-dark" id="modalButton5Cad">Salvar</button>
              <button type="button" class="button is-light" id="modalButton5" onclick="javascript:location.href='disciplina.html'">Cancelar</button>
            </div>

          </div>

          <div class="row conteudo2" id="colorTitleComponentes">
            <div class="row conteudo2" id="titulosComponentes">
              <div class="col l4 m4 s4">
                <input type="text" value="Disciplina" readonly id="estiloTitulos3">
              </div>
              <div class="col l6 m6 s6">
                <input type="text" value="Curso" readonly id="estiloTitulos3">
              </div>
              <div class="col l2 m2 s2">
                <input type="text" value="Módulo" readonly id="estiloTitulos3">
              </div>
            </div>
          </div>

          <div class="row disciplina">
            <div class="col l12 m12 s12" id="colDisciplina">
              <div class="row conteudo" id="linhaDisciplina">
                <div class="col l12 m12 s12">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoDisciplina">
                          <div class="col l4 m4 s4" id="estiloInputDisciplina">
                            <input type="text" value="Programação WEB I" readonly>
                          </div>
                          <div class="col l6 m6 s6" id="estiloInputDisciplina">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>
                          <div class="col l2 m2 s2" id="estiloInputDisciplina">
                            <input type="number" value="1" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoDisciplina">
                          <div class="col l4 m4 s4" id="estiloInputDisciplina">
                            <input type="text" value="Banco de dados II" readonly>
                          </div>
                          <div class="col l6 m6 s6" id="estiloInputDisciplina">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>
                          <div class="col l2 m2 s2" id="estiloInputDisciplina">
                            <input type="number" value="2" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoDisciplina">
                          <div class="col l4 m4 s4" id="estiloInputDisciplina">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>
                          <div class="col l6 m6 s6" id="estiloInputDisciplina">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>
                          <div class="col l2 m2 s2" id="estiloInputDisciplina">
                            <input type="number" value="2" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoDisciplina">
                          <div class="col l4 m4 s4" id="estiloInputDisciplina">
                            <input type="text" value="Programação de aplicativos mobile II" readonly>
                          </div>
                          <div class="col l6 m6 s6" id="estiloInputDisciplina">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>
                          <div class="col l2 m2 s2" id="estiloInputDisciplina">
                            <input type="number" value="3" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>