<?php

include_once("connectJS.php");

$categoria  = (isset($_GET['categoria'])) ? $_GET['categoria'] : '';

extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("uploads/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$file_name);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$newFileName);
        }
    }
    else {
        array_push($error,"$file_name, ");
    }

    $url = "uploads/".$file_name;

    $sql = "INSERT into imagens(categoria,url)
    values (
     '$categoria',
     '$url'
     
    )";
    $stm = $conexao->prepare($sql);
    if($stm->execute()){
      echo "Sucesso";
    }
    else{
      echo "Erro";
    }


}

?>
