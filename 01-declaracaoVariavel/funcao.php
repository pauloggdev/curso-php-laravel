<?php
function soma(int $numero1, int $numero2):int{
    return $numero1 + $numero2;
}
//echo soma(10, 30);


function mostrarFuncionario(array $funcionarios){
    foreach ($funcionarios as $key=>$f){
        echo $f['nome']."\n";
    }
}

$funcionario3 = [
    ["nome" => "Paulo João", "cargo" => "Desenvolvedor"],
    ["nome" => "Avelino usd", "cargo" => "Analista de rede"],
    ["nome" => "Ayla Cristina", "cargo" => "Estudante"],
];

$funcionario3 = 10;

mostrarFuncionario($funcionario3);