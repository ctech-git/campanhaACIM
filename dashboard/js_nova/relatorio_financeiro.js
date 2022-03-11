function relatorio_financeiro() {
  carregar_tabela_financeira();
  buscar_bancos();
  grafico_centros();
}

function carregar_tabela_financeira() {

  var data_inicio = $('#pesquisa_data_inicial').val();
  var data_fim = $('#pesquisa_data_final').val();


  $.ajax({
    url: "ControlHost/buscar_relatorio_financeiro.php",
    dataType: "json",
    data: {
      data_inicio: data_inicio,
      data_fim: data_fim
    },
    success: function (data) {

      var table = $('#relatorioGerencial').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#relatorioGerencial').DataTable({
        'paging': true,
        'info': false,
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        },
        "footerCallback": function (row, data, start, end, display) {
          var api = this.api(), data;

          // Remove the formatting to get integer data for summation
          var intVal = function (i) {
            console.log(i);
            if (typeof i === 'string') {
              i = i.replace('.', '');
            }
            return typeof i === 'string' ?
              i.replace(/[\$,]/g, '') * 1 :
              typeof i === 'number' ?
                i : 0;
          };

          total = api
            .column(7)
            .data()
            .reduce(function (a, b) {
              return intVal(a) + intVal(b);
            }, 0);

          pageTotal = api
            .column(7, { page: 'current' })
            .data()
            .reduce(function (a, b) {
              return intVal(a) + intVal(b);
            }, 0);


          pageTotal = pageTotal / 100;
          pageTotal = formatar_para_moeda(pageTotal);
          total = total / 100;
          total = formatar_para_moeda(total);
          $(api.column(7).footer()).html(
            pageTotal + ' ( ' + total + ' total)'
          );
        },
        initComplete: function () {
          this.api().columns([2, 3, 4, 5, 6]).every(function () {
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
        var tipo_movimentacao = data[i].tipo_movimentacao;
        var descricao = data[i].descricao;
        var valor_movimentado = data[i].valor_movimentado;
        var data_movimentacao = data[i].data_movimentacao;
        var observacao = data[i].observacao;
        var conta_bancaria = data[i].conta_bancaria;
        var id = data[i].id;
        var centro_de_custos = data[i].centro_de_custos;

        centro_de_custos = centro_de_custos.toUpperCase();
        observacao = observacao.toUpperCase();

        if (tipo_movimentacao == 'entrada') { soma_entradas += formatar_para_numero(valor_movimentado) }
        else { soma_saidas += formatar_para_numero(valor_movimentado) }

        if (tipo_movimentacao == 'saida') {
          valor_movimentado = formatar_para_numero(valor_movimentado) * (-1);
          valor_movimentado = parseFloat(valor_movimentado).toLocaleString('pt-BR', { minimumFractionDigits: 2 })
        }
        tipo_movimentacao = (tipo_movimentacao == 'entrada') ? 'Entrada' : 'Saída';

        var seta = tipo_movimentacao == 'Entrada' ?
          `<span><i style='color:green' class='fa fa-arrow-up'></i></span>` :
          `<span><i style='color:red' class='fa fa-arrow-down'></i></span>`;

        data_movimentacao = data_movimentacao.split(' '); data_movimentacao = data_movimentacao[0];
        data_movimentacao = data_movimentacao.split('-'); data_movimentacao = data_movimentacao[2] + '/' + data_movimentacao[1] + '/' + data_movimentacao[0]

        conta_bancaria = bancos[conta_bancaria];

        t.row.add([
          id,
          seta,
          tipo_movimentacao,
          data_movimentacao,
          centro_de_custos,
          observacao,
          conta_bancaria,
          valor_movimentado,
          `<div style='display:flex' class="btn-group">
          <button class='btn btn-info' onclick='editar_relatorio(${data[i].id})'><span><i class='fa fa-pencil'></i></span></button>
          <button class='btn btn-danger' onclick='excluir_relatorio(${data[i].id})'><span><i class='fa fa-times'></i></span></button>
          </div>`
        ]).draw(false);
      }

      var soma_geral = soma_entradas - soma_saidas;
      soma_saidas = parseFloat(soma_saidas).toLocaleString('pt-BR', { minimumFractionDigits: 2 })
      soma_entradas = parseFloat(soma_entradas).toLocaleString('pt-BR', { minimumFractionDigits: 2 })
      soma_geral = parseFloat(soma_geral).toLocaleString('pt-BR', { minimumFractionDigits: 2 })

      $('#soma_saidas').html('R$ ' + soma_saidas);
      $('#soma_entradas').html('R$ ' + soma_entradas);
      $('#soma_geral').html('R$ ' + soma_geral);
      //var id = 'grafico_caixas';
      //gerar_grafico(id, labels, dados);


    }
  });
}



function gerar_grafico_pizza(id, labels, dados) {

  var labels = ['INTERNET', 'EQUIPAMENTOS', 'VIAGENS', 'MARKETING', 'ALUGUEL', 'TRANSPORTE', 'OUTRAS']
  var dados = [5, 20, 35, 10, 13, 20, 30];

  new Chart(document.getElementById(id), {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [
        {
          label: "Despesas:",
          backgroundColor: colorScheme,
          data: dados
        }
      ]
    },
    options: {
      indexAxis: 'y',
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
  });
}

function gerar_grafico(id, labels, dados) {

  var ctx = document.getElementById(id).getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Supervisor',
        data: dados,
        backgroundColor: colorScheme,
        borderColor: colorScheme,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}

function calcular_comissao() {
  var valorCaixa = $('#caixa').val();
  var comissao = $('#comissao').val();
  valorCaixa = formatar_para_numero(valorCaixa);

  var resultado = (valorCaixa * comissao) / 100;
  resultado = parseFloat(resultado).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })
  $('#text_valor_comissao').val(resultado);
}

