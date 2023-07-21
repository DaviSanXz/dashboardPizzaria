<?php
include_once './config/conexao.php';
include_once './config/constantes.php';
include_once './func/funcdashboard.php'
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
  Launch demo modal
</button>

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
        <?php
        $listarSobreNos = listarDashboard('idsobreNois, img, subtitulo, contato, text, video, alteracao, cadastro, ativo, subtituloP, titulo, text2, text3, text4', 'sobrenois');
        if ($listarSobreNos != 'Vazio') {
          foreach ($listarSobreNos as $listarSobreNosItem) {
            $idsobreNois = $listarSobreNosItem->idsobreNois;
            $img = $listarSobreNosItem->img;
            $subtitulo = $listarSobreNosItem->subtitulo;
            $contato = $listarSobreNosItem->contato;
            $text = $listarSobreNosItem->text;
            $video = $listarSobreNosItem->video;
            $alteracao = $listarSobreNosItem->alteracao;
            $cadastro = $listarSobreNosItem->cadastro;
            $ativo = $listarSobreNosItem->ativo;
            $subtituloP = $listarSobreNosItem->subtituloP;
            $titulo = $listarSobreNosItem->titulo;
            $text2 = $listarSobreNosItem->text2;
            $text3 = $listarSobreNosItem->text3;
            $text4 = $listarSobreNosItem->text4;
        ?>
            <tr>
              <th scope="row"><?php echo $idsobreNois ?></th>
              <td><?php echo $subtitulo ?></td>
              <td>
                <div class="btn-group" btn-group-sm role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary btn-sm">Ver Mais</button>
                  <button type="button" class="btn btn-secondary btn-sm">Alteração</button>
                  <button type="button" class="btn btn-secondary btn-sm">Excluir</button>
                </div>
              </td>
            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>


<!-- Modal -->
<!-- <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="card">
          <div class="card-header">
            Cadastro/Sobre nós
          </div>
          <div class="card-body">

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
                <button type="submit" class="btn btn-primary" onclick="cardNos('frnCardNos', 'staticBackdrop', 'sobreNosAdd', 'empresa/sobreNos');">Salvar</button>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>
  </div> -->
  <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  

  

<div class="modal fade" id="exampleModal"role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>