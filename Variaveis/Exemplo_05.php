<?php
    
$nome = "Gloucio";

function test (){
    //global usada para variavel fora do escopo com mesmo nome tem o msm valor

    global$nome;
    echo $nome;
    echo "<br>";
    
}

 
function test2(){
    $nome = " joao ";
    echo $nome." agora no teste2 ";
}

test();

test2();

?>