function salvar_form_relatorio() {

  $('#botao_adicionar').html('Adicionando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')

  var tipo_movimentacao = document.getElementById("tipo_movimentacao").value;
  var descricao = document.getElementById("descricao").value;
  var valor_movimentado = document.getElementById("valor_movimentado").value;
  var data_movimentacao = document.getElementById("data_movimentacao").value;
  var observacao = document.getElementById("observacao").value;
  var conta_bancaria = document.getElementById("conta_bancaria").value;
  var centro_de_custo = document.getElementById("centro_de_custo_principal").value;
  var gerencia = document.getElementById("gerencia").value;
  var idEmpresa = document.getElementById("idEmpresa").value;

  $.ajax({
    url: "ControlHost/salvar_financeiro.php",
    data: {
      tipo_movimentacao: tipo_movimentacao,
      descricao: descricao,
      valor_movimentado: valor_movimentado,
      data_movimentacao: data_movimentacao,
      observacao: observacao,
      centro_de_custo: centro_de_custo,
      gerencia: gerencia,
      idEmpresa: idEmpresa,
      conta_bancaria: conta_bancaria
    },
    success: function (data) {
      if (data == "Sucesso") {
        $('#botao_adicionar').html('Adicionar');

        carregar_tabela_financeira();
        Swal.fire(
          'Adicionado!',
          'Pode prosseguir!',
          'success'
        )
        carregar_tabela_financeira();
      }
      else {
        Swal.fire(
          'Algo de errado!',
          'Você preencheu tudo?!',
          'error'
        )
      }
    }
  });
};

$("#form_outras_entradas").on('submit', function (event) {
  event.preventDefault();

  var id_outras_entradas = $('#id_outras_entradas').val();
  var valor_movimentado = $('#valor_movimentado').val();
  var observacoes = $('#observacoes').val();


  valor_movimentado = formatar_para_numero(valor_movimentado);

  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas');
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
  } else { carrinho_entradas = []; }

  carrinho_entradas.push({
    id_outras_entradas: id_outras_entradas,
    valor_movimentado: valor_movimentado,
    observacoes: observacoes
  });

  sessionStorage.setItem('carrinho_entradas', JSON.stringify(carrinho_entradas));
  mostrar_lista_entradas();

  $('#id_outras_entradas').val('');
  $('#valor_movimentado').val('');
  $('#observacoes').val('');
  $('#id_outras_entradas').focus();
});

$("#editar_form_outras_entradas").on('submit', function (event) {
  event.preventDefault();

  var id_outras_entradas = $('#editar_id_outras_entradas').val();
  var valor_movimentado = $('#editar_valor_movimentado').val();
  var observacoes = $('#editar_observacoes').val();


  valor_movimentado = formatar_para_numero(valor_movimentado);

  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas_editar');
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
  } else { carrinho_entradas = []; }

  carrinho_entradas.push({
    id_outras_entradas: id_outras_entradas,
    valor_movimentado: valor_movimentado,
    observacoes: observacoes
  });

  sessionStorage.setItem('carrinho_entradas_editar', JSON.stringify(carrinho_entradas));
  mostrar_lista_entradas_editar();

  $('#editar_id_outras_entradas').val('');
  $('#editar_valor_movimentado').val('');
  $('#editar_observacoes').val('');
  $('#id_outras_entradas').focus();
});

function formatar_para_numero(valor) {
  valor = valor.replace(/[^\d]+/g, '') / 100;
  return valor;
}

function excluir_relatorio(id) {
  Swal.fire({
    title: 'Você tem certeza??',
    text: "Não há como voltar atrás!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim, delete!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "ControlHost/excluir_relatorio_financeiro.php",
        async: false,
        data: {
          id: id
        },
        success: function (data) {

          if (data == 'Sucesso') {
            carregar_tabela_financeira();
          }

        }
      });
      Swal.fire(
        'Deletado!',
        'Seu relatório foi deletado.',
        'success'
      )
    }
  })
}

