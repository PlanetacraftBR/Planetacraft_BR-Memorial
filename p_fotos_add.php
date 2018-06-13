<?php

$URL = "0".md5(uniqid(rand(), true));
$ext = strtolower(substr($_FILES['file']['name'],-5));
if (move_uploaded_file($_FILES['file']['tmp_name'], "img/galeria_temp/".$URL.$ext)){
$ARQUIVO = "img/galeria_temp/".$URL.$ext;

echo $ARQUIVO;
}else{
$ARQUIVO = "ERRO";

echo $ARQUIVO;
}

?>