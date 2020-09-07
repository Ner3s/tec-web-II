<?php
class Pessoa {
    protected $idade,$nome;
    function __construct(){
        $this->idade = 0;
        $this->nome='vazio';
    }
    function getIdade(){
        return  $this->idade;
    }
    function setIdade($idade){
        $this->idade=$idade;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome=$nome;
    }
}

$pessoa = new Pessoa ();
echo "<p>Nome:".$pessoa->getNome()."</p>";
echo "<p>Idade:".$pessoa->getIdade()."</p><hr>";
$pessoa->setNome('Rodrigo');
$pessoa->setIdade(13);
echo "<p>Nome:".$pessoa->getNome()."</p>";
echo "<p>Idade:".$pessoa->getIdade()."</p>";

class Aluno extends Pessoa{
    public $matricula;

    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }
}

$aluno = new Aluno();
$aluno->setNome('Daniel velhote');
$aluno->setIdade(999);
$aluno->setMatricula(0001);

echo "<hr><p>Nome:".$aluno->getNome()."</p>";
echo "<p>Idade:".$aluno->getIdade()."</p>";
echo "<p>Matricula:".$aluno->getMatricula()."</p>";

?>