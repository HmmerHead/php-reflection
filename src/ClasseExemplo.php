<?php

namespace Alura\Reflection;

final class ClasseExemplo implements \JsonSerializable
{
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct()
    {
        echo 'Executando construtor de ' . __CLASS__ . PHP_EOL;;
    }

    public function metodoPublico($mensagem = "", int $numero = 42): void
    {
        echo 'Executando método público: ' . $mensagem . $numero . PHP_EOL;
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido'. PHP_EOL;
        return 1;
    }

    private function metodoPrivado(int $a): void
    {
        echo 'Executando método privado'. PHP_EOL;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
