<?php
function exibirMusica($quantidadedePatos){
   for ($i=$quantidadedePatos; $i > 0; $i--) {
       echo "$i patinho" . (($i > 0) ? 's' : '') . " foram passear\n";
       echo "Além das montanhas para brincar";
       echo "A mamãe gritou:Quá, Quá, Quá,Quá\n";
       echo "Mas só $i patinho" . (($i > 1) ? 's' : '') . "voltaram de lá\n\n";
   }
   echo "A mamãe patinha encontrou todos os patinhos\n";
}

echo "Quantos patinhos foram passear?";
$quantidadedePatos = trim(fgets(STDIN));

if (is_numeric($quantidadedePatos) && $quantidadedePatos > 0) {
    exibirMusica($quantidadedePatos);

} else {
    echo "Por favor fale um número de patinhos.";
}
