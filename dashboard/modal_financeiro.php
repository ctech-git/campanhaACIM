<div class="modal fade" id="modal_editar_relatorio_financeiro" tabindex="-1" role="dialog"
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

          <input type='hidden' id='e_id' />

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <span><label>Colaborador</label></span>
            <input required name="categoria" disabled autocomplete="off" id="e_colaborador" type="text"
              class="form-control" placeholder="Ex. Fechamento X">
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <span><label>Gerência</label></span>
            <input name="categoria" disabled autocomplete="off" id="e_gerencia" type="text" class="form-control "
              placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Entradas</label></span>
            <input name="categoria" autocomplete="off" id="e_entradas" type="text" class="form-control produto_em_reais"
              placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Saídas</label></span>
            <input name="categoria" autocomplete="off" id="e_saidas" type="text" class="form-control produto_em_reais"
              placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Comissões</label></span>
            <input name="categoria" autocomplete="off" id="e_comissoes" type="text"
              class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Subtotal</label></span>
            <input name="categoria" disabled autocomplete="off" id="e_subtotal" type="text"
              class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Vales</label></span>
            <input name="categoria" autocomplete="off" id="e_vales" type="text" class="form-control produto_em_reais"
              placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Comissão Cambista (%)</label></span>
            <input name="categoria" autocomplete="off" id="e_comissaoCambista" type="number" class="form-control"
              placeholder="Ex: 5">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Internet</label></span>
            <input name="categoria" autocomplete="off" id="e_internet" type="text" class="form-control produto_em_reais"
              placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Comprovantes</label></span>
            <input name="categoria" autocomplete="off" id="e_comprovantes" type="text"
              class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
          </div>

          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <span><label>Lançamento/Acordo</label></span>
            <input name="categoria" autocomplete="off" id="e_lancamentos" type="text"
              class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
          </div>

          <br />


          </form>
        </div>

        <!-- FORMULÁRIO DE DESPESAS -->

        <form class="" action="#" id="form_outras_entradas">
          <div id='outras_entradas'>
            <div class='row' style='margin-top:40px'>
              <div class="col-6 col-sm-6 col-md-6">
                <label for="estimativa_espera" class="" style='color: #000'><strong>Outras Despesas</strong></label>
                <select style='font-size:12px' name='id_outras_entradas' class="form-control texto_itens_carrinho"
                  id="id_outras_entradas">
                  <option value=''>Selecione alguma opção</option>
                  <option value='1'>INTERNET</option>
                  <option value='2'>EQUIPAMENTOS</option>
                  <option value='3'>VIAGENS</option>
                  <option value='4'>MARKETING/PROPAGANDA</option>
                  <option value='5'>ALUGUEL</option>
                  <option value='6'>TRANSPORTE/COMBUSTÍVEL</option>
                  <option value='7'>OUTRAS</option>
                </select>
              </div>

              <div style='' id='div_valor_desconto' class=" col-6 col-sm-6 col-md-6">
                <label for="nome_produto" class="texto_itens_carrinho">Valor Movimentado</label>
                <input name="valor_movimentado" required autocomplete='off' id="valor_movimentado" type="text"
                  inputmode='numeric' class="form-control produto_em_reais">
              </div>
            </div>

            <div class='row' style='margin-bottom:30px; padding:0px'>
              <div class="col-12 col-sm-12 col-md-12" style='padding:0px'>
                <label for="exampleText" class="col-sm-12 texto_itens_carrinho"><b>Observações</b></label>
                <div class="col-sm-12">
                  <input name="observacoes" id="observacoes" placeholder="" type="text"
                    class="form-control texto_itens_carrinho">
                </div>
              </div>
            </div>
            <div class='row' style='float:right; padding:0px'>
              <button type='submit' style='' class="mt-1 btn btn-success float-right">Adicionar Outra Despesa <i
                  class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
            <div class='row' style='margin-top:30px !important; padding:0px'>
              <div class="col-12 col-sm-12 col-md-12" style='margin-top:40px;padding:0px'>
                <label for="exampleText" class="col-sm-12 texto_itens_carrinho"><b>Lista de Entradas</b></label>
                <div class="col-sm-12">
                  <ul id='lista_entradas'>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </form>


      </div>
      <div class="modal-footer">
        <!-- <h2 style='float:left'>Valor total: <span>R$ 1.500,00</span></h2> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id='botao_atualizar' onclick='atualizar_relatorio_cambista()'
          class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>