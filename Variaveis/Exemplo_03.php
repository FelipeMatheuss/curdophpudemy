<?php

// tipos basicos de dados
    $nome = "Hcode";
    $site = 'www.hcode.com.br';

    $ano = 1998;

    $salario  = 5500.99;

    $bloqueado = false;
///////////////////////////////////////////////
//tipo  compostos 

$frutas = array("Abacaxi", "Laranja", "Manga",);

   // echo $frutas[2];
//////////////////////////////////////////
// TODA VEZ QUE A PALAVRA NEW FOR USADA  E UMA ORIENTAÇÃO A OBJETO
$nascimento = new DateTime();

echo "<br>";

//var_dump($nascimento);
//////////////////////////////////
// tipos especiais resouce e null

    $arquivo = fopen("exemplo_03.php", "r");

    var_dump($arquivo);


    $nulo = NULL;// nulo nao existe
    //vazio existe mas ainda nao tem valor definido
    $vazio = ("");

?>