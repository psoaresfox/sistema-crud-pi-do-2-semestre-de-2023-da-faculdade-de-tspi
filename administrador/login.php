<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login do Administrador</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Entre na aventura dos seus sonhos<br>Seja bem-vindo à nossa loja de games<br>ALPHA!</h1>
            <img src="img/animacao.svg" class="left-login-img">
        </div>

        <form class="right-login" action="processa_login.php" method="post"> <!-- Post não mostra as informações do usuário, ao contrário do Get que mostra tudo.-->

            <div class="card-login">
                <div class="right-login-img">
                    <img src="img/Logo darkmode.png" alt="">
                </div>
                <h1>Login do administrador</h1>
                <div class="text-field">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required> <!--Required serve para ter que preencher obrigatóriamente o campo-->
                </div>
                <div class="text-field">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <input type="submit" value="Login" class="btn-login">            
            </div>

        </div>
        <?php
        /*Mensagem de erro para caso os dados do usuário sejam incorretos. */
            if(isset($_GET['error'])){ //A mensagem de erro funciona como super global GET e não POST.
                echo '<p style= "color: red; ">Nome do usuário ou senha incorretos!</p>';
            }
        ?>
        </form>
</body>
</html>