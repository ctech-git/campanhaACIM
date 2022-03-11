<div class="modal fade" id="modal_adicionar_analise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <label>Padrão de análise</label>
            <select class='form-control' onchange='mudar_padrao()' id='padrao'>
              <option value=''>Selecione o padrão</option>
              <option value='1'>Padrão 1</option>
              <option value='2'>Análise 2</option>
            </select>
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Conclusão</label>
            <select class='form-control' onchange='mudar_padrao()' id='padrao'>
              <option value=''>Selecione a conclusão</option>
              <option value='1'>Apto</option>
              <option value='2'>Cortar o cambista</option>
              <option value='2'>Indefinido</option>
            </select>
          </div>
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label>Reanalisar na data:</label>
            <input name="categoria" autocomplete="off" id="analiseCambista" type="date" class="form-control"
              placeholder="Ex: RODOLFO">
          </div>


          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span><label>Entrada/Saída</label></span>
            <div id="summernote"></div>

          </div>
        </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id='botao_atualizar' onclick='atualizar_relatorio()'
          class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>