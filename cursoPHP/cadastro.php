<?php
    $nome = $_GET["nome"];
    $tutor = $_GET["tutor"];
    echo "Nome: $nome e Tutor: $tutor <br/><br/>";
    $con = mysqli_connect("localhost", "root", "vertrigo", "veterinaria");
    $sql = "INSERT INTO animal (nome, tutor) values ('$nome', '$tutor')";

    $resultado = mysqli_query($con, $sql);

?>
