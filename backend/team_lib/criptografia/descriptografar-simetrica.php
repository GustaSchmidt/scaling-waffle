<?php

    $dados = $_POST["dados"];

    echo "post :".$dados."\n";

    // quebra a string a partir do caracter 32

    $mensagem_criptografada_base64 = substr($dados, 96);

    echo "Mensagem criptografada base 64: ".$mensagem_criptografada_base64."\n";
    
    $mensagem_criptografada = base64_decode($mensagem_criptografada_base64);

    // echo "Mensagem criptografada: ".$mensagem_criptografada."\n";

    $chave = substr($dados, 0, 64);

    echo "chave: ".$chave."\n";

    $iv = substr($dados, 64, 96);

    echo "Vetor de inicialização: ".$iv."\n";

    // descriptografa a mensagem
    $mensagem_descriptografada = openssl_decrypt($mensagem_criptografada, 'aes-128-cbc', $chave, OPENSSL_ZERO_PADDING, $iv);

    echo json_decode(base64_decode($mensagem_descriptografada), true);


    // print_r(json_decode(base64_decode($mensagem_descriptografada), true));
    
?>