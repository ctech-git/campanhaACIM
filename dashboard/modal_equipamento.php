<div class="modal fade" id="modal_equipamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editar_descricao"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="row">

          <input type='hidden' id='e_id' />

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Qual o supervisor?</label>
            <select class='form-control' onchange='' id='modal_supervisor'>
              <option value=''>Selecione o supervisor</option>
            </select>
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Qual o gerente?</label>
            <input name="categoria" autocomplete="off" id="modal_gerente" type="text" class="form-control"
              placeholder="Ex: RODOLFO">
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Qual o login de Cambista?</label>
            <input name="categoria" autocomplete="off" id="modal_cambista" type="text" class="form-control"
              placeholder="Ex: RODOLFO">
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Qual o rastreador do equipamento?</label>
            <input name="categoria" autocomplete="off" id="modal_rastreador" type="text" class="form-control"
              placeholder="Ex: RODOLFO">
          </div>


          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span><label>Alguma observação?</label></span>
            <div id="summernote"></div>

          </div>
        </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id='botao_atualizar' onclick='vincular_equipamento_cambista()'
          class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>