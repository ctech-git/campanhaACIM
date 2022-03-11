function pesquisar_tabela() {

  var data_inicial = $('#pesquisa_data_inicial').val();
  var data_final = $('#pesquisa_data_final').val();


  if (data_inicial && data_final) {
    modal_spinner();

    setTimeout(() => {


      $.ajax({
        url: "ControlHost/buscar_dados_tabelas.php",
        dataType: 'json',
        method: 'GET',
        data: {
          data_inicial: data_inicial,
          data_final: data_final
        },
        success: function (data) {

          relatorio_gerencias(data);

          // var table = $('#tabela_dados').DataTable();
          // table.clear().draw();
          // table.destroy();
          // var t = $('#tabela_dados').DataTable({
          //   'paging': false,
          //   'info': false,
          //   'dom': 'Bfrtip',
          //   'buttons': [
          //     'copy', 'csv', 'excel', 'pdf', 'print'
          //   ],

          //   "language": {
          //     "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          //   }
          // });

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

            // entradas = entradas >= 0 ? `<span style="color:green">${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // entradas = entradas >= 0 ? entradas == 0 ? '--' : `<span style="color:green">${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // saidas = saidas >= 0 ? saidas == 0 ? '--' : `<span style="color:green">${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // comissoes = comissoes >= 0 ? comissoes == 0 ? '--' : `<span style="color:green">${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // subtotal = subtotal >= 0 ? subtotal == 0 ? '--' : `<span style="color:green">${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // vales = vales >= 0 ? vales == 0 ? '--' : `<span style="color:green">${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // somatoria_despesa = somatoria_despesa >= 0 ? somatoria_despesa == 0 ? '--' : `<span style="color:green">${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // comissao_total = comissao_total >= 0 ? comissao_total == 0 ? '--' : `<span style="color:green">${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // total = total >= 0 ? total == 0 ? '--' : `<span style="color:green">${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // internet = internet >= 0 ? internet == 0 ? '--' : `<span style="color:green">${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // acordos = acordos >= 0 ? acordos == 0 ? '--' : `<span style="color:green">${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;
            // comprovantes = comprovantes >= 0 ? comprovantes == 0 ? '--' : `<span style="color:green">${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>` : `<span style="color:red">${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span>`;

            // t.row.add([
            //   id,
            //   colaborador,
            //   gerente,
            //   entradas,
            //   `<span style='color:red'>${saidas}</span>`,
            //   comissoes,
            //   subtotal,
            //   vales,
            //   somatoria_despesa,
            //   comissao_total,
            //   internet,
            //   total,
            //   comprovantes,
            //   acordos,
            //   '',
            //   `
            // <button class='btn btn-danger' onclick='editar_dados_financeiro(${data[i].id})'>Editar</button>
            // `
            // ]).draw(false);
          }

          // t.row.add([
          //   '<b>Total</b>',
          //   '',
          //   '',
          //   parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_despesas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   parseFloat(soma_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          //   '', '', '',
          //   ``
          // ]).draw(false);

          $('#total_entradas').html(parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
          $('#total_saidas').html(parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
          $('#total_comissoes').html(parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
          $('#total_pagar').html(parseFloat(soma_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

          $('#soma_subtotal').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

          soma_gerente_subtotal = soma_gerente_subtotal * comissaoCambista / 100;
          $('#soma_gerente_subtotal').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));


        }
      });
    }, 1000);
  }
}

function pesquisar_tabela_novos_cambistas() {

  var data_inicial = $('#pesquisa_data_inicial').val();
  var data_final = $('#pesquisa_data_final').val();


  if (data_inicial && data_final) {

    $.ajax({
      url: "ControlHost/buscar_dados_novos_cambistas.php",
      dataType: 'json',
      method: 'GET',
      data: {
        data_inicial: data_inicial,
        data_final: data_final
      },
      success: function (data) {

        var table = $('#tabela_novos_cambistas').DataTable();
        table.clear().draw();
        table.destroy();
        var t = $('#tabela_novos_cambistas').DataTable({
          'paging': false,
          'info': false,
          'dom': 'Bfrtip',
          'buttons': [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],

          "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
        });

        var table_analisada = $('#tabela_novos_cambistas_analisados').DataTable();
        table_analisada.clear().draw();
        table_analisada.destroy();
        var t_analisada = $('#tabela_novos_cambistas_analisados').DataTable({
          'paging': false,
          'info': false,
          'dom': 'Bfrtip',
          'buttons': [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],

          "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
        });

        for (var i = 0;i < data.length;i++) {

          var id = data[i].id;

          var nomeCompleto = data[i].nomeCompleto;
          var telefone = data[i].telefone;
          var cpf = data[i].cpf;
          var estado = data[i].estado;
          var cidade = data[i].cidade;
          var cambista = data[i].cambista;
          var observacoes = data[i].observacoes;
          var status = data[i].status;
          var created = data[i].createdAt;

          if (status) {
            t_analisada.row.add([
              id,
              nomeCompleto,
              telefone,
              cpf,
              estado,
              cidade,
              cambista,
              observacoes,
              status,
              created,
              `
            <button class='btn btn-danger' onclick='analisar_novo_cambista(${data[i].id})'>Atualizar</button>
            `
            ]).draw(false);
          }
          else {
            t.row.add([
              id,
              nomeCompleto,
              telefone,
              cpf,
              estado,
              cidade,
              cambista,
              observacoes,
              status,
              created,
              `
            <button class='btn btn-danger' onclick='analisar_novo_cambista(${data[i].id})'>Atualizar</button>
            `
            ]).draw(false);
          }

        }
      }
    });
  }
}

function analisar_novo_cambista(id) {
  $('#modal_adicionar_analise_cambista').modal();
  $("#e_id").val(id);
}

function editar_dados_financeiro(id) {

  sessionStorage.removeItem('carrinho_entradas');

  $.ajax({
    url: 'ControlHost/ler_relatorio_id.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      id: id
    },
    success: function (data) {

      var e_entradas = data[0].entradas;
      var e_saidas = data[0].saidas;
      var e_comissoes = data[0].comissoes;
      var e_vales = data[0].lancamentos;
      var e_internet = data[0].internet;
      var e_colaborador = data[0].colaborador;
      var e_gerencia = data[0].gerente;
      var e_lancamentos = data[0].lancamentos;
      var e_acordos = data[0].acordos;
      var e_comissaoCambista = data[0].comissaoCambista;

      var subtotal = Number(e_entradas) - Number(e_saidas) - Number(e_comissoes);

      e_entradas = parseFloat(e_entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_saidas = parseFloat(e_saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_comissoes = parseFloat(e_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_vales = parseFloat(e_vales).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_internet = parseFloat(e_internet).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      subtotal = parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_lancamentos = parseFloat(e_lancamentos).toLocaleString("pt-BR", { minimumFractionDigits: 2 });
      e_acordos = parseFloat(e_acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2 });

      $('#e_colaborador').val(e_colaborador);
      $('#e_gerencia').val(e_gerencia);
      $('#e_entradas').val(e_entradas);
      $('#e_saidas').val(e_saidas);
      $('#e_comissoes').val(e_comissoes);
      $('#e_vales').val(e_vales);
      $('#e_internet').val(e_internet);
      $('#e_subtotal').val(subtotal);
      $('#e_id').val(data[0].id);
      $('#e_comissaoCambista').val(e_comissaoCambista);
      $('#e_acordos').val(e_acordos);
      $('#e_lancamentos').val(e_lancamentos);

      var despesas = data[0].despesas;
      sessionStorage.setItem('carrinho_entradas', despesas);

      $('#modal_editar_relatorio_financeiro').modal();
      mostrar_lista_entradas();
    }
  });

}

$("#myForm1").on('submit', function (event) {

  event.preventDefault();

  var descricao = document.getElementById("descricao").value;
  var data_inicial = document.getElementById("data_inicial").value;
  var data_final = document.getElementById("data_final").value;
  var id_supervisor = document.getElementById("id_supervisor").value;
  var token = document.getElementById("token").value;
  var comissaoGerente = document.getElementById("comissaoCambista").value;
  comissaoGerente = formatar_para_numero(comissaoGerente);

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


  var cabecalho = dados_tabela[0];
  $('#cabecalho').append("<tr>");

  $.ajax({
    url: 'ControlHost/salvar_relatorio_cambista.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      descricao: descricao,
      data_inicial: data_inicial,
      data_final: data_final,
      comissaoGerente: comissaoGerente,
      id_supervisor: id_supervisor
    },
    success: function (data) {
      var idRelatorio = data;


      for (var i = 0;i < cabecalho.length;i++) {
        $('#cabecalho').append();
        $('#cabecalho').append(`<th > ` + cabecalho[i] + `</th > `);
      }

      $('#cabecalho').append("</tr>");

      for (var i = 1;i < dados_tabela.length - 1;i++) {

        var data = dados_tabela[i];
        // $('#corpo').append(`< tr > `)
        // for (var d = 0;d < data.length;d++) {
        //   if (d != 3) {
        //     $('#corpo').append(`<td > ` + data[d] + `</td > `)
        //   }
        //   if (d == 3) {
        //     $('#corpo').append(`<td ></td > `)

        //   }
        // }

        var nome_colaborador = data[0];
        //var quantidade = data[1];
        var entradas = data[1];
        var saida = data[3];
        var comissoes = data[5];
        var vales = data[4];

        entradas = entradas.replace(/[^\d]+/g, '') / 100;
        saida = saida.replace(/[^\d]+/g, '') / 100;
        comissoes = comissoes.replace(/[^\d]+/g, '') / 100;
        vales = vales.replace(/[^\d]+/g, '') / 100;

        var internet = 0;
        if (entradas > 100) {
          internet = 15;
        }

        var comissaoCambista = 0;

        $.ajax({
          url: "ControlHost/cadastro_tabela.php",
          data: {
            descricao: descricao,
            data_inicial: data_inicial,
            data_final: data_final,
            id_supervisor: id_supervisor,
            nome_colaborador: nome_colaborador,
            vales: vales,
            // quantidade: quantidade,
            entradas: entradas,
            saida: saida,
            comissoes: comissoes,
            token: token,
            internet: internet,
            comissaoCambista: comissaoCambista,
            idRelatorio: idRelatorio
          },
          success: function (data) {
            if (data == 'Sucesso') {
              Swal.fire('Cadastrado com sucesso', 'Pode Continuar', 'success');

            }
          }
        });

        console.log(data);
        // $('#corpo').append(`</tr > `)
      }

    }
  });

});

$("#formRelatorioAlternativo").on('submit', function (event) {

  event.preventDefault();

  var descricao = document.getElementById("relatorioAlternativo_descricao").value;
  var data_inicial = document.getElementById("relatorioAlternativo_data_inicial").value;
  var data_final = document.getElementById("relatorioAlternativo_data_final").value;
  var id_supervisor = document.getElementById("relatorioAlternativo_id_supervisor").value;
  var token = document.getElementById("relatorioAlternativo_token").value;
  var comissaoGerente = document.getElementById("relatorioAlternativo_comissaoCambista").value;

  var texto = $('#relatorioAlternativo_summernote').summernote(`code`);

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

  var cabecalho = dados_tabela[0];
  // $('#relatorioAlteranativo_cabecalho').append("<tr>");

  $.ajax({
    url: 'ControlHost/salvar_relatorio_cambista.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      descricao: descricao,
      data_inicial: data_inicial,
      data_final: data_final,
      comissaoGerente: comissaoGerente,
      id_supervisor: id_supervisor
    },
    success: function (data) {
      var idRelatorio = data;

      for (var i = 1;i < dados_tabela.length - 1;i++) {
        var data = dados_tabela[i];

        var nome_colaborador = data[0];

        var entradas = data[2];
        var saida = data[4];
        var comissoes = data[5];
        var vales = 0;


        // entradas = entradas.replace(/[^\d]+/g, '') / 100;
        // saida = saida.replace(/[^\d]+/g, '') / 100;
        // comissoes = comissoes.replace(/[^\d]+/g, '');
        vales = 0;

        entradas = formatar_para_numero(entradas);
        saida = formatar_para_numero(saida);
        comissoes = formatar_para_numero(comissoes);

        var internet = 0;
        if (entradas > 100) {
          internet = 15;
        }



        var comissaoCambista = 0;

        $.ajax({
          url: "ControlHost/cadastro_tabela.php",
          data: {
            descricao: descricao,
            data_inicial: data_inicial,
            data_final: data_final,
            id_supervisor: id_supervisor,
            nome_colaborador: nome_colaborador,
            vales: vales,
            // quantidade: quantidade,
            entradas: entradas,
            saida: saida,
            comissoes: comissoes,
            token: token,
            internet: internet,
            comissaoCambista: comissaoCambista,
            idRelatorio: idRelatorio
          },
          success: function (data) {
            if (data == 'Sucesso') {
              Swal.fire('Dados cadastrados com sucesso', 'Pode continuar', 'success');
              $('#relatorioAlternativo_summernote').summernote(`code`, '');

            }
          }
        });

        console.log(data);
        // $('#relatorioAlternativo_corpo').append(`</tr > `)
      }

    }
  });

});

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
            < li > `+ texto_entrada + ` ` + observacoes + ` - ` + valor_movimentado + ` <span onclick = "excluir_lista_entrada(` + i + `)" > <i class="fa fa-close" style='color:red'></i></span > </li >
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

function formatar_para_moeda(valor) {
  return parseFloat(valor).toLocaleString("pt-BR", { minimumFractionDigits: 2 })
}

function formatar_para_real(valor) {
  return parseFloat(valor).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })
}

