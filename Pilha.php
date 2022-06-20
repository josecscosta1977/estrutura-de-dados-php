<?php  
// PILHAS - pilhas (stacks) são estruturas de dados similares
// às listas, com a diferença de que na pilha os elementos são
// inseridos e retirados com base no conceito de 
// LAST IN, FIRST OUT, ou seja “o último a entrar é o primeiro a sair”

class Pilha{

    private $pilha;

    public function __construct(){

        $this->pilha = [];
    }

    public function adicionarPilha($nome){

        array_push($this->pilha, $nome);
    }

    public function mostrarPilha(){

        print_r($this->pilha);
    }

    public function retirarPilha(){

        array_pop($this->pilha);
    }
}
echo "ESTUDO SOBRE ESTRUTURAS DE DADOS EM PHP - 7/10/20";
echo "<br>";
echo "PILHAS:";
echo "<br>";

$nome = new Pilha();
$nome->adicionarPilha("virgílio");
$nome->mostrarPilha();

echo "<br>";

$nome->adicionarPilha("ewellyn");
$nome->mostrarPilha();

echo "<br>";

$nome->adicionarPilha("carlos");
$nome->mostrarPilha();

$nome->retirarPilha();

echo "<br>";

$nome->mostrarPilha();
?>



