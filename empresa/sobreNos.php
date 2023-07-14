<div class="card">
  <div class="card-header">
    <?php echo $acao ?>
  </div>
  <div class="card-body">
    <div>
      <tr>
        <th scope="row"></th>
        <div class="btn-group" btn-group-sm role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#staticBackdrop">Cadastrar</button>
        </div>
        </td>
      </tr>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th width='5%'>#</th>
          <th width='70%'>Descrição</th>
          <th width='25%'>Ação</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>
            <div class="btn-group" btn-group-sm role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary btn-sm">Ver Mais</button>
              <button type="button" class="btn btn-secondary btn-sm">Alteração</button>
              <button type="button" class="btn btn-secondary btn-sm">Excluir</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- card -->
      <div class="modal-body">
        <div class="card">
          <div class="card-header">
            Cadastro/Sobre nós
          </div>
          <div class="card-body">
            <!-- form -->
            <form name="frnCardNos" id="frnCardNos" method="post" action="#">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
              </div>
              
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" onclick="cardNos();">Salvar</button>
              </div>
            </form>
            <!-- .form -->
          </div>
        </div>
      </div>
      <!-- .card -->
  </div>
</div>