function atualizar_relatorio_cambista() {

  var e_colaborador = $('#e_colaborador').val();
  var e_gerencia = $('#e_gerencia').val();
  var e_entradas = $('#e_entradas').val();
  var e_saidas = $('#e_saidas').val();
  var e_comissoes = $('#e_comissoes').val();
  var e_vales = $('#e_vales').val();
  var e_internet = $('#e_internet').val();
  var e_id = $('#e_id').val();
  var e_comissaoCambista = $('#e_comissaoCambista').val();

  var e_comprovantes = $('#e_comprovantes').val();
  var e_lancamentos = $('#e_lancamentos').val();

  var carrinho_entradas = sessionStorage.getItem('carrinho_entradas');
  if (carrinho_entradas) {
  } else { carrinho_entradas = ''; }

  e_entradas = formatar_para_numero(e_entradas);
  e_saidas = formatar_para_numero(e_saidas);
  e_comissoes = formatar_para_numero(e_comissoes);
  e_vales = formatar_para_numero(e_vales);
  e_internet = formatar_para_numero(e_internet);
  e_comissaoCambista = e_comissaoCambista;
  e_comprovantes = formatar_para_numero(e_comprovantes);
  e_lancamentos = formatar_para_numero(e_lancamentos);

  $.ajax({
    url: 'ControlHost/atualizar_relatorio_id.php',
    destroy: true,
    data: {
      e_colaborador: e_colaborador,
      e_gerencia: e_gerencia,
      e_entradas: e_entradas,
      e_saidas: e_saidas,
      e_comissoes: e_comissoes,
      e_vales: e_vales,
      e_internet: e_internet,
      e_id: e_id,
      despesas: carrinho_entradas,
      e_comprovantes: e_comprovantes,
      e_lancamentos: e_lancamentos,
      e_comissaoCambista: e_comissaoCambista
    },
    success: function (data) {
      if (data == 'Sucesso') {
        buscar_relatorio_supervisor();
        sessionStorage.removeItem('carrinho_entradas');
        $('#modal_editar_relatorio_financeiro').modal('hide');
      }
    }
  });

}

