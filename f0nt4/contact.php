<?php

try{

    // input variables
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];


    // valida as pastas no servidor
    $date = date('d/m/Y');

    // validate year directory
    $year = explode("/",$date)[2];

    if (is_dir("/contato/" . $year)){

    } else{
        mkdir("/contato/" . $year);
    }


    // validate month directory
    $month = explode("/",$date)[1];

    if (is_dir("/contato/" . $year . "/" . $month)){

    } else{
        mkdir("/contato/" . $year . "/" . $month);
    }


    // validate day directory
    $day = explode("/",$date)[0];

    if (is_dir("/contato/" . $year . "/" . $month . "/" . $day)){

    } else{
        mkdir("/contato/" . $year . "/" . $month . "/" . $day);
    }


    // cria arquivo no servidor
    $arquivo = fopen("/contato/" . $year . "/" . $month . "/" . $day . "/nome_". $name .".txt","w");
    $texto = "Nome: ". $name ."\r\nEmail: ". $emailFrom ."\r\nMensagem: ". $message ."\r\n";
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header("Location: https://matheusfmartins.com.br/#contact");

} catch(Exception $e) {
    header("Location: https://matheusfmartins.com.br/#contact");
}

?>