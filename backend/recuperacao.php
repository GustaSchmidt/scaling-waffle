<?php
require_once (dirname(__FILE__).'\team_lib\functions.php');
require_once (dirname(__FILE__).'\team_lib\filtro.php');
require_once (dirname(__FILE__).'\team_lib\mail.php');
require_once (dirname(__FILE__).'\team_lib\criptografia\descriptografar-assimetrica.php');
require_once (dirname(__FILE__).'\team_lib\esteganografia-texto\decrypt.php');

$dadoscriptografados = $_POST["dados"];
$chave = decifrar(fopen("team_lib/esteganografia-texto/saida.txt", "r"), fopen("team_lib/esteganografia-texto/resultado.txt", "w"), fopen("team_lib/esteganografia-texto/script.txt", "r"));$dados = json_decode(descriptografar($dadoscriptografados, $chave));



if(!isset($dados->login)){
    echo "post_login_invalido";
    exit();
}


$JsonReturn = new stdClass();


$mail_apelido = validar_texto($dados->login);
$user_data = pesquisaUsuario($mail_apelido);

//gerer token
$token = $user_data['nome'].substr($user_data['senha'], -10);
$token = hash('md5', $token);
$msg = '<a href=http://localhost/nova-senha.html?token='.$token.'&user='.$user_data['apelido'].'>Recuperar senha</a>';

if(email_rec($msg, $user_data['email']) && $user_data){
    $JsonReturn->sucess = TRUE;
    $JsonReturn->erro_msg = 'email enviado';
    print(json_encode($JsonReturn));
}else{
    $JsonReturn->sucess = FALSE;
    $JsonReturn->erro_msg = 'usuario não existe';
    print(json_encode($JsonReturn));
}
