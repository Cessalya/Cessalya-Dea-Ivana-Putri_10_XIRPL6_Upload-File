<?php

include './connection.php';

$id = $_GET['id'];

$file = $_FILES['file'];
$uploadPath ='uploads/' .basename($file['name']); 

$result = move_uploaded_file($file['tmp_name'], $uploadPath);

if(!$result){
    echo 'Gagal Upload';
    exit();
}

$result = $conn->query('update siswa set jurnal = "'. $uploadPath .'" where id = '.$id);

if(!$result){
    var_dump(($conn->error));
    exit();
}

header('Location: /belajar/index.php');