function buscar_supervisor() {
  $.ajax({
    url: "ControlHost/buscar_supervisor.php",
    dataType: "json",
    data: {
    },
    success: function (data) {
      console.log(data);
      data.map(function (item, indice) {
        $('#idSupervisor').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);

        $('#relatorioAlternativo_id_supervisor').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);

        $('#id_supervisor').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);

        $('#idSupervisor_despesa').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);

        $('#e_idSupervisor_despesa').append(
          `<option value = '` + item.id + `'>` + item.nome + `</option>`);
      });
    }
  });
}

function buscar_data_supervisor() {

  var idSupervisor = $('#idSupervisor').val();
  var idGerente = $('#idGerente').val();

  $('#dataSupervisor').html('');
  $('#dataSupervisor').append(
    `<option value = '' > Selecione um período  </option > `);

  $.ajax({
    url: "ControlHost/buscar_data_supervisor.php",
    dataType: "json",
    data: {
      idSupervisor: idSupervisor,
      idGerente: idGerente
    },

    success: function (data) {
      sessionStorage.setItem('dataSupervisor', data);

      data.map(function (item, indice) {
        var data_inicial = item.data_inicial;
        data_inicial = data_inicial.split(' ');
        data_inicial = data_inicial[0];
        data_inicial = data_inicial.split('-'); data_inicial = data_inicial[2] + '/' + data_inicial[1] + '/' + data_inicial[0];

        var data_final = item.data_final;
        data_final = data_final.split(' ');
        data_final = data_final[0];
        data_final = data_final.split('-'); data_final = data_final[2] + '/' + data_final[1] + '/' + data_final[0];


        $('#dataSupervisor').append(
          `<option value = '` + item.id + `' > ${data_inicial} - ${data_final}</option> `);
      });
    }
  });
}

