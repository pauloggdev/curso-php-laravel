<?php
$idade = 33;
$nome = "Paulo João";

$is_valid = 2;
//Variaveis do tipo array
$funcionario = [
    "nome" => "Paulo João",
    "cargo" => "Desenvolvedor",
    "salario" => 1000000
];
//Variaveis do tipo array
$funcionario2 = array(
    "nome" => "paulo"
);


if($is_valid){
    echo "verdadeiro String";
}else{
    echo "Falso";
}

//echo $funcionario['salario'];

//Array de varios funcionarios

$funcionario3 = [
    ["nome" => "Paulo João", "cargo" => "Desenvolvedor"],
    ["nome" => "Avelino usd", "cargo" => "Analista de rede"],
    ["nome" => "Ayla Cristina", "cargo" => "Estudante"],
];


//for ($i = 0; $i < count($funcionario3); $i++) {
//    echo $funcionario3[$i]['nome'] . "<br>";
//}
//foreach ($funcionario3 as $key => $f) {
//    echo $funcionario3[$key]['nome'] . "<br>";
//}


//echo $funcionario3[2]['nome'];


$numero1 = 10;
$numero2 = 20;
$soma = $numero1 + $numero2;
//print($soma) . "<br>";


//printf("Meu é : ".$nome. ", tenho ". $idade. " anos de idade");


//print("Meu nome é: ${nome} tenho ${idade} de idade");

