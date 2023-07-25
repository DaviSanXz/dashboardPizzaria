<?php
include_once './config/conexao.php';
include_once './config/constantes.php';
include_once './func/funcdashboard.php'
  ?>

<div class="card">
  <div class="card-header">
    <?php echo $acao ?>
  </div>
  <div class="card-body">
    <div>

      </tr>
      </thead>
      <tbody>
        <tr>
          <td class='row'>
            <div class='btn-group' role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal"data-target="#staticBackdrop">Cadastrar</button>
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
              <td class='text-right'>
                <div class="btn-group" btn-group-sm role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary btn-sm">Ver mais</button>
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"data-whatever="<?php echo $idsobreNois ?>">Alterar</button>
                  <button type="button" class="btn btn-secondary btn-sm">Excluir</button>
                </div>
              </td>

            </tr>

          </tbody>

          <?php
          }
        }
        ?>

    </table>


  </div>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
              <form name="frmCadNos" id="frmCadNos" method="post" action="#">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password">
                  </div>
                </div>



                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary"
                    onclick="cardNos('frmCadNos', 'staticBackdrop','sobreNosAdd', 'sobreNos');">Salvar</button>
                </div>
              </form>
            </div>
          </div>



        </div>

      </div>
    </div>
  </div>


  <!-- Modal alterar -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="frmCadNos" id="frmCadNosA" method="post" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tituloAlt">Titulo</label>
              <input name="tituloAlt" type="text" class="form-control" id="tituloAlt">
            </div>
            <div class="form-group col-md-6">
              <label for="textoAlt">Texto</label>
              <input type="text" class="form-control" id="textoAlt">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $('#exampleModal').on('shown.bs.modal', function () {
    $('input#tituloAlt').trigger('focus');

  })
  $('#exampleModal').on('show.bs.modal', function (event) {


    var btnModalSalvarNos = $(event.relatedTarget);
    var id = btnModalSalvarNos.data('whatever');

    var dados = {
      acao: 'verDadosAltNos',
      alecrim: id
    }


    $.ajax({
      type: "POST",
      dataType: 'JSON',
      url: 'controle.php',
      data: dados,
      beforeSend: function () {

      }, success: function (retorno) {
        console.log(retorno);
      }
    });


  })
</script>