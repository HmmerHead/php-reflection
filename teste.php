<?php

require_once __DIR__ . '/vendor/autoload.php';

echo __LINE__ . PHP_EOL;

$idade = 22;

$variavel = 'idade';

echo $$variavel. PHP_EOL;;

$nomeCompletoClasse = 'Alura\Reflection\ClasseExemplo';
$nomeMetodo = 'metodoPublico';

$objeto = new $nomeCompletoClasse();

if (method_exists($nomeCompletoClasse, $nomeMetodo)) {
    echo PHP_EOL;
    $objeto->$nomeMetodo();
    echo PHP_EOL;
}

var_dump($objeto). PHP_EOL;;

var_dump(get_object_vars($objeto)). PHP_EOL;;

var_dump(is_a($objeto, \Alura\Reflection\ClasseExemplo::class)). PHP_EOL;;
var_dump($objeto instanceof \Alura\Reflection\ClasseExemplo). PHP_EOL;;
