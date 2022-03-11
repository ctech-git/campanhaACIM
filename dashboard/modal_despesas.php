<div class="modal fade" id="modal_editar_despesa_gerente" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
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

          <input type='hidden' id='e_idDespesa' />

          <div class="form-group col-lg-6 col-md-6">
            <label>Supervisor</label>
            <select required name="tipo_movimentacao" onchange="buscar_gerentes_supervisor_editar()"
              id="e_idSupervisor_despesa" class="form-control">
              <option value="none" selected="" disabled="">Selecione o
                supervisor
              </option>
            </select>
          </div>

          <div class="form-group col-lg-6 col-md-6">
            <span><label>Gerente</label></span>
            <select required name="tipo_movimentacao" id="e_idGerente_despesa" class="form-control">
              <option value="none" selected="" disabled="">Selecione o
                Gerente
              </option>
              <option value="supervisor">Despesa do supervisor
              </option>
            </select>
          </div>
          <div class="form-group ">
            <span><label>Descrição da despesa</label></span>
            <input oninput="this.value = this.value.toUpperCase()" required name="descricao" autocomplete="off"
              id="e_descricaoDespesa" type="text" class="form-control" placeholder="Descrição da despesa">
          </div>
          <div class="form-group ">
            <span><label>Valor</label></span>
            <input oninput="this.value = this.value.toUpperCase()" required name="descricao" autocomplete="off"
              id="e_valorDespesa" type="text" class="form-control produto_em_reais" placeholder="Valor em R$ 0,00">
          </div>
          <div class="form-group ">
            <span><label>Data da movimentação</label></span>
            <input required name="dataDespesa" autocomplete="off" id="e_dataDespesa" type="date" class="form-control"
              placeholder="Nome da Gerência">
          </div>
          </form>
        </div>
      </div>

      <div class="modal-footer">
        <!-- <h2 style='float:left'>Valor total: <span>R$ 1.500,00</span></h2> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id='botao_atualizar_despesa' onclick='atualizar_relatorio_gerente()'
          class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>