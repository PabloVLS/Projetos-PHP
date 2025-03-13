<?php
    class Funcionario{
        var $nome, $salario;
        /*function Funcionario($n, $s){
            $this->nome + $n;
            $this->salario = $s;
        }*/
        

        function __construct($n, $s){
            $this->nome = $n;
            $this->salario = $s;
        }
        function aumentoSalario($valor){
            $this->salario += $valor;
        }

    }

?>
