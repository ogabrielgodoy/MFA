<?php 

    if($_POST['pass'] AND $_POST['user'] != 'admin'){ ?>
    <p>Usuário ou senha incorretos!</p>
    <a href="index.php">Voltar</a>
    <?php }else{ ?>

    <center>    
    <img src="assets/img/mfa.png" alt="MFA" height="180px">
    <br>

    <p>Enviamos um código ao email cadastrado... <br> <b>(Mas você pode tentar usar 123)</b></p>

    <form action="mfa.php" method="post">
        <input type="text" name="pass">
        <input type="submit" value="Autenticar">
    </form>
    </center>
    <?php } ?>