<?php

    if($_POST['pass'] != 123){ ?>
        <p>Código informado incorreto!</p>
        <a href="index.php">Voltar</a>
    <?php }else{ ?>

        <p>Você esta autenticado!</p>
        <a href="index.php">Sair</a>

    <?php } ?>