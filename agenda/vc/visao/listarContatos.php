<HTml>
    <HEAd>
        <TITLe>Lista de Contatos</TITLe>
        <meta charset="utf-8"/>
    </HEAd>


    <body>
        <?php
            include_once "../controle/controleListar.php";
        ?>
        <h1>Lista de Contatos</h1>
        <ul>
            <?php
                foreach($contatos as $i=>$nome){
                    $i++;
                    echo "<li> Contato n° $i : $nome </l1>";
                }
            ?>
        </ul>
    </body>
</HTml>