function editar_relatorio(id) {
  $.ajax({
    url: "ControlHost/buscar_relatorio_financeiro_id.php",
    dataType: "json",
    data: {
      id: id
    },
    success: function (data) {
      chamar_modal_relatorio(data);
    }
  });
}

function chamar_modal_relatorio(data) {
  $('#modal_editar_relatorio').modal();

  var data_movimentacao = data[0].data_movimentacao;
  data_movimentacao = data_movimentacao.split(' ');
  data_movimentacao = data_movimentacao[0];

  $('#e_id').val(data[0].id);
  $('#e_tipo_movimentacao').val(data[0].tipo_movimentacao);
  $('#e_descricao').val(data[0].descricao);
  $('#e_valor_movimentado').val(data[0].valor_movimentado);
  $('#e_data_movimentacao').val(data_movimentacao);
  $('#e_conta_bancaria').val(data[0].conta_bancaria);
  $('#e_observacao').val(data[0].observacao);
  $('#e_gerencia').val(data[0].gerencia);
  $('#e_centro_de_custo').val(data[0].centro_de_custo);
}

function atualizar_relatorio() {

  $('#botao_atualizar').html('Atualizando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')

  var id = $('#e_id').val();
  var tipo_movimentacao = $('#e_tipo_movimentacao').val();
  var descricao = $('#e_descricao').val();
  var valor_movimentado = $('#e_valor_movimentado').val();
  var data_movimentacao = $('#e_data_movimentacao').val();
  var conta_bancaria = $('#e_conta_bancaria').val();
  var observacao = $('#e_observacao').val();
  var gerencia = $('#e_gerencia').val();
  var centro_de_custo = $('#e_centro_de_custo').val();

  $.ajax({
    url: "ControlHost/atualizar_relatorio_financeiro.php",
    data: {
      id: id,
      tipo_movimentacao: tipo_movimentacao,
      descricao: descricao,
      valor_movimentado: valor_movimentado,
      data_movimentacao: data_movimentacao,
      conta_bancaria: conta_bancaria,
      observacao: observacao,
      gerencia: gerencia,
      centro_de_custo: centro_de_custo,
    },
    success: function (data) {
      if (data == 'Sucesso') {
        $('#botao_atualizar').html('Atualizar');
        $('#modal_editar_relatorio').modal('hide');
        //carregar_tabela_financeira();
      }

    }
  });


}

function buscar_centros() {
  $.ajax({
    url: "ControlHost/buscar_centros_de_custo.php",
    dataType: "json",
    data: {
    },
    success: function (data) {
      if (data) {

        data.map(function (item, indice) {
          $('#centro_de_custo_principal').append(
            `<option value = '` + item.id + `' > ` + item.descricao + `</option> `)

          $('#e_centro_de_custo').append(
            `<option value = '` + item.id + `' > ` + item.descricao + `</option> `)


        });
      }

    }
  });
}

function buscar_socios() {
  $.ajax({
    url: "ControlHost/buscar_socios.php",
    dataType: "json",
    data: {
    },
    success: function (data) {
      data.map(function (item, indice) {
        $('#gerencia').append(
          `<option value = '` + item.id + `' > ` + item.nome + `</option> `);

        $('#e_gerencia').append(
          `<option option value = '` + item.id + `' > ` + item.nome + `</option> `);
      });
    }
  });
}

function grafico_centros() {

  var data_inicio = $('#pesquisa_data_inicial').val();
  var data_fim = $('#pesquisa_data_final').val();

  $('#grafico_despesas').html(
    `<canvas id="bar-chart"></canvas>`
  );

  $.ajax({
    url: 'ControlHost/buscar_relatorio_financeiro_centros.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      data_inicio: data_inicio,
      data_fim: data_fim
    },
    success: function (data) {

      var agrupado = groupBy(data, 'descricao');
      agrupado = Object.entries(agrupado);
      console.log(agrupado);

      var labels = [];
      var valores_entradas = [];
      var valores_saidas = [];

      for (let i = 0;i < agrupado.length;i++) {
        const element = agrupado[i];
        var label = element[0];
        var array = element[1];

        labels.push(label);
        var soma_entrada = 0;
        var soma_saida = 0;
        array.map(function (item, indice) {
          var valor = item.valor_movimentado;
          var tipo = item.tipo_movimentacao;
          // soma += tipo == 'entrada' ? Number(formatar_para_numero(valor)) : Number((formatar_para_numero(valor)) * (-1));
          soma_entrada += tipo == 'entrada' ? Number(formatar_para_numero(valor)) : 0;
          soma_saida += tipo == 'saida' ? Number(formatar_para_numero(valor)) * (-1) : 0;
        });
        valores_entradas.push(soma_entrada);
        valores_saidas.push(soma_saida);
      }

      new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [
            {
              label: "Entradas",
              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
              data: valores_entradas
            },
            {
              label: "Saídas",
              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
              data: valores_saidas
            },
          ]
        },
        options: {
          legend: {
            display: false
          },
          title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
          }
        }
      });
    }
  });
}

