const colorScheme = [
  "#25CCF7", "#FD7272", "#54a0ff", "#00d2d3",
  "#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e",
  "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50",
  "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6",
  "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d",
  "#55efc4", "#81ecec", "#74b9ff", "#a29bfe", "#dfe6e9",
  "#00b894", "#00cec9", "#0984e3", "#6c5ce7", "#ffeaa7",
  "#fab1a0", "#ff7675", "#fd79a8", "#fdcb6e", "#e17055",
  "#d63031", "#feca57", "#5f27cd", "#54a0ff", "#01a3a4"
]



function carregar_tabela_relatorio() {
  $.ajax({
    url: "ControlHost/buscar_relatorios.php",
    dataType: "json",
    data: {
    },
    success: function (data) {

      var table = $('#relatorioGerencial').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#relatorioGerencial').DataTable({
        'paging': false,
        'info': false,
        "order": [[0, "desc"]],
        // 'dom': 'Bfrtip',
        // 'buttons': [
        //   'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        'responsive': 'true',
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
        // ,initComplete: function () {
        //   this.api().columns([4,5]).every( function () {
        //     var column = this;
        //     var select = $('<select><option value=""></option></select>')
        //     .appendTo( $(column.header()).empty() )
        //     .on( 'change', function () {
        //       var val = $.fn.dataTable.util.escapeRegex(
        //         $(this).val()
        //       );
        //
        //       column
        //       .search( val ? '^'+val+'$' : '', true, false )
        //       .draw();
        //     } );
        //
        //     column.data().unique().sort().each( function ( d, j ) {
        //       select.append( '<option value="'+d+'">'+d+'</option>' )
        //     } );
        //   } );
        // }
      });

      var labels = [];
      var dados = [];

      for (var i = 0;i < data.length;i++) {

        var supervisor = data[i].supervisor;
        var gerencia = data[i].gerencia;
        var caixa = data[i].caixa;
        var comissao = data[i].comissao;
        var despesas = data[i].despesas;
        var status = data[i].status;
        var ajuda_custo = data[i].ajudaCusto;

        labels.push(gerencia);
        dados.push(formatar_para_numero(caixa));

        status = (status == 0) ? 'Em aberto' : 'Pago';

        t.row.add([
          supervisor,
          gerencia,
          caixa,
          comissao,
          despesas,
          ajuda_custo,
          status,
          "<button class='btn btn-info' onclick='editar_relatorio(" + data[i].id + ")'>Editar</button>" +
          "<button class='btn btn-danger' onclick='excluir_relatorio(" + data[i].id + ")'>Excluir</button>"
        ]).draw(false);
      }

      var id = 'grafico_caixas';
      gerar_grafico(id, labels, dados);

      var id = 'grafico_despesas';
      gerar_grafico_pizza(id, labels, dados);

    }
  });
}