function buscar_data_gerentes_supervisor() {

  var idSupervisor = $('#idSupervisor_despesa').val();
  var idGerente = $('#idGerente_despesa').val();

  $('#dataDespesa').html('');

  $('#dataDespesa').append(
    `<option value = '' > Selecione uma data</option > `);

  $.ajax({
    url: "ControlHost/buscar_data_supervisor.php",
    dataType: "json",
    data: {
      idSupervisor: idSupervisor,
      idGerente: idGerente
    },

    success: function (data) {
      sessionStorage.setItem('dataSupervisor_despesa', data);

      data.map(function (item, indice) {
        var data_inicial = item.data_inicial;
        data_inicial = data_inicial.split(' ');
        data_inicial = data_inicial[0];
        data_inicial = data_inicial.split('-'); data_inicial = data_inicial[2] + '/' + data_inicial[1] + '/' + data_inicial[0];

        var data_final = item.data_final;
        data_final = data_final.split(' ');
        data_final = data_final[0];
        data_final = data_final.split('-'); data_final = data_final[2] + '/' + data_final[1] + '/' + data_final[0];


        $('#dataDespesa').append(
          `<option value = '` + item.id + `' > ${data_inicial} - ${data_final}</option > `);
      });
    }
  });
}

function buscar_gerentes_supervisor() {

  var idSupervisor = $('#idSupervisor_despesa').val();

  $.ajax({
    url: "ControlHost/buscar_gerente_supervisor.php",
    dataType: "json",
    data: {
      idSupervisor: idSupervisor
    },

    success: function (data) {

      data.map(function (item, indice) {

        $('#idGerente_despesa').append(`<option value = '` + item.gerente + `'> ${item.gerente}</option>`);

      });
    }
  });
}

