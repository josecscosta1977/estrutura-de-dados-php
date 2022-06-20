<?php 
// ARRAYS - arrays, vetors, matrizes ou arranjos são estruturas de 
// dados lineares ou ordenadas, ou seja, só será possível mudar
// essa ordem por meio de métodos.

class Vetor{

    private $vetor;

    public function __construct(){

        $this->vetor = [];
    }

    public function adicionarVetor($nome){

        $this->vetor[] = $nome;
    }

    public function mostrarVetor(){

        print_r($this->vetor);
    }
}
echo("ESTUDO SOBRE ESTRUTURAS DE DADOS EM PHP - 7/10/20 <br>");
echo("ARRAYS: <br><br>");

$nome = new Vetor();
$nome->adicionarVetor("virgílio");
$nome->mostrarVetor();

echo("<br>");

$nome->adicionarVetor("ewellyn");
$nome->mostrarVetor();

echo("<br>");

$nome->adicionarVetor("carlos");
$nome->mostrarVetor();


?>
