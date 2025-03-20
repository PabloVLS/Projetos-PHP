<HTml>
    <HEAd>
        <TITLe>Lista de Contatos</TITLe>
        <meta charset="utf-8"/>
    </HEAd>


    <body>
        <?php
            /*$conexao = mysql_connect("localhost", "root", "vertrigo");
            mysql_select_db("agenda", $conexao); (ESSE CODIGO ERA ANTIGAMENTE )*/
            $conexao = mysqli_connect("localhost", "root", "vertrigo","agenda");
            $dados = mysqli_query($conexao, "select * from contato");
        ?>

        <ul>
            <?php
                $i = 1;
                while($usuario = mysqli_fetch_array($dados)){
                    echo("<LI> Contato n°" .$i . ":" . $usuario ["nome"] . "</LI>");
                    $i++;
                }
            ?>
        </ul>
    </body>
</HTml>