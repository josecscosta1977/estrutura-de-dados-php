<?php 
// DEQUE - deques são estruturas de dados que mesclam características de filha e pilha,
// podemos inserir e remover tanto do início como no fim. Exemplo: filas com dois tipos
// de atendimento, normal e preferencial.

class Deque{

    private $deque;

    public function __construct(){

        $this->deque = [];
    }

    public function adicionarDequeNormal($nome){

        //array_unshift($this->deque, $nome);
        array_push($this->deque, $nome);
    }

    public function mostrarDeque(){

        print_r($this->deque);
    }

    public function adicionarDequePreferencial($nome){

        array_unshift($this->deque, $nome);
    }

    public function retirarDeque(){

        array_shift($this->deque);
    }
}

echo("ESTUDO SOBRE ESTRUTURAS DE DADOS EM PHP - 7/10/20");
echo "<br>";
echo "DEQUES:";
echo "<br><br>";


$nome = new Deque();
$nome->adicionarDequeNormal("virgílio14");
$nome->mostrarDeque();

echo "<br>";

$nome->adicionarDequeNormal("ewellyn34");
$nome->mostrarDeque();

echo("<br>");

$nome->adicionarDequePreferencial("maria72");
$nome->mostrarDeque();

echo "<br>";

$nome->adicionarDequePreferencial("carlos69");
$nome->mostrarDeque();

echo "<br>";

$nome->adicionarDequeNormal("soares32");
$nome->mostrarDeque();

echo "<br>";

$nome->retirarDeque();
$nome->mostrarDeque();
?>
