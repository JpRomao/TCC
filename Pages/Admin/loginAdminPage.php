<?php
    session_start();

    if(isset($_SESSION['admin']) && $_SESSION["admin"]){
        header("Location: ./index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Login Admin</title>

        <link rel="stylesheet" href="./adminLogin.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Poppins&display=swap"/>
    </head>
    <body>
        <main>
            <div id="main-div">
                <div class="main-div-content">
                    <h1>Admin Login</h1>
                        <br/>
                    <div class="form">
                        <img src="../../assets/img/key.svg" alt="Chave"/>

                        <form action="adminLoginConfirm.php" method="post" class="form-login">
                            <div class="input-block">
                                <label for="login">Login: </label>
                                    <input type="text" maxlength="16" name="login" id="login"/>
                            </div>
                            <div class="input-block">
                                <label for="password">Senha: </label>
                                    <input type="password" maxlength="50" name="password" id="password"/>
                            </div>
                            <button type="submit" name="action">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
