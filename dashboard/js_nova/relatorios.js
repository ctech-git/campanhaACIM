function buscar_bancos() {

  $('#colunas_bancos').html('');

  var data_inicio = $('#pesquisa_data_inicial').val();
  var data_fim = $('#pesquisa_data_final').val();

  $.ajax({
    url: "ControlHost/buscar_bancos.php",
    dataType: "json",
    data: {
      data_inicio: data_inicio,
      data_fim: data_fim
    },
    success: function (data) {

      var vetor_bancos = [];

      for (let i = 0;i < data.length;i++) {
        const element = data[i];
        vetor_bancos.push({
          id: element.id,
          descricao: element.descricao,
          soma: 0
        })
      }

      $.ajax({
        url: "ControlHost/buscar_relatorio_financeiro.php",
        dataType: "json",
        data: {
          data_inicio: data_inicio,
          data_fim: data_fim
        },
        success: function (financas) {



          for (var j = 0;j < financas.length;j++) {
            var valor = 0;
            if (financas[j].tipo_movimentacao == 'entrada') { valor = formatar_para_numero(financas[j].valor_movimentado); }
            else { valor = formatar_para_numero(financas[j].valor_movimentado) * (-1) }

            for (var k = 0;k < vetor_bancos.length;k++) {
              if (financas[j].conta_bancaria == vetor_bancos[k].id) {
                vetor_bancos[k].soma += valor;
              }
            }
          }

          var total = 0;
          for (let i = 0;i < vetor_bancos.length;i++) {
            total += Math.abs(vetor_bancos[i].soma);
          }

          for (let i = 0;i < vetor_bancos.length;i++) {
            const element = vetor_bancos[i];
            var porcentagem = 0;

            porcentagem = Math.abs(element.soma) * 100 / total;

            porcentagem = porcentagem.toFixed(1);

            var resultado = parseFloat(element.soma).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })

            $('#colunas_bancos').append(
              ` <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" onclick='carregar_tabela_banco(` + element.id + `)' style='margin-bottom:10px'>
            <div class="analytics-sparkle-line reso-mg-b-30" style='background-color: #eee'>
              <div class="analytics-content">
                <h5>`+ element.descricao + `</h5>
                <h2><span id='' class="counter"></span> `+ resultado + ` </h2>
                <span class="text-danger">`+ porcentagem + `%</span>
                <div class="progress m-b-0">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100" style="width:`+ porcentagem + `%;"> <span class="sr-only">230%
                      Complete</span> </div>
                </div>
              </div>
            </div>
          </div>`
            )
          }
        }
      });
    }
  });
}

function carregar_tabela_banco(id) {
  var data_inicio = $('#pesquisa_data_inicial').val();
  var data_fim = $('#pesquisa_data_final').val();

  $.ajax({
    url: "ControlHost/buscar_banco_id.php",
    dataType: "json",
    data: {
      id: id,
      data_inicio: data_inicio,
      data_fim: data_fim
    },
    success: function (data) {

      var table = $('#relatorioBanco').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#relatorioBanco').DataTable({
        'paging': true,
        'info': false,
        // 'dom': 'Bfrtip',
        // 'buttons': [
        //   'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        'responsive': 'true',
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
        , initComplete: function () {
          this.api().columns([1, 4, 5]).every(function () {
            var column = this;
            var select = $('<select><option value=""></option></select>')
              .appendTo($(column.header()).empty())
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '', true, false)
                  .draw();
              });

            column.data().unique().sort().each(function (d, j) {
              select.append('<option value="' + d + '">' + d + '</option>')
            });
          });
        }
      });

      var labels = [];
      var dados = [];

      var bancos = ['', 'Banco do Brasil', 'Bradesco', 'MB Caixa', 'Caixa 28858-9', 'Caixa 26231-6', 'Caixa 16550-0', 'Nubank', 'Mercado Pago'];

      var soma_entradas = 0;
      var soma_saidas = 0;

      for (var i = 0;i < data.length;i++) {

        console.log(data);

        var tipo_movimentacao = data[i].tipo_movimentacao;
        var descricao = data[i].descricao;
        var valor_movimentado = data[i].valor_movimentado;
        var data_movimentacao = data[i].data_movimentacao;
        var observacao = data[i].observacao;
        var conta_bancaria = data[i].conta_bancaria;
        var id = data[i].id;
        var centro_de_custo = data[i].centro_de_custo;

        if (tipo_movimentacao == 'entrada') { soma_entradas += formatar_para_numero(valor_movimentado) }
        else { soma_saidas += formatar_para_numero(valor_movimentado) }

        if (tipo_movimentacao == 'saida') {
          valor_movimentado = formatar_para_numero(valor_movimentado) * (-1);
          valor_movimentado = parseFloat(valor_movimentado).toLocaleString('pt-BR', { minimumFractionDigits: 2 })
        }
        tipo_movimentacao = (tipo_movimentacao == 'entrada') ? 'Entrada <span><i style="color:green" class="fa fa-arrow-up"></span>' : 'Saída <span><i style="color:red" class="fa fa-arrow-down"></span>';

        data_movimentacao = data_movimentacao.split(' '); data_movimentacao = data_movimentacao[0];
        data_movimentacao = data_movimentacao.split('-'); data_movimentacao = data_movimentacao[2] + '/' + data_movimentacao[1] + '/' + data_movimentacao[0]

        conta_bancaria = bancos[conta_bancaria];



        t.row.add([
          id,
          tipo_movimentacao,
          descricao,
          valor_movimentado,
          data_movimentacao,
          conta_bancaria,
          observacao,
          "<button class='btn btn-info' onclick='editar_relatorio(" + data[i].id + ")'>Editar</button>" +
          "<button class='btn btn-danger' onclick='excluir_relatorio(" + data[i].id + ")'>Excluir</button>"
        ]).draw(false);
      }

      soma_saidas = parseFloat(soma_saidas).toLocaleString('pt-BR', { minimumFractionDigits: 2 })
      soma_entradas = parseFloat(soma_entradas).toLocaleString('pt-BR', { minimumFractionDigits: 2 })

      $('#soma_saidas').html(soma_saidas);
      $('#soma_entradas').html(soma_entradas);
      //var id = 'grafico_caixas';
      //gerar_grafico(id, labels, dados);


    }
  });
}

function decidir_data_inicial() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  if (dd < 10) {
    dd = '0' + dd
  }
  if (mm < 10) {
    mm = '0' + mm
  }
  // today = yyyy + '-' + mm + '-' + dd;
  today = yyyy + '-' + mm + '-' + dd;
  var inicio = yyyy + '-' + mm + '-' + '01';
  document.getElementById("pesquisa_data_final").value = today;
  document.getElementById("pesquisa_data_inicial").value = inicio;

}