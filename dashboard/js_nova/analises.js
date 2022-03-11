
$("#relatorio_analises").on('submit', function (event) {

  event.preventDefault();

  var analiseGerencia = document.getElementById("analiseGerencia").value;
  var analiseCambista = document.getElementById("analiseCambista").value;

  $.ajax({
    url: 'ControlHost/salvar_analise.php',
    async: false,
    destroy: true,
    data: {
      analiseGerencia: analiseGerencia,
      analiseCambista: analiseCambista
    },
    success: function (data) {
      if (data == 'Sucesso') {
        $("#relatorio_analises").trigger('reset');
        alert("Adicionado");
      }
    }
  });

});

function carregar_tabela_analises() {

  $.ajax({
    url: "ControlHost/buscar_analises.php",
    dataType: "json",
    data: {
    },
    success: function (data) {

      var table = $('#relatorioAnalises').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#relatorioAnalises').DataTable({
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

      });


      for (var i = 0;i < data.length;i++) {

        var id = data[i].id;
        var cambista = data[i].cambista;
        var gerente = data[i].gerencia;

        t.row.add([
          id,
          gerente,
          cambista,
          '',
          "<button class='btn btn-success' onclick='adicionar_analise(" + data[i].id + ")'><span><i class='fa fa-plus'></i></span></button>" +
          "<button class='btn btn-info' onclick='ver_analises(" + data[i].id + ")'><span><i class='fa fa-copy'></i></span></button>" +
          "<button class='btn btn-danger' onclick='excluir_relatorio(" + data[i].id + ")'><span><i class='fa fa-close'></i></span></button>"
        ]).draw(false);
      }
    }
  });
}

function adicionar_analise(id) {
  $('#modal_adicionar_analise').modal();
}

function mudar_padrao() {
  var padrao = $('#padrao').val();

  if (padrao == 1) {
    $('#summernote').summernote('code', `Quantidade de jogos:
    Média por jogo:
    Porcentagem de ganhos:`);
  }
  if (padrao == 2) {
    $('#summernote').summernote('code', `Local do cambista:
    Teste de X:
    Y informação:`);
  }
}

$("#myForm1").on('submit', function (event) {

  event.preventDefault();

  var nomeBanca = document.getElementById("nomeBanca").value;

  var texto = $('#summernote').summernote(`code`);

  var texto = encodeURI(texto);

  texto = texto.split('%0A');

  var dados_tabela = [];

  for (var i = 0;i < texto.length;i++) {
    var aux = texto[i];
    var dados = [];
    // aux = decodeURI(aux);
    var tr = aux.split('%09');
    for (var j = 0;j < tr.length;j++) {
      var td = tr[j];
      td = decodeURI(td);
      dados.push(td);
    }
    dados_tabela.push(dados)
  }

  console.log(dados_tabela);

  for (var i = 1;i < dados_tabela.length - 1;i++) {

    var data = dados_tabela[i];
    var nome_colaborador = data[0];
    var entradas = data[1];
    var saida = data[3];
    var comissoes = data[5];
    var vales = data[4];

    entradas = entradas.replace(/[^\d]+/g, '') / 100;
    saida = saida.replace(/[^\d]+/g, '') / 100;
    comissoes = comissoes.replace(/[^\d]+/g, '') / 100;
    vales = vales.replace(/[^\d]+/g, '') / 100;

    // $('#corpo').append(`</tr > `)
  }

});

