<?php

$x = $_POST['x'];
$y = $_POST['y'];
$height = $_POST['height'];
$width = $_POST['width'];

$file_name = $_FILES['img']['name'];
$file_size =$_FILES['img']['size'];
$file_tmp =$_FILES['img']['tmp_name'];
$file_type=$_FILES['img']['type'];

$fileNameCmps = explode(".", $file_name);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $file_name) . '.jpeg';

$uploadFileDir = '../img/temp/uploaded_property_img/cropped/';
$dest_path = $uploadFileDir . $newFileName;
$urlRetorno = '/img/temp/uploaded_property_img/cropped/'.$newFileName;

// $imagick = new \Imagick(realpath($imagePath));
// $imagick->cropImage(50, 50, 0, 0);

    if(move_uploaded_file($file_tmp, $dest_path))
    {
        $imagick = new \Imagick(realpath($dest_path));
        $imagick->setImageCompression(Imagick::COMPRESSION_JPEG);
        $imagick->setImageCompressionQuality(50);
        $imagick->stripImage();
        $imagick->writeImage($dest_path);
        //$imagick->cropImage($width, $height, $x, $y);
        echo json_encode(array(
            "status"=>"success",
            "url"=>$urlRetorno,
        ));
    }else{
        echo json_encode(array(
            "status"=>"error",
            "message"=>"Não foi possível realizar o upload"
        ));
    }