function buscar_todos_gerente_supervisor() {

  var idSupervisor = $('#idSupervisor').val();

  $.ajax({
    url: "ControlHost/buscar_gerente_supervisor.php",
    dataType: "json",
    data: {
      idSupervisor: idSupervisor
    },

    success: function (data) {

      data.map(function (item, indice) {

        $('#idGerente').append(
          `<option value = '` + item.gerente + `' > ${item.gerente}</option>`);
      });
    }
  });
}

function buscar_gerentes_supervisor_editar() {

  var idSupervisor = $('#e_idSupervisor_despesa').val();

  $.ajax({
    url: "ControlHost/buscar_gerente_supervisor.php",
    dataType: "json",
    type: "GET",
    data: {
      idSupervisor: idSupervisor
    },

    success: function (data) {

      data.map(function (item, indice) {

        $('#e_idGerente_despesa').append(
          `<option value = '` + item.gerente + `' > ${item.gerente}</option> `);
      });

      var gerencia = sessionStorage.getItem('editar_gerente');
      if (gerencia) {
        $('#e_idGerente_despesa').val(gerencia);
        sessionStorage.removeItem('editar_gerente');
      }
    }
  });
}

function buscar_relatorio_supervisor() {

  var idRelatorio = $('#dataSupervisor').val();

  if (idRelatorio) {

    $.ajax({
      url: "ControlHost/buscar_dados_tabelas_supervisor.php",
      dataType: 'json',
      method: 'GET',
      data: {
        idRelatorio
      },
      success: function (data) {

        var table = $('#tabela_dados_supervisor').DataTable();
        table.clear().draw();
        table.destroy();
        var t = $('#tabela_dados_supervisor').DataTable({
          'paging': false,
          'info': false,
          'dom': 'Bfrtip',
          'buttons': [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],

          "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
        });

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
        var comissaoGerente = 0;
        var tamanho = data.length;

        for (var i = 0;i < data.length;i++) {

          var id = data[i].id;
          var colaborador = data[i].colaborador;

          if (colaborador == 'TOTAL') {

          }
          else {


            var entradas = data[i].entradas;
            var saidas = data[i].saidas;
            var comissoes = data[i].comissoes;

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
            comissaoGerente = comissao_total;
            comissao_total = comissao_total * subtotal / 100;

            var total = subtotal + Number(vales) - Number(somatoria_despesa);

            total = total - internet - comissao_total;

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

            entradas = entradas >= 0 ? entradas == 0 ? '--' : `<span style = "color:green" > ${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            saidas = saidas >= 0 ? saidas == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            comissoes = comissoes >= 0 ? comissoes == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            subtotal = subtotal >= 0 ? subtotal == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            vales = vales >= 0 ? vales == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            somatoria_despesa = somatoria_despesa >= 0 ? somatoria_despesa == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            comissao_total = comissao_total >= 0 ? comissao_total == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            total = total >= 0 ? total == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            internet = internet >= 0 ? internet == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            acordos = acordos >= 0 ? acordos == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
            comprovantes = comprovantes >= 0 ? comprovantes == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;

            t.row.add([
              id,
              colaborador,
              // gerente,
              entradas,
              `<span style = 'color:red' > ${saidas}</span > `,
              comissoes,
              subtotal,
              vales,
              somatoria_despesa,
              comissao_total,
              internet,
              total,
              comprovantes,
              acordos,
              '',
              `<div style='display:flex' class="btn-group">
            <button class='btn btn-primary' onclick='editar_dados_financeiro(${data[i].id})'>
            <span style="display:inline-block"><i class='fa fa-pencil'></i></span></button>
            <button class='btn btn-danger' onclick='excluir_dados_financeiro(${data[i].id})'>
            <span style="display:inline-block"><i class='fa fa-close'></i></span></button>
            </div>
              `
            ]).draw(false);
          }
        }

        t.row.add([
          '<b style="color:#000 !important; ">Total</b>',
          tamanho,
          parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_despesas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          '', '', '',
          ``
        ]).draw(false);


        $.ajax({
          url: 'ControlHost/buscar_comissao_gerente.php',
          dataType: 'json',
          async: false,
          destroy: true,
          data: {
            idRelatorio: idRelatorio
          },
          success: function (data) {
            if (data) {
              comissaoGerente = data[0].comissaoGerente;
            }
          }
        });

        var comissao_gerente = soma_gerente_subtotal * comissaoGerente / 100;
        if (comissao_gerente <= 0) {
          comissao_gerente = 0;
        }
        var total_pagar_supervisor = Number(soma_total) - Number(comissao_gerente);

        var somatoria_despesas = 0;

        $.ajax({
          url: 'ControlHost/buscar_despesas_gerente_id.php',
          dataType: 'json',
          async: false,
          destroy: true,
          data: {
            idRelatorio: idRelatorio
          },
          success: function (data) {
            var somatoria = 0;
            data.map(function (item, indice) {
              somatoria += Number(item.valor);
            });
            somatoria_despesas = somatoria;
            somatoria_despesas = formatar_para_real(somatoria_despesas);
            $('#total_despesa_supervisor').html(somatoria_despesas);
          }
        });

        total_pagar_supervisor = total_pagar_supervisor - formatar_para_numero(somatoria_despesas);

        $('#total_entradas_supervisor').html(parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_saidas_supervisor').html(parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_comissoes_supervisor').html(parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_pagar_supervisor').html(parseFloat(total_pagar_supervisor).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

        $('#soma_subtotal_supervisor').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

        soma_gerente_subtotal = soma_gerente_subtotal * comissaoGerente / 100;
        if (soma_gerente_subtotal <= 0) {
          soma_gerente_subtotal = 0;
        }

        $('#soma_gerente_subtotal_supervisor').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));


        pintar_ultima_linha();
      }
    });


  }
}

function gerar_link_cambista() {
  var id = $('#dataSupervisor').val();

  link = 'https://www.portalctech.com.br/sorteesportiva/financeiro_cambista.php?id=' + id;
  copyToClipboard(link);
}

function buscar_relatorio_supervisor_link_cambista(idRelatorio) {


  if (idRelatorio) {

    $.ajax({
      url: "ControlHost/buscar_dados_tabelas_supervisor.php",
      dataType: 'json',
      method: 'GET',
      data: {
        idRelatorio
      },
      success: function (data) {

        var table = $('#tabela_dados_supervisor').DataTable();
        table.clear().draw();
        table.destroy();
        var t = $('#tabela_dados_supervisor').DataTable({
          'paging': false,
          'info': false,
          'dom': 'Bfrtip',
          'buttons': [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],

          "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
        });

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
        var comissaoGerente = 0;
        var tamanho = data.length;

        for (var i = 0;i < data.length;i++) {

          var id = data[i].id;
          var colaborador = data[i].colaborador;

          var entradas = data[i].entradas;
          var saidas = data[i].saidas;
          var comissoes = data[i].comissoes;

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
          comissaoGerente = comissao_total;
          comissao_total = comissao_total * subtotal / 100;

          var total = subtotal + Number(vales) - Number(somatoria_despesa);

          total = total - internet - comissao_total;

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

          entradas = entradas >= 0 ? entradas == 0 ? '--' : `<span style = "color:green" > ${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(entradas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          saidas = saidas >= 0 ? saidas == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(saidas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          comissoes = comissoes >= 0 ? comissoes == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          subtotal = subtotal >= 0 ? subtotal == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          vales = vales >= 0 ? vales == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          somatoria_despesa = somatoria_despesa >= 0 ? somatoria_despesa == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(somatoria_despesa).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          comissao_total = comissao_total >= 0 ? comissao_total == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          total = total >= 0 ? total == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          internet = internet >= 0 ? internet == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          acordos = acordos >= 0 ? acordos == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(acordos).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;
          comprovantes = comprovantes >= 0 ? comprovantes == 0 ? '--' : `<span  style = "color:green" > ${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > ` : ` <span  style = "color:red" > ${parseFloat(comprovantes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })}</span > `;

          t.row.add([
            id,
            colaborador,
            // gerente,
            entradas,
            `<span style = 'color:red' > ${saidas}</span > `,
            comissoes,
            subtotal,
            vales,
            somatoria_despesa,
            comissao_total,
            internet,
            total,
            comprovantes,
            acordos,
            '',
            ``
          ]).draw(false);
        }

        t.row.add([
          '<b style="color:#000 !important; ">Total</b>',
          tamanho,
          parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_vales).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_despesas).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_comissao_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_internet).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          parseFloat(soma_total).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
          '', '', '',
          ``
        ]).draw(false);


        $.ajax({
          url: 'ControlHost/buscar_comissao_gerente.php',
          dataType: 'json',
          async: false,
          destroy: true,
          data: {
            idRelatorio: idRelatorio
          },
          success: function (data) {
            if (data) {
              comissaoGerente = data[0].comissaoGerente;
            }
          }
        });

        var comissao_gerente = soma_gerente_subtotal * comissaoGerente / 100;

        var total_pagar_supervisor = Number(soma_total) - Number(comissao_gerente);

        var somatoria_despesas = 0;

        $.ajax({
          url: 'ControlHost/buscar_despesas_gerente_id.php',
          dataType: 'json',
          async: false,
          destroy: true,
          data: {
            idRelatorio: idRelatorio
          },
          success: function (data) {
            var somatoria = 0;
            data.map(function (item, indice) {
              somatoria += Number(item.valor);
            });
            somatoria_despesas = somatoria;
            somatoria_despesas = formatar_para_real(somatoria_despesas);
            $('#total_despesa_supervisor').html(somatoria_despesas);
          }
        });
        total_pagar_supervisor = total_pagar_supervisor - formatar_para_numero(somatoria_despesas);

        $('#total_entradas_supervisor').html(parseFloat(soma_entrada).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_saidas_supervisor').html(parseFloat(soma_saida).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_comissoes_supervisor').html(parseFloat(soma_comissoes).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));
        $('#total_pagar_supervisor').html(parseFloat(total_pagar_supervisor).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

        $('#soma_subtotal_supervisor').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));

        soma_gerente_subtotal = soma_gerente_subtotal * comissaoGerente / 100;
        $('#soma_gerente_subtotal_supervisor').html(parseFloat(soma_gerente_subtotal).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }));


        pintar_ultima_linha();
      }
    });


  }
}

