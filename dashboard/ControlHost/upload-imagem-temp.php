<?php

// $teste_path = "localhost/mardonio";
$file_name = $_FILES['img']['name'];
$file_size =$_FILES['img']['size'];
$file_tmp =$_FILES['img']['tmp_name'];
$file_type=$_FILES['img']['type'];

$fileNameCmps = explode(".", $file_name);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $file_name) . '.' . $fileExtension;

$uploadFileDir = '../img/temp/uploaded_property_img/';
$dest_path = $uploadFileDir . $newFileName;
$urlRetorno = 'img/temp/uploaded_property_img/'.$newFileName;
//  echo $file_tmp;
// return ;
list($width, $height, $type, $attr) = getimagesize($file_tmp);

// $imagick = new \Imagick(realpath($imagePath));
// $imagick->cropImage(50, 50, 0, 0);

if(move_uploaded_file($file_tmp, $dest_path))
{
    echo json_encode(array(
        "status"=>"success",
        "url"=>$urlRetorno,
        "width"=>$width,
        "height"=>$height
    ));
}else{
    echo json_encode(array(
        "status"=>"error",
        "message"=>"Não foi possível realizar o upload"
    ));
}