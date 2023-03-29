<?php

$servidor = "127.0.0.1";
$usuario  = "root";
$senha    = "";
$dbname   = "teste";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully". "\n";

$nome_1  = mysqli_real_escape_string($conn,$_POST["Nome1"] );
$senha_2 = mysqli_real_escape_string($conn,$_POST["Senha2"]);

echo $nome_1 . "\n";
echo $senha_2 . "\n";

$bosta = mysqli_query($conn, "SELECT nome,senha FROM usuarios WHERE nome='$nome_1' AND senha='$senha_2'" ) or die(mysqli_error());

$nrs = 0;
$nrs = mysqli_num_rows($bosta);

echo $nrs;

if ($nrs > 0) { 

    echo "Bem vindo " . $nome_1. "!" ;

    }else{
    echo "Cai fora malandro!\n";
     
    }

mysqli_close($conn);

?>