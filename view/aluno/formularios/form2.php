                <!-- Preencher formulario -->
                <div class="col l5 m5 s12 form2" id="assuntoRequerimento">
                  <div class="hero-body" id="heroAssuntoRequerimento">
                    <form method="post">
                      <div class="container" id="conteudoForm" class="corpo">
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <label for="nome" id="labelForm">Assunto: </label>
                            <input type="text" name="nome" class="form-control" id="inputEstilo">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <label for="nome" id="labelForm">Tipo: </label>
                            <input type="text" name="nome" class="form-control" id="inputEstilo">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <label for="nome" id="labelForm">Descrição: </label>
                            <textarea name="descricao" rows="8" cols="80" id="textarea"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l6 m6 s6">
                            <button type="submit" class="btn right" name="anterior" id="botaoAnterior">Anterior</button>
                          </div>
                          <div class="col l6 m6 s6">
                            <button type="submit" class="btn right" name="formulario" id="botaoProximo2">Próximo</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--<script>

                    var tipo = <?php echo $_SESSION['requerimento']?> ;

                    document.body.onload = adcElemento;

                    function adcElemento () { 
                    // cria um novo elemento div 
                    // e dá à ele conteúdo
                    var divNova = document.createElement("div"); 
                    var conteudoNovo = document.createTextNode("Olá, cumprimentos!"); 
                    divNova.appendChild(conteudoNovo); //adiciona o nó de texto à nova div criada 

                    // adiciona o novo elemento criado e seu conteúdo ao DOM 
                    var divAtual = document.getElementById("conteudoForm"); 
                    document.body.insertBefore(divNova, divAtual); 
                    }
                </script>-->