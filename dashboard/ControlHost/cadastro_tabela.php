<?php
// session_start();
include_once("connectJS.php");

$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$data_inicial  = (isset($_GET['data_inicial'])) ? $_GET['data_inicial'] : '';
$data_final  = (isset($_GET['data_final'])) ? $_GET['data_final'] : '';
$id_supervisor  = (isset($_GET['id_supervisor'])) ? $_GET['id_supervisor'] : '';
$nome_colaborador  = (isset($_GET['nome_colaborador'])) ? $_GET['nome_colaborador'] : '';
$quantidade  = (isset($_GET['quantidade'])) ? $_GET['quantidade'] : '';
$entradas  = (isset($_GET['entradas'])) ? $_GET['entradas'] : '';
$saida  = (isset($_GET['saida'])) ? $_GET['saida'] : '';
$comissoes  = (isset($_GET['comissoes'])) ? $_GET['comissoes'] : '';
$vales  = (isset($_GET['vales'])) ? $_GET['vales'] : '';
$token  = (isset($_GET['token'])) ? $_GET['token'] : '';
$idRelatorio  = (isset($_GET['idRelatorio'])) ? $_GET['idRelatorio'] : '';
$internet  = (isset($_GET['internet'])) ? $_GET['internet'] : '';
$comissaoCambista  = (isset($_GET['comissaoCambista'])) ? $_GET['comissaoCambista'] : '';


$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into tabela_colaboradores(colaborador,gerente,supervisor,quantidade,entradas,saidas,comissoes,
data_inicial,data_final,data_cadastro, lancamentos,token, tabela, idRelatorio,internet,comissaoCambista)
values (
 '$nome_colaborador',
 '$descricao',
 '$id_supervisor',
 '$quantidade',
 '$entradas',
 '$saida',
 '$comissoes',
 '$data_inicial',
 '$data_final',
 '$data_adicionado',
 '$vales',
 '$token',
 '.net',
 '$idRelatorio',
 '$internet',
 '$comissaoCambista'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}