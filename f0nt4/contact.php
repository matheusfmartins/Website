<?php

try{

    // input variables
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    // cria arquivo no servidor
    $arquivo = fopen('/contato/nome_'. $name .'.txt','w');
    $texto = "Nome: ". $name ."\r\nEmail: ". $emailFrom ."\r\nMensagem: ". $message;
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header("Location: https://matheusfmartins.com.br/#contact");

} catch(Exception $e) {
    header("Location: https://matheusfmartins.com.br/#contact");
}

?>