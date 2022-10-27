<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<main class="index-main">
<div class="login">
    <form action="./login.php" method="post">
        <h1>Login</h1>
        <div class="usuario">
            <label for="usuario">Usuário:</label>
            <input type="text" class= "input_usuario" id="usuario" name="usuario" required/>
        </div>
        <div class="senha">
            <label for="senha">Senha</label>
            <input type="password" class= "input_senha" id="senha" name="senha" required/>
        </div>
        <div class="botoes">
            <input type="reset" value="Reset" class="reset">
            <input type="submit" value="Submit" class="submit">
        </div>
    </form>
</div>
</main>
</body>
</html>