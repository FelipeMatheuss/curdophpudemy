<?php
//int usado para converter a instrig para interiro(int );
    $nome = (int) $_GET["a"];//toda informaçao que vem por get sera uma string

    var_dump($nome);

        echo "<br>";
    //usado para ver ip do usario
    $ip = $_SERVER["REMOTE_ADDR"];

    echo $ip;

    echo "<br>";

    //USADO PARA S
    $ip = $_SERVER["SCRIPT_NAME"];

    echo $ip;
?>