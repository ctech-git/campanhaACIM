function buscar_escolas(){
  $.ajax({
    url: "Control/todas_as_escolas.php",
    type: "GET",
    async:false,
    data: {
    },
    success: function( data ) {
      var escolas_data = JSON.parse(data);

      console.log(escolas_data);
      for(var i=0; i<escolas_data.data.escolas.nodes.length;i++){
        var option = document.createElement('option');

        if(escolas_data.data.escolas.nodes[i].id== "9026"){
          //ESCOLA SEM TURMAS
        }

        else{
          option.value = escolas_data.data.escolas.nodes[i].id;
          option.text = escolas_data.data.escolas.nodes[i].nome;
          document.getElementById('escola').add(option);
        }
      }

    }
  });
}

function buscar_turmas(){
  var id = document.getElementById('escola').value;

  $('#turmas').empty();

  var option = document.createElement('option');
  option.value = '';
  option.text = 'Selecione uma turma';
    document.getElementById('turmas').add(option);

  $.ajax({
    url: "Control/turma_id.php",
    type: "GET",
    async:false,
    data: {
      id:id
    },
    success: function( data ) {
      sessionStorage.setItem('turmas',data);

      var turmas_data = JSON.parse(data);

      console.log(turmas_data);

      for(var i=0; i<turmas_data.data.turmas.nodes.length;i++){
        var option = document.createElement('option');
        // option.value = turmas_data.data.turmas.nodes[i].id;
        option.value = i;
        option.text = turmas_data.data.turmas.nodes[i].nome;
          document.getElementById('turmas').add(option);
      }

    }
  });
}


var id_busca;

function buscar_disciplinas(){
  var index = document.getElementById('turmas').value;
  $('#disciplina').empty();

  var turmas = sessionStorage.getItem('turmas');
  turmas = JSON.parse(turmas);


  var option = document.createElement('option');
  option.value = '';
  option.text = 'Selecione uma disciplina';
  document.getElementById('disciplina').add(option);

  var turmas_array = [];
    for(var i=0; i<turmas.data.turmas.nodes[index].professoresAlocados.length;i++){

      var id = turmas.data.turmas.nodes[index].professoresAlocados[i].disciplinaID;
      id_busca = id;
      $.ajax({
        url: "Control/disciplinas_por_id.php",
        type: "GET",
        async:false,
        data: {
          id:id
        },
        success: function( data ) {
          var turmas_data = JSON.parse(data);

          var turmas_aux = sessionStorage.getItem('turmas');
          turmas_aux = JSON.parse(turmas_aux);
          var index = document.getElementById('turmas').value;
          var id = turmas.data.turmas.nodes[index].id;

          turmas_array.push({
            'turmaID':id,
            'id':id_busca,
            'nome':turmas_data.data.disciplina.nome
          })

              var option = document.createElement('option');
              option.value = Number(turmas_array.length)-1;
              option.text = turmas_data.data.disciplina.nome;
                document.getElementById('disciplina').add(option);

          }
        });
    }
    console.log(turmas_array);
    sessionStorage.setItem('turma_aluno', JSON.stringify(turmas_array));
}

function buscar_alunos_turma(){
  var index = document.getElementById('disciplina').value;
  $('#alunos').empty();

  var turma = sessionStorage.getItem('turma_aluno');
  turma = JSON.parse(turma);

  console.log(turma);

  var option = document.createElement('option');
  option.value = '';
  option.text = 'Selecione uma disciplina';
  document.getElementById('alunos').add(option);

  var id= turma[index].turmaID;

  var turmas = [];

      $.ajax({
        url: "Control/alunos_turma.php",
        type: "GET",
        async:false,
        data: {
          id:id
        },
        success: function( data ) {
          var alunos = JSON.parse(data);
          console.log(alunos);
          sessionStorage.setItem('alunos_por_turma', JSON.stringify(alunos));
              // var option = document.createElement('option');
              // option.value = turmas_data.data.disciplina.nome;
              // option.text = turmas_data.data.disciplina.nome;
              //   document.getElementById('disciplina').add(option);

          }
        });
    }

    // sessionStorage.setItem('turma_aluno', JSON.stringify(turmas));
