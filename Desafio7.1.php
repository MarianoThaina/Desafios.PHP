<?php
$usuario = "Tempesta";
$senha = "15101697";
// Garante que uma senha com pelo menos 6 caracteres seja fornecida
do {
    $senha = readline("Digite a Senha: ");
    if ($senha != 15101697) {
        echo " Erro no código do terminal." . PHP_EOL;
    }
    elseif ($senha = 15101697) {
        echo "Senha criada com sucesso!" . PHP_EOL;
    }
} while ($senha = 15101697);
echo "Senha criada com sucesso!" . PHP_EOL;