<?php

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Verifica se o arquivo eh imagem ou nao
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "O arquivo uma imagem - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "O arquivo nao eh uma imagem.";
            $uploadOk = 0;
        }
    }
    // Verifica se o arquivo existe
    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo ja existe.";
        $uploadOk = 0;
    }
    // Verifica o tamanho do arquivo
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Desculpe, o arquivo e muito grande.";
        $uploadOk = 0;
    }
    // Permite certos formatos de arquivos
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Desculpe, apenas os formatos JPG, JPEG, PNG & GIF sao permitidos.";
            $uploadOk = 0;
        }
        // Verifica se houve algum erro
        if ($uploadOk == 0) {
            echo "Desculpe, nao foi feito o upload do arquivo.";
            // se tudo esta ok, tenta realizar o upload.
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi carregado.";
            } else {
                echo "Desculpe, ocorreu um erro ao carregar o arquivo.";
            }
        }
?>
