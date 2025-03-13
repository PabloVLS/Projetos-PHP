<?php
    include_once "Funcionario.php";
    $prof = new Professor("Regima", 2500, "Engenharia");

    echo("O prof " . $prof->nome . " ministra a disciplina " . $prof->disciplina . " e recebe R$" . $prof->salario . " <br/>");

    $prof->aumentoSalario(300);

    $prof->setDisciplina("Banco de Dados");

    echo("O professor " . $prof->nome . "ministra a disciplina " . $prof->disciplina . " e recebe R$" .$prof->salario . " <br/>");

    echo Professor::teste();

?>
