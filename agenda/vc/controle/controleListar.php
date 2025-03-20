
        <?php

            $conexao = mysqli_connect("localhost", "root", "vertrigo","agenda");
            $dados = mysqli_query($conexao, "select * from contato");

            while($usuario = mysqli_fetch_array($dados)){
                $contatos[] = $usuario["nome"];
            }
        ?>

          
