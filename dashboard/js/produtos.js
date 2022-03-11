function excluir_movimento(id) {
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
        url: "ControlHost/excluir_movimentacao.php",
        async: false,
        dataType: 'json',
        data: {
          id: id
        },
        success: function (data) {
        }
      });
      Swal.fire(
        'Deletado!',
        'Seu arquivo foi deletado.',
        'success'
      )
    }
  })
}
function excluir_produto(id) {
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
        url: "ControlHost/excluir_produto.php",
        async: false,
        dataType: 'json',
        data: {
          id: id
        },
        success: function (data) {
        }
      });
      Swal.fire(
        'Deletado!',
        'Seu arquivo foi deletado.',
        'success'
      )
    }
  })
}

function excluir_historico(id) {
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
        url: "ControlHost/excluir_historico.php",
        async: false,
        dataType: 'json',
        data: {
          id: id
        },
        success: function (data) {
        }
      });
      Swal.fire(
        'Deletado!',
        'Seu arquivo foi deletado.',
        'success'
      )
    }
  })

}

function preencher_select_produtos() {

  $.ajax({
    url: "Control/busca_produtos.php",
    method: "POST",
    dataType: "json",
    success: function (data) {

      for (var i = 0;i < data.length;i++) {

        var descricao = '';
        descricao = data[i].descricao;


        $('#produto_movimentado').append(`<option value='` + data[i].id + `'>` + descricao + `</option>`)
      }

    }
  });
}

function ver_movimentacao(id, nome) {

  $.ajax({
    url: "ControlHost/ler_movimentacao_id.php",
    async: false,
    dataType: 'json',
    data: {
      id: id
    },
    success: function (data) {
      alerta_movimentacao(JSON.stringify(data), nome);
    }
  });

}

function alerta_movimentacao(data, nome) {
  data = JSON.parse(data);
  var html = '';

  var usuarios = [
    '',
    'Sula',
    'Rodolfo',
    'Wanderson',
    'Caetano',
    'Monique',
    'Weudson',
    'Gabriel',
    'Amauri',
    'André',
    'Cyro',
    'Pitu',
    'Paulo',
    'Vitor',
    'João Neto'
  ];

  for (var a = 0;a < data.length;a++) {
    var usuario = data[a].usuario;
    html +=
      `<b>Quantidade: ` + data[a].quantidade_produto + `</b> - ` + data[a].tipo_movimentacao + ` <br/>
      <b>Observação: `+ data[a].observacao + `</b> - ` + usuarios[usuario] + ` - ` + data[a].data_movimentado + ` <span><i style='color:red' onclick='excluir_historico(` + data[a].id + `)' class='fa fa-close'></i></span><br/><br/>
      `
  }

  Swal.fire({
    title: '<strong>' + nome + '</strong>',
    icon: 'info',
    html: html,
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      '<i class="fa fa-thumbs-up"></i> OK!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
      '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
  })

}

function ver_historico_despesa(gerencia, cambista) {

  $.ajax({
    url: "ControlHost/ler_despesas_gerencia.php",
    async: false,
    dataType: 'json',
    data: {
      gerencia: gerencia,
      cambista: cambista
    },
    success: function (data) {
      alerta_despesa(JSON.stringify(data), gerencia);
    }
  });

}

function alerta_despesa(data, nome) {
  data = JSON.parse(data);
  var html = '';


  for (var a = 0;a < data.length;a++) {

    var valor = parseFloat(data[a].valor).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' });

    html +=
      `<b>Cambista: ` + data[a].cambista + `</b> - ` + data[a].descricao + ` <br/>
      <b>Valor: `+ valor + `</b> - ` + data[a].data_adicionado + ` <span onclick="deletar_movimento('` + data[a].id + `')"><i style="color:red" class="fa fa-close"></i></span><br/><br/>
      `
  }

  Swal.fire({
    title: '<strong>' + nome + '</strong>',
    icon: 'info',
    html: html,
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      '<i class="fa fa-thumbs-up"></i> OK!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
      '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
  })

}

function deletar_movimento(id) {
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
        url: "ControlHost/excluir_movimentacao_cambista.php",
        async: false,
        dataType: 'json',
        data: {
          id: id
        },
        success: function (data) {
        }
      });
      Swal.fire(
        'Deletado!',
        'Foi deletado já.',
        'success'
      )
    }
  })

}

function equipamento_para_cambista(id, descricao) {
  $('#modal_equipamento').modal();
  $('#e_id').val(id);
  $('#editar_descricao').html(`Vincular o equipamento ${descricao}`);
}


function buscar_supervisor_modal_equipamento() {
  $.ajax({
    url: "ControlHost/buscar_supervisor.php",
    dataType: "json",
    data: {
    },
    success: function (data) {
      console.log(data);
      data.map(function (item, indice) {
        $('#modal_supervisor').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);
      });
    }
  });
}

function vincular_equipamento_cambista(id, descricao) {

  var supervisor = $('#modal_supervisor').val();
  var gerente = $('#modal_gerente').val();
  var cambista = $('#modal_cambista').val();
  var rastreador = $('#modal_rastreador').val();
  var idProduto = $('#e_id').val();
  var texto = $('#summernote').summernote(`code`);

  $.ajax({
    url: 'ControlHost/salvar_equipamentoCambista.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      supervisor,
      gerente,
      cambista,
      idProduto,
      rastreador,
      texto,
    },
    success: function (data) {
    }
  });

}

function carregar_tabela_equipamentos() {

  $.ajax({
    url: "ControlHost/buscar_equipamentosCambistas.php",
    dataType: "json",
    data: {
    },
    success: function (data) {

      var table = $('#relatorioEquipamento').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#relatorioEquipamento').DataTable({
        'paging': false,
        'info': false,
        "order": [[0, "desc"]],
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

        var supervisor = data[i].nome;
        var gerente = data[i].gerente;
        var cambista = data[i].cambista;
        var descricao = data[i].descricao;
        var rastreador = data[i].rastreador;
        var id = data[i].id;
        var createdAt = data[i].createdAt;
        var status = data[i].retorno == 0 ? 'Entregue' : 'Retornado'
        t.row.add([
          id,
          descricao,
          supervisor,
          gerente,
          cambista,
          createdAt,
          rastreador,
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