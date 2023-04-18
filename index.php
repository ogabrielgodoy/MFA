    <?php 
    session_start(); //Inicia a sessão no PHP
    ?>

    <title>MFA</title>
    <h1>Exemplo de MFA</h1>
    <!-- Mostra o código de autenticação gerado aleatóriamente -->
    <p>Para fazer login no sistema use o login: admin e a senha: admin</p>
    <hr>
    <!-- Formulário HTML -->
    <form action="script.php" method="post">
        <input type="text" name="user" id="user">
        <input type="pass" name="pass" id="pass">
        <input type="submit" value="Autenticar">
    </form>

    <footer>
        <p>Feito por Gabriel Godoy | Desenvolvimento de sistemas | Módulo 3 | Professor Abraão</p>
    </footer>