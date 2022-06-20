<?php  
// FILAS - filas (queue) são estruturas de dados similares
// às listas, com a diferença de que na fila os elementos são
// inseridos e retirados com base no conceito de 
// FIRST IN, FIRST OUT, ou seja, “o primeiro a entrar é o primeiro a sair”

class Fila{

    private $fila;

    public function __construct(){

        $this->fila = [];
    }

    public function adicionarFila($nome){

        array_push($this->fila, $nome);
    }

    public function mostrarFila(){

        print_r($this->fila);
    }

    public function retirarFila(){

        array_shift($this->fila);
    }
}
echo("ESTUDO SOBRE ESTRUTURAS DE DADOS EM PHP - 7/10/20 <br>");
echo("ESTUDO SOBRE FILAS: <br><br>");

$nome = new Fila();
$nome->adicionarFila("virgílio");
$nome->mostrarFila();

echo("<br>");

$nome->adicionarFila("ewellyn");
$nome->mostrarFila();

echo("<br>");

$nome->adicionarFila("carlos");
$nome->mostrarFila();

$nome->retirarFila();

echo("<br>");

$nome->mostrarFila();

?>