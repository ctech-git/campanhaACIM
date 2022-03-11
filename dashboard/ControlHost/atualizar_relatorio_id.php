<?php
// session_start();
$e_colaborador  = (isset($_GET['e_colaborador'])) ? $_GET['e_colaborador'] : '';
$e_gerencia  = (isset($_GET['e_gerencia'])) ? $_GET['e_gerencia'] : '';
$e_entradas  = (isset($_GET['e_entradas'])) ? $_GET['e_entradas'] : '';
$e_saidas  = (isset($_GET['e_saidas'])) ? $_GET['e_saidas'] : '';
$e_comissoes  = (isset($_GET['e_comissoes'])) ? $_GET['e_comissoes'] : '';
$e_vales  = (isset($_GET['e_vales'])) ? $_GET['e_vales'] : '';
$e_internet  = (isset($_GET['e_internet'])) ? $_GET['e_internet'] : '';
$e_comissaoCambista  = (isset($_GET['e_comissaoCambista'])) ? $_GET['e_comissaoCambista'] : '';
$e_id  = (isset($_GET['e_id'])) ? $_GET['e_id'] : '';
$e_lancamentos  = (isset($_GET['e_lancamentos'])) ? $_GET['e_lancamentos'] : '';
$e_comprovantes  = (isset($_GET['e_comprovantes'])) ? $_GET['e_comprovantes'] : '';

$despesas  = (isset($_GET['despesas'])) ? $_GET['despesas'] : '';


include_once("connectJS.php");

$sql = "UPDATE tabela_colaboradores set 
entradas='$e_entradas',
saidas='$e_saidas',
comissoes='$e_comissoes',
lancamentos='$e_vales',
internet='$e_internet',
despesas='$despesas',
acordos='$e_lancamentos',
comprovantes='$e_comprovantes',
comissaoCambista='$e_comissaoCambista'
WHERE id='$e_id'";

$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}