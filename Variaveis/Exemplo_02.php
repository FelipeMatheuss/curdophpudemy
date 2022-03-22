<?php
// para criar um comentario em php usar o  /* para abrir e para fecha */
$anoNascimento =  1999;


// na lina de baixo temo uma variavel com numero no nome
$nome1 = "Felipe";
$sobrenome = "Matheus";

// para concatenar e usado o ponto. mas para dar espaço em frases montada e usado as "aspas duplas"  
$nomeCompleto = $nome1. " " .$sobrenome;
echo $nomeCompleto;

exit;

echo "<br>";
//unset usado para remover varivel

//unset($nome1);
//isset usado poara verificar se a variavel ja foi definida;
if(isset($nome1)) {

    echo $nome1;   
}





?>