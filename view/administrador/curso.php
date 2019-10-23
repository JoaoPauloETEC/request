
      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">

          <div class="row conteudo2" id="barraComponentes">
            <div class="input-field col l12 m12 s12" id="opcoesComponentes">
              <ul>
                <li>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>curso" id="componentesOpc1">Curso</a>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>disciplina" id="componentesOpc2">Disciplina</a>
                  <a href="<?php echo INCLUDE_PATH_ADMIN; ?>professor" id="componentesOpc3">Professor</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="row conteudo2" id="componentesFerramentas">
            <div class="col l6 m6 s12" id="positionOptions">
              <button id="btnNovoCurso" class="button waves-effect waves-light modal-trigger is-dark" type="button" href="#modal2" data-target="modal2">Novo curso
                <i class="material-icons right">school</i>
              </button>
              <button type="button" id="btnEditarCurso" data-target="modal3" class="button waves-effect waves-light modal-trigger is-light" href="#modal3">Editar curso</button>
            </div>
            <div class="input-field col l6 m6 s12" id="inputPesquisar">
              <i class="material-icons prefix fas fa-search"></i>
              <input class="form-control" type="search" placeholder="Pesquisar">
            </div>
          </div>

          <div id="modal2" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle2">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal2">Cadastro de curso</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-goup">
                      <div class="col l4 m4 s4">
                        <label for="curso" class="title is-6 input-field">Curso</label>
                      </div>
                      <div class="col l8 m8 s8">
                        <input type="text" placeholder="Curso" class="input form-control" id="inputCadastroCurso">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l5 m5 s5">
                        <label for="modulo" class="title is-6">N° Módulos</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" id="inputCadastroCurso">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle2">
              <button type="button" class="button is-dark" id="modalButton2Cad">Cadastrar</button>
              <button type="button" class="button is-light" id="modalButton2" onclick="javascript:location.href='curso.html'">Cancelar</button>
            </div>

          </div>

          <div id="modal3" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle3">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal3">Editar curso</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l4 m4 s4">
                        <label for="curso" class="title is-6">Curso</label>
                      </div>
                      <div class="col l8 m8 s8">
                        <select class="form-control" id="selectInfoCurso">
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
                    <div class="col l10 m10 s10">
                      <div class="form-goup">
                        <input type="text" placeholder="Nome do curso" class="input form-control" id="inputNmCurso" disabled>
                      </div>
                    </div>
                    <div class="col m1 m1 s1">
                      <button class="button is-light waves-effect waves-light" id="editarNmCurso">
                          <i class="fas fa-pen"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label for="modulo" class="title is-6">N° Módulos</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" id="selectInfoCurso">
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
                        <select class="form-control" id="selectInfoCurso">
                          <option>Ativado</option>
                          <option>Desativado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle3">
              <button type="button" class="button is-dark" id="modalButton3Cad">Salvar</button>
              <button type="button" class="button is-light" id="modalButton3" onclick="javascript:location.href='curso.html'">Cancelar</button>
            </div>

          </div>

          <div class="row conteudo2" id="colorTitleComponentes">
            <div class="row conteudo2" id="titulosComponentes">
              <div class="col l7 m7 s7">
                <input type="text" value="Curso" readonly id="estiloTitulos3">
              </div>
              <div class="col l5 m5 s5">
                <input type="text" value="Situação" readonly id="estiloTitulos3">
              </div>
            </div>
          </div>

          <div class="row curso">
            <div class="col l12 m12 s12" id="colCursos">
              <div class="row conteudo" id="linhaCurso">
                <div class="col l12 m12 s12">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoCurso">
                          <div class="col l7 m7 s7" id="estiloInputCurso">
                            <input type="text" value="Desenvolvimento de sistemas" id="cursoInput" readonly>
                          </div>
                          <div class="col l5 m5 s5" id="estiloInputCurso">
                            <input type="text" value="Ativado" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoCurso">
                          <div class="col l7 m7 s7" id="estiloInputCurso">
                            <input type="text" value="Manutenção e suporte em informática" id="cursoInput" readonly>
                          </div>
                          <div class="col l5 m5 s5" id="estiloInputCurso">
                            <input type="text" value="Ativado" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoCurso">
                          <div class="col l7 m7 s7" id="estiloInputCurso">
                            <input type="text" value="Enfermagem" id="cursoInput" readonly>
                          </div>
                          <div class="col l5 m5 s5" id="estiloInputCurso">
                            <input type="text" value="Ativado" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoCurso">
                          <div class="col l7 m7 s7" id="estiloInputCurso">
                            <input type="text" value="Edificações" id="cursoInput" readonly>
                          </div>
                          <div class="col l5 m5 s5" id="estiloInputCurso">
                            <input type="text" value="Ativado" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoCurso">
                          <div class="col l7 m7 s7" id="estiloInputCurso">
                            <input type="text" value="Turismo receptivo" id="cursoInput" readonly>
                          </div>
                          <div class="col l5 m5 s5" id="estiloInputCurso">
                            <input type="text" value="Desativado" readonly>
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
