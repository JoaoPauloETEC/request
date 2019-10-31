    <link rel="stylesheet" href="../../assets/css/administrador/estilo.css">
    <div id="modalAdm" class="modal modal-fixed-footer">
      <div class="modal-content" id="modalStyleAdm">
        <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
        <div class="container">
          <div class="row">
            <div class="col l7 m7 s7">
              <h1 class="center-align" id="titleAdm">Meus dados</h1>
            </div>
            <div class="col l5 m5 s5 right">
              <button type="button" class="button is-dark" id="btnHabilitar" title="Habilitar edição">
                Alterar
                <i class="fas fa-pen" id="iconSpace"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col l0 m1 s0">
            </div>
            <div class="col l12 m10 s12">
              <div class="form-goup">
                <div class="col l3 m3 s12">
                  <label for="nome" class="title is-6 input-field">Nome</label>
                </div>
                <div class="col l9 m9 s12">
                  <input type="text" placeholder="Nome do Administrador" class="input form-control" id="inputEstiloNm" disabled>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col l0 m1 s0">
            </div>
            <div class="col l12 m10 s12">
              <div class="form-goup">
                <div class="col l3 m3 s12">
                  <label for="e-mail" class="title is-6 input-field">E-mail</label>
                </div>
                <div class="col l9 m9 s12">
                  <input type="text" placeholder="E-mail do Administrador" class="input form-control" id="inputEstiloEm" disabled>
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
                  <label for="senha" class="title is-6 input-field">Alterar senha</label>
                </div>
                <div class="col l10 m10 s10" id="colPass">
                  <input type="password" placeholder="Digite sua senha atual" class="input form-control" id="inputPassword" disabled>
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
                  <input type="password" placeholder="Nova senha" class="input form-control" id="inputNPassword" disabled>
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
                  <input type="password" placeholder="Confirmar nova senha" class="input form-control" id="inputNCPassword" disabled>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer" id="modalFooAdm">
        <button type="button" class="button is-dark" id="modalSalvar">Salvar</button>
        <button type="button" class="button is-light" id="modalCancelar" onclick="javascript:location.href=''">Cancelar</button>
      </div>

    </div>