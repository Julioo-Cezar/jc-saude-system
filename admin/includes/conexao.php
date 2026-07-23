<?php
// Configurações de acesso ao banco de dados.
$host ="localhost";
$usuario ="root";
$senha ="";
$banco ="jc_saude_system";

$conexao =new mysqli($host, $usuario, $senha, $banco);
// Verifica se houve erro na conexão.
if ($conexao->connect_error) {
    die ("Erro na conexão:". $conexao->connect_error);
}
?>