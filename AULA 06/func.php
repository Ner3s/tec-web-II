<?php

$array = array(
    [
        "aluno"=>"1",
        "nota1"=>10,
        "nota2"=>5,
    ],
    [
        "aluno"=> "2",
        "nota1"=>3,
        "nota2"=>8,

    ],
    [
        "aluno"=> "3",
        "nota1"=>5,
        "nota2"=>9,
    ],
    [
        "aluno"=>"4",
        "nota1"=>2,
        "nota2"=>2,
    ],
    [
        "aluno"=>"5",
        "nota1"=>9,
        "nota2"=>8,
    ],

);
//var_dump($array);

function soma($array=null){
    foreach($array as $linha){
        echo "<p>Aluno: ".$linha['aluno']."</p>";
        echo "<p>Nota1: ".$linha['nota1']."</p>";
        echo "<p>Nota2: ".$linha['nota2']."</p>";
        $media = ( $linha['nota1']+$linha['nota2'])/2;
        echo "<p>Media: ".$media."</p><hr>";
    }

}
soma($array);
?>