function tabelaRelatorios() {

  $.ajax({
    url: "ControlHost/buscar_relatorios_supervisores.php",
    dataType: "json",
    data: {
    },
    success: function (data) {

      var table = $('#tabela_dados_relatorios').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#tabela_dados_relatorios').DataTable({
        'paging': false,
        'info': false,
        "order": [[0, "desc"]],
        'responsive': 'true',
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
      });

      for (var i = 0;i < data.length;i++) {

        var nomeGerencia = data[i].nomeGerencia;
        var nome = data[i].nome;
        var data_inicial = data[i].data_inicial;
        var data_final = data[i].data_final;
        var createdAt = data[i].createdAt;
        var comissaoGerente = data[i].comissaoGerente;

        data_inicial = formatarData(data_inicial);
        data_final = formatarData(data_final);
        createdAt = formatarData(createdAt);

        var textoData = data_inicial + ' - ' + data_final;

        t.row.add([
          nome,
          nomeGerencia,
          textoData,
          comissaoGerente + '%',
          createdAt,
          "<button class='btn btn-info' onclick='editar_relatorio_gerencial(" + data[i].id + ")'>Editar</button>" +
          "<button class='btn btn-danger' onclick='excluir_relatorio_gerencial(" + data[i].id + ")'>Excluir</button>"
        ]).draw(false);
      }


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

  event.preventDefault();

  $('#botao_adicionar').html('Adicionando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')

  var supervisor = document.getElementById("supervisor").value;
  var gerencia = document.getElementById("gerencia").value;
  var caixa = document.getElementById("caixa").value;
  var comissao = document.getElementById("comissao").value;
  var despesas = sessionStorage.getItem('carrinho_entradas');
  var ajuda_custo = document.getElementById("ajuda_custo").value;

  var data_inicial = document.getElementById("data_inicial").value;
  var data_final = document.getElementById("data_final").value;

  $.ajax({
    url: "ControlHost/salvar_relatorio.php",
    data: {
      supervisor: supervisor,
      gerencia: gerencia,
      caixa: caixa,
      comissao: comissao,
      despesas: despesas,
      data_inicial: data_inicial,
      data_final: data_final,
      ajuda_custo: ajuda_custo

    },
    success: function (data) {
      if (data == "Sucesso") {
        $('#botao_adicionar').html('Adicionar');

        document.getElementById("gerencia").value = '';
        document.getElementById("caixa").value = '';
        document.getElementById("comissao").value = '';
        document.getElementById("text_valor_comissao").value = '';
        sessionStorage.removeItem("carrinho_entradas");
        document.getElementById("ajuda_custo").value = '';

        mostrar_lista_entradas();

        Swal.fire(
          'Adicionado!',
          'Pode prosseguir!',
          'success'
        )
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

function mostrar_lista_entradas() {

  $('#lista_entradas').html('');

  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas');
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
  } else { carrinho_entradas = []; }

  for (var i = 0;i < carrinho_entradas.length;i++) {
    var observacoes = carrinho_entradas[i].observacoes;
    var id_outras_entradas = carrinho_entradas[i].id_outras_entradas;
    var valor_movimentado = carrinho_entradas[i].valor_movimentado;

    var texto_entrada = '';
    var entradas = [
      '', 'INTERNET', 'EQUIPAMENTOS', 'VIAGENS', 'MARKETING', 'ALUGUEL', 'TRANSPORTE', 'OUTRAS']
    if (id_outras_entradas) {
      texto_entrada = entradas[id_outras_entradas];
    }

    if (observacoes) {
      observacoes = '(' + observacoes + ')';
    }

    valor_movimentado = parseFloat(valor_movimentado).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })
    $('#lista_entradas').append(
      `
        <li> `+ texto_entrada + ` ` + observacoes + ` - ` + valor_movimentado + ` <span onclick="excluir_lista_entrada(` + i + `)" ><i class="fa fa-close" style='color:red'></i></span> </li>
        `
    );
  }
}

function excluir_lista_entrada(index) {
  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas');
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
    carrinho_entradas.splice(index, 1);
    sessionStorage.setItem('carrinho_entradas', JSON.stringify(carrinho_entradas));
    mostrar_lista_entradas();
  }
}

function formatar_para_numero(valor) {
  valor = valor.replace(/[^\d]+/g, '') / 100;
  return valor;
}

function excluir_relatorio_gerencial(id) {
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
        url: "ControlHost/gerencia/excluir_relatorio.php",
        async: false,
        data: {
          id: id
        },
        success: function (data) {

          if (data == 'Sucesso') {
            tabelaRelatorios();
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

function editar_relatorio_gerencial(id) {
  $.ajax({
    url: "ControlHost/buscar_relatorio_id.php",
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

  $('#editar_descricao').val(data[0].descricao);
  $('#editar_supervisor').val(data[0].supervisor);
  $('#editar_gerencia').val(data[0].gerencia);
  $('#editar_caixa').val(data[0].caixa);
  $('#editar_comissao').val(data[0].comissao);
  $('#id_relatorio').val(data[0].id);

  var valor_caixa = formatar_para_numero(data[0].caixa);

  var text_valor_comissao = valor_caixa * Number(data[0].comissao) / 100;

  $('#editar_text_valor_comissao').val(text_valor_comissao);
  $('#editar_ajuda_custo').val(data[0].ajudaCusto);

  var despesas = data[0].despesas;

  if (despesas && despesas != '[]') {

    sessionStorage.setItem('carrinho_entradas_editar', despesas);
    mostrar_lista_entradas_editar();
  }
}

function mostrar_lista_entradas_editar() {

  $('#editar_lista_entradas').html('');

  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas_editar');
  console.log(carrinho_entradas);
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
  } else { carrinho_entradas = []; }

  console.log(carrinho_entradas);
  for (var i = 0;i < carrinho_entradas.length;i++) {


    var observacoes = carrinho_entradas[i].observacoes;
    var id_outras_entradas = carrinho_entradas[i].id_outras_entradas;
    var valor_movimentado = carrinho_entradas[i].valor_movimentado;

    var texto_entrada = '';
    var entradas = [
      '', 'INTERNET', 'EQUIPAMENTOS', 'VIAGENS', 'MARKETING', 'ALUGUEL', 'TRANSPORTE', 'OUTRAS']
    if (id_outras_entradas) {
      texto_entrada = entradas[id_outras_entradas];
    }

    if (observacoes) {
      observacoes = '(' + observacoes + ')';
    }

    valor_movimentado = parseFloat(valor_movimentado).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })
    $('#editar_lista_entradas').append(
      `
        <li> `+ texto_entrada + ` ` + observacoes + ` - ` + valor_movimentado + ` <span onclick="excluir_lista_entrada_editar(` + i + `)" ><i class="fa fa-close" style='color:red'></i></span> </li>
        `
    );
  }
}

function excluir_lista_entrada_editar(index) {
  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas_editar');
  if (carrinho_entradas) {
    carrinho_entradas = JSON.parse(carrinho_entradas);
    carrinho_entradas.splice(index, 1);
    sessionStorage.setItem('carrinho_entradas_editar', JSON.stringify(carrinho_entradas));
    mostrar_lista_entradas_editar();
  }
}

function atualizar_relatorio() {
  var id = $('#id_relatorio').val();


}

function relatorio_gerencias(data) {

  data = groupBy(data, 'idRelatorio');
  data = Object.entries(data);
  var vetor_gerencias = [];
  for (var i = 0;i < data.length;i++) {
    var relatorio = data[i];
    var id_relatorio = relatorio[0];
    var dados = relatorio[1];
    var total = retornar_total(dados);
    var gerente = dados[0].gerente;
    vetor_gerencias.push({
      id_relatorio: id_relatorio,
      gerente: gerente,
      total: total
    })
  }
  //SOMAR SEMANA COM SEMANA DO MESMO COLABORADOR;
  melhores_gerencias(vetor_gerencias)
  // piores_gerencias(vetor_gerencias)
  fechar_modal_spinner();
}


function melhores_gerencias(vetor) {

  vetor = groupByCarrinho(vetor, 'gerente');
  vetor = Object.entries(vetor);

  $('#melhor_gerencia').html('');

  var novo_vetor = [];

  console.log(vetor);

  for (let i = 0;i < vetor.length;i++) {
    var elemento = vetor[i];
    var nome = elemento[0];
    var valor = elemento[1];
    novo_vetor.push({
      'nome': nome,
      'total': valor
    })
  }

  vetor = novo_vetor.sort(function (x, y) {
    return y.total - x.total;
  });



  for (let i = 0;i < vetor.length;i++) {
    var nome = vetor[i].nome;
    var total = vetor[i].total;
    total = formatar_para_moeda(total);
    $('#melhor_gerencia').append(
      `<div class="single-review-st-text">
      <img src="img/notification/1.jpg" alt="">
      <div class="review-ctn-hf">
        <h3>${i + 1} - ${nome}</h3>
        <p>${total}</p>
      </div>
      <div class="review-item-rating">
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star-half"></i>
      </div>
    </div>`
    );
  }
}

function piores_gerencias(vetor) {

  vetor.sort(function (x, y) {
    return x.total - y.total;
  });


  $('#pior_gerencia').html('');
  for (let i = 0;i < 5;i++) {
    var valor = vetor[i].total;
    valor = formatar_para_moeda(valor);
    $('#pior_gerencia').append(
      `<div class="single-review-st-text">
      <img src="img/notification/1.jpg" alt="">
      <div class="review-ctn-hf">
        <h3>${vetor[i].gerente}</h3>
        <p>${valor}</p>
      </div>
      <div class="review-item-rating">
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star"></i>
        <i class="educate-icon educate-star-half"></i>
      </div>
    </div>`
    );


  }
}

function retornar_total(data) {
  var soma_entrada = 0;
  var soma_saida = 0;
  var soma_comissoes = 0;
  var soma_total = 0;
  var soma_gerente_subtotal = 0;

  var soma_subtotal = 0;
  var soma_vales = 0;
  var soma_despesas = 0;
  var soma_comissao_total = 0;
  var soma_internet = 0;
  var soma_total = 0;
  var comissaoCambista = 0;

  for (var i = 0;i < data.length;i++) {

    var id = data[i].id;
    var colaborador = data[i].colaborador;

    var entradas = data[i].entradas;
    var saidas = data[i].saidas;
    var comissoes = data[i].comissoes;
    var gerente = data[i].gerente;

    var acordos = data[i].acordos ? data[i].acordos : 0;
    var comprovantes = data[i].comprovantes ? data[i].comprovantes : 0;

    var despesas = data[i].despesas;
    var somatoria_despesa = 0;
    if (despesas) {
      despesas = JSON.parse(despesas);

      despesas.map(function (item, indice) {
        somatoria_despesa += Number(item.valor_movimentado);
      });
    }

    var subtotal = Number(entradas) - Number(saidas) - Number(comissoes);

    var vales = data[i].lancamentos ? data[i].lancamentos : 0;
    var internet = data[i].internet ? data[i].internet : 0;

    var comissao_total = data[i].comissaoCambista ? data[i].comissaoCambista : 0;
    comissaoCambista = comissao_total;
    comissao_total = subtotal * comissao_total / 100;

    var total = subtotal + Number(vales) - Number(somatoria_despesa);

    total = total - internet;

    soma_entrada += Number(entradas);
    soma_saida += Number(saidas);
    soma_comissoes += Number(comissoes);
    soma_total += Number(total);
    soma_gerente_subtotal += Number(subtotal);

    soma_subtotal += Number(subtotal);
    soma_vales += Number(vales);
    soma_despesas += Number(somatoria_despesa);
    soma_comissao_total += Number(comissao_total);
    soma_internet += Number(internet);
  }
  return soma_total;
}

/////Buscar Relatório por Gerente
function buscar_relatorio_gerente(id) {

  var data_inicial = document.getElementById('pesquisa_data_inicial').value;
  var data_final = document.getElementById('pesquisa_data_final').value;

  $.ajax({
    url: 'ControlHost/buscar_relatorio_gerente.php',
    dataType: 'json',
    destroy: true,
    data: {
      id,
      data_inicial,
      data_final
    },
    success: function (data) {
      gerarRelatorioGerente(data);
    }
  });
}

function gerarRelatorioGerente(data) {

  data = groupBy(data, 'idRelatorio');
  data = Object.entries(data);
  var array = [];

  for (let i = 0;i < data.length;i++) {
    const element = data[i];
    var id = element[0];
    var dados = element[1];
    var data_inicial = dados[0].data_inicial;
    var data_final = dados[0].data_final;
    var somatoria = retornarSomaGerencia(dados);
    var entradas = retornarEntrada(dados);
    var saidas = retornarSaida(dados);
    var texto_data = formatarData(data_inicial) + ' - ' + formatarData(data_final);
    array.push([id, texto_data, somatoria, entradas, saidas])

  }

  graficoEvolucaoGerente(array);

}

function retornarSomaGerencia(data) {

  var soma_entrada = 0;
  var soma_saida = 0;
  var soma_comissoes = 0;
  var soma_total = 0;
  var soma_gerente_subtotal = 0;

  var soma_subtotal = 0;
  var soma_vales = 0;
  var soma_despesas = 0;
  var soma_comissao_total = 0;
  var soma_internet = 0;
  var soma_total = 0;
  var comissaoCambista = 0;

  for (var i = 0;i < data.length;i++) {

    var id = data[i].id;
    var colaborador = data[i].colaborador;

    var entradas = data[i].entradas;
    var saidas = data[i].saidas;
    var comissoes = data[i].comissoes;
    var gerente = data[i].gerente;

    var acordos = data[i].acordos ? data[i].acordos : 0;
    var comprovantes = data[i].comprovantes ? data[i].comprovantes : 0;

    var despesas = data[i].despesas;
    var somatoria_despesa = 0;
    if (despesas) {
      despesas = JSON.parse(despesas);

      despesas.map(function (item, indice) {
        somatoria_despesa += Number(item.valor_movimentado);
      });
    }

    var subtotal = Number(entradas) - Number(saidas) - Number(comissoes);

    var vales = data[i].lancamentos ? data[i].lancamentos : 0;
    var internet = data[i].internet ? data[i].internet : 0;

    var comissao_total = data[i].comissaoCambista ? data[i].comissaoCambista : 0;
    comissaoCambista = comissao_total;
    comissao_total = subtotal * comissao_total / 100;

    var total = subtotal + Number(vales) - Number(somatoria_despesa);

    total = total - internet;

    soma_entrada += Number(entradas);
    soma_saida += Number(saidas);
    soma_comissoes += Number(comissoes);
    soma_total += Number(total);
    soma_gerente_subtotal += Number(subtotal);

    soma_subtotal += Number(subtotal);
    soma_vales += Number(vales);
    soma_despesas += Number(somatoria_despesa);
    soma_comissao_total += Number(comissao_total);
    soma_internet += Number(internet);

  }

  return soma_total;
}

function retornarEntrada(data) {

  var soma_entrada = 0;
  var soma_saida = 0;
  var soma_comissoes = 0;
  var soma_total = 0;
  var soma_gerente_subtotal = 0;

  var soma_subtotal = 0;
  var soma_vales = 0;
  var soma_despesas = 0;
  var soma_comissao_total = 0;
  var soma_internet = 0;
  var soma_total = 0;
  var comissaoCambista = 0;

  for (var i = 0;i < data.length;i++) {

    var id = data[i].id;
    var colaborador = data[i].colaborador;

    var entradas = data[i].entradas;
    var saidas = data[i].saidas;
    var comissoes = data[i].comissoes;
    var gerente = data[i].gerente;

    var acordos = data[i].acordos ? data[i].acordos : 0;
    var comprovantes = data[i].comprovantes ? data[i].comprovantes : 0;

    var despesas = data[i].despesas;
    var somatoria_despesa = 0;
    if (despesas) {
      despesas = JSON.parse(despesas);

      despesas.map(function (item, indice) {
        somatoria_despesa += Number(item.valor_movimentado);
      });
    }

    var subtotal = Number(entradas) - Number(saidas) - Number(comissoes);

    var vales = data[i].lancamentos ? data[i].lancamentos : 0;
    var internet = data[i].internet ? data[i].internet : 0;

    var comissao_total = data[i].comissaoCambista ? data[i].comissaoCambista : 0;
    comissaoCambista = comissao_total;
    comissao_total = subtotal * comissao_total / 100;

    var total = subtotal + Number(vales) - Number(somatoria_despesa);

    total = total - internet;

    soma_entrada += Number(entradas);
    soma_saida += Number(saidas);
    soma_comissoes += Number(comissoes);
    soma_total += Number(total);
    soma_gerente_subtotal += Number(subtotal);

    soma_subtotal += Number(subtotal);
    soma_vales += Number(vales);
    soma_despesas += Number(somatoria_despesa);
    soma_comissao_total += Number(comissao_total);
    soma_internet += Number(internet);

  }

  return soma_entrada;
}
function retornarSaida(data) {

  var soma_entrada = 0;
  var soma_saida = 0;
  var soma_comissoes = 0;
  var soma_total = 0;
  var soma_gerente_subtotal = 0;

  var soma_subtotal = 0;
  var soma_vales = 0;
  var soma_despesas = 0;
  var soma_comissao_total = 0;
  var soma_internet = 0;
  var soma_total = 0;
  var comissaoCambista = 0;

  for (var i = 0;i < data.length;i++) {

    var id = data[i].id;
    var colaborador = data[i].colaborador;

    var entradas = data[i].entradas;
    var saidas = data[i].saidas;
    var comissoes = data[i].comissoes;
    var gerente = data[i].gerente;

    var acordos = data[i].acordos ? data[i].acordos : 0;
    var comprovantes = data[i].comprovantes ? data[i].comprovantes : 0;

    var despesas = data[i].despesas;
    var somatoria_despesa = 0;
    if (despesas) {
      despesas = JSON.parse(despesas);

      despesas.map(function (item, indice) {
        somatoria_despesa += Number(item.valor_movimentado);
      });
    }

    var subtotal = Number(entradas) - Number(saidas) - Number(comissoes);

    var vales = data[i].lancamentos ? data[i].lancamentos : 0;
    var internet = data[i].internet ? data[i].internet : 0;

    var comissao_total = data[i].comissaoCambista ? data[i].comissaoCambista : 0;
    comissaoCambista = comissao_total;
    comissao_total = subtotal * comissao_total / 100;

    var total = subtotal + Number(vales) - Number(somatoria_despesa);

    total = total - internet;

    soma_entrada += Number(entradas);
    soma_saida += Number(saidas);
    soma_comissoes += Number(comissoes);
    soma_total += Number(total);
    soma_gerente_subtotal += Number(subtotal);

    soma_subtotal += Number(subtotal);
    soma_vales += Number(vales);
    soma_despesas += Number(somatoria_despesa);
    soma_comissao_total += Number(comissao_total);
    soma_internet += Number(internet);

  }

  return soma_saida;
}

function graficoEvolucaoGerente(array) {

  var datas = [];
  var valores = [];
  var entradas = [];
  var saidas = [];
  var cores = [];

  var soma_entrada = 0;
  var soma_saidas = 0;
  var soma_total = 0;

  for (let i = 0;i < array.length;i++) {
    const element = array[i];
    datas.push(element[1]);
    valores.push(element[2]);
    entradas.push(element[3]);
    saidas.push(element[4]);

    soma_entrada += element[3];
    soma_saidas += element[4];
    soma_total += element[2];

    var cor = element[2] >= 0 ? '#5cb85c' : '#d9534f';
    cores.push(cor);

  }

  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: datas,
      datasets: [
        {
          label: "Entrada (em reais)",
          backgroundColor: '#5cb85c',
          data: entradas
        },
        {
          label: "Saída (em reais)",
          backgroundColor: '#d9534f',
          data: saidas
        },
        {
          label: "Total (em reais)",
          backgroundColor: '#0275d8',
          data: valores
        },
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Relatório da Gerência'
      }
    }
  });


  $('#total_entradas_grafico').html(formatar_para_moeda(soma_entrada));
  $('#total_saidas_grafico').html(formatar_para_moeda(soma_saidas));
  $('#total').html(formatar_para_moeda(soma_total));
}

function tabelaGerencias() {

  $.ajax({
    url: 'ControlHost/gerencia/buscar_gerentes.php',
    dataType: 'json',
    destroy: true,
    data: {
    },
    success: function (data) {
      preencherTabelaGerente(data);
    }
  });
}

function preencherTabelaGerente(data) {

  var table = $('#tabela_gerentes').DataTable();
  table.clear().draw();
  table.destroy();
  var t = $('#tabela_gerentes').DataTable({
    'paging': false,
    'info': false,
    "order": [[0, "desc"]],
    'responsive': 'true',
    "language": {
      "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
  });

  for (var i = 0;i < data.length;i++) {

    var supervisor = data[i].nome;
    var gerente = data[i].gerente;

    t.row.add([
      supervisor,
      gerente,
      `<button class='btn btn-info' onclick='ver_perfil_gerente("${encodeURI(gerente)}")'><span><i class='fa fa-pencil'></i></span></button>`
    ]).draw(false);
  }
}

function ver_perfil_gerente(id) {
  var a = document.createElement('a');
  a.href = 'perfil_gerente.php?id=' + id;
  a.setAttribute('target', '_blank');
  a.click();
}