function pintar_ultima_linha() {


  var objRow = $('#tabela_dados_supervisor tbody tr:last');
  $(objRow).addClass('ultima_linha_preta');
}

function excluir_dados_financeiro(id) {
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
        url: "ControlHost/excluir_dados_financeiro.php",
        async: false,
        data: {
          id: id
        },
        success: function (data) {

          if (data == 'Sucesso') {
            buscar_relatorio_supervisor();
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


$("#formularioDespesas").on('submit', function (event) {

  event.preventDefault();

  $('#botao_adicionar_despesa').html('Adicionando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')


  var idSupervisor_despesa = document.getElementById("idSupervisor_despesa").value;
  var idGerente_despesa = document.getElementById("idGerente_despesa").value;
  var descricaoDespesa = document.getElementById("descricaoDespesa").value;
  var valorDespesa = document.getElementById("valorDespesa").value;
  var dataDespesa = document.getElementById("dataDespesa").value;

  valorDespesa = formatar_para_numero(valorDespesa);

  setTimeout(function () {
    $.ajax({
      url: 'ControlHost/salvar_despesa_cambista.php',
      data: {
        idSupervisor_despesa: idSupervisor_despesa,
        idGerente_despesa: idGerente_despesa,
        descricaoDespesa: descricaoDespesa,
        valorDespesa: valorDespesa,
        dataDespesa: dataDespesa
      },
      success: function (data) {
        if (data == 'Sucesso') {

          Swal.fire(
            'Bom trabalho!',
            'A despesa foi cadastrada!',
            'success'
          )

          $('#botao_adicionar_despesa').html('Adicionar')

          tabelaDespesas();
        }

      }
    });
  }, 1000);




});

function tabelaDespesas() {


  $.ajax({
    url: "ControlHost/buscar_despesas_gerente.php",
    dataType: 'json',
    method: 'GET',
    data: {
    },
    success: function (data) {

      var table = $('#tabela_despesa_gerente').DataTable();
      table.clear().draw();
      table.destroy();
      var t = $('#tabela_despesa_gerente').DataTable({
        'paging': false,
        'info': false,
        'dom': 'Bfrtip',
        'buttons': [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ],

        "language": {
          "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
      });



      for (var i = 0;i < data.length;i++) {

        var id = data[i].id;
        var supervisor = data[i].nomeSupervisor;
        var gerencia = data[i].gerencia;
        var descricao = data[i].descricao;
        var data_inicial = data[i].data_inicial;
        var data_final = data[i].data_final;
        var valor = data[i].valor ? data[i].valor : 0;

        valor = parseFloat(valor).toLocaleString("pt-BR", { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })

        data_inicial = data_inicial.split(' ');
        data_inicial = data_inicial[0];
        data_inicial = data_inicial.split('-'); data_inicial = data_inicial[2] + '/' + data_inicial[1] + '/' + data_inicial[0];

        data_final = data_final.split(' ');
        data_final = data_final[0];
        data_final = data_final.split('-'); data_final = data_final[2] + '/' + data_final[1] + '/' + data_final[0];


        t.row.add([
          id,
          supervisor,
          gerencia,
          descricao,
          valor,
          data_inicial + ' - ' + data_final,
          `
            <button type = 'button' class= 'btn btn-primary' onclick = 'editar_despesa(${data[i].id})' > Editar</button >
            <button type='button' class='btn btn-danger' onclick='excluir_despesa(${data[i].id})'>Excluir</button>
            `
        ]).draw(false);
      }
    }
  });
}

function editar_despesa(id) {

  $.ajax({
    url: 'ControlHost/buscar_despesas_gerente.php',
    dataType: 'json',
    async: false,
    destroy: true,
    data: {
      id: id
    },
    success: function (data) {

      var supervisor = data[0].supervisor;
      var gerencia = data[0].gerencia;
      var descricao = data[0].descricao;
      var valor = data[0].valor;
      var dataDespesa = data[0].dataDespesa;
      var id = data[0].id;

      sessionStorage.setItem("editar_gerente", gerencia);


      valor = formatar_para_moeda(valor);

      $('#e_idSupervisor_despesa').val(supervisor);
      buscar_gerentes_supervisor_editar();

      $('#e_descricaoDespesa').val(descricao);
      $('#e_valorDespesa').val(valor);
      dataDespesa = dataDespesa.split(' ');
      dataDespesa = dataDespesa[0];
      $('#e_dataDespesa').val(dataDespesa);
      $('#e_idDespesa').val(id);

      $('#modal_editar_despesa_gerente').modal();

    }
  });
}

function atualizar_relatorio_gerente() {
  var e_idSupervisor_despesa = $('#e_idSupervisor_despesa').val();
  var e_idGerente_despesa = $('#e_idGerente_despesa').val();
  var e_descricaoDespesa = $('#e_descricaoDespesa').val();
  var e_valorDespesa = $('#e_valorDespesa').val();
  var e_dataDespesa = $('#e_dataDespesa').val();
  var e_idDespesa = $('#e_idDespesa').val();

  e_valorDespesa = formatar_para_numero(e_valorDespesa);

  $.ajax({
    url: 'ControlHost/atualizar_despesa_gerente.php',
    data: {
      e_idSupervisor_despesa: e_idSupervisor_despesa,
      e_idGerente_despesa: e_idGerente_despesa,
      e_descricaoDespesa: e_descricaoDespesa,
      e_valorDespesa: e_valorDespesa,
      e_dataDespesa: e_dataDespesa,
      e_idDespesa: e_idDespesa
    },
    success: function (data) {
      if (data == 'Sucesso') {
        tabelaDespesas();
        $('#modal_editar_despesa_gerente').modal('hide');
      }
    }
  });
}

function excluir_despesa(id) {
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
        url: "ControlHost/excluir_despesa_gerente.php",
        async: false,
        data: {
          id: id
        },
        success: function (data) {

          if (data == 'Sucesso') {
            tabelaDespesas();
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

function atualizar_relatorio_novo_cambista() {
  var id = $('#e_id').val();
  var usuario = $('#usuario').val();
  var status = $('#status').val();
  var summernote = $('#summernote').summernote('code');

  $.ajax({
    url: 'ControlHost/atualizar_novo_cambista.php',
    data: {
      id: id,
      usuario: usuario,
      status: status,
      observacoes: summernote
    },
    success: function (data) {
      if (data == 'Sucesso') {
        $('#modal_adicionar_analise_cambista').modal('hide');
        Swal.fire('Pronto', 'Usuário atualizado', 'success');
        pesquisar_tabela_novos_cambistas();
      }
    }
  });

}

function copyToClipboard(link) {
  var temp = $("<input>");
  $("body").append(temp);
  temp.val(link).select();
  document.execCommand("copy");
  temp.remove();

  Swal.fire('Copiado para ao CTRL C :)', 'Só envie agora', 'success');
}