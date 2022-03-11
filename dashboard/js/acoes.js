function preencher_select_eventos(){
  $('#eventos').html('');
  $.ajax({
    url: 'ControlHost/busca_eventos.php',
    dataType: 'JSON',
    success: function (data) {
      var options='<option value="">Selecione uma ação</option>';
      for (var i = 0; i < data.length; i++) {
        options = options+`
        <option value="${data[i].id}">${data[i].nome_evento}</option>
        `;
      }
      $("#eventos").html(options);
    }
  });
}

function checkbox_colaboradores(){
  $.ajax({
    url: 'ControlHost/busca_colaboradores.php',
    dataType: 'JSON',
    success: function (data) {
      var options='';
      for (var i = 0; i < data.length; i++) {
        options = options+`
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
        <label style='font-size:20px'>
        <input type="checkbox" name="checkboxes_colaboradores" value="${data[i].id}"> <i></i> `+data[i].nome+`  </label>
        </div>
        </div>
        </div>
        `;
      }
      $("#check_funcionarios").html(options);
    }
  });
}

function salvar_acao(){
  var evento = $('#eventos').val();
  var empresa = $('#empresa').val();
  var checkboxes_colaboradores = document.getElementsByName('checkboxes_colaboradores');

  for(var a=0;a<checkboxes_colaboradores.length;a++){

    if(checkboxes_colaboradores[a].checked==true){
      var id_func = checkboxes_colaboradores[a].value;

      $.ajax({
        url: 'ControlHost/salvar_acao_funcionario.php',
        type:'GET',
        data:{
          evento: evento,
          empresa: empresa,
          id_func: id_func
        },
        success: function (data) {
          if(data=='Sucesso'){
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'success',
              title: 'Salvo com sucesso!'
            })
          }
        }
      });
    }
  }

}


function preencher_tabela_relatorios(){
  $.ajax({
    url: 'ControlHost/busca_colaboradores.php',
    dataType: 'JSON',
    async:false,
    success: function (data) {
      sessionStorage.setItem('colaboradores', JSON.stringify(data))
    }
  });
  $.ajax({
    url: 'ControlHost/busca_eventos.php',
    dataType: 'JSON',
    async:false,
    success: function (data) {
      sessionStorage.setItem('eventos', JSON.stringify(data))
    }
  });
  $.ajax({
    url: 'ControlHost/busca_acoes.php',
    dataType: 'JSON',
    async:false,
    success: function (data) {
      sessionStorage.setItem('acoes', JSON.stringify(data))
    }
  });

  var colaboradores = sessionStorage.getItem('colaboradores');
  colaboradores = JSON.parse(colaboradores);
  var eventos = sessionStorage.getItem('eventos');
  eventos = JSON.parse(eventos);
  var acoes = sessionStorage.getItem('acoes');
  acoes = JSON.parse(acoes);
  var results = [];

  for(var i=0; i<colaboradores.length;i++){
    var id_colaborador = colaboradores[i].id;
    var soma = 0;

    for(var j=0; j<acoes.length;j++){
      if(acoes[j].id_funcionario == id_colaborador){

        for(var k=0;k<eventos.length;k++){
          if(acoes[j].id_evento == eventos[k].id){
            soma = soma+ Number(eventos[k].valor_evento);
          }
        }

      }


    }
    results.push({
      'nome': colaboradores[i].nome,
      'soma': soma
    })
  }
  var data = [];
//   for(var a=0; a<results.length;a++){
//
//     data.push(
//       {
//       results[a].nome,
//       parseFloat(results[a].soma).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
//     }
//   );
// }

  $('#table').bootstrapTable({
  columns: [
    {
    field: 'name',
    title: 'Item Name'
  }, {
    field: 'price',
    title: 'Item Price'
  }],
  data: [{
    name: 'Item 1',
    price: '$1'
  }, {
    name: 'Item 2',
    price: '$2'
  }]
})

}
