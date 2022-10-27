

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
    <title>Bem Vindo</title>
</head>
<body>
<main class="login-main">
<div class="hashira">
<?php 
    $nome = $_POST["usuario"];
    $senha = $_POST["senha"];
?>

<div class="message">
    <h2>Seja Bem Vindo!</h2>
    <p>Parabéns Jovem <?php  echo $nome  ?>, você está apto a se tornar um exterminador de oni. 
    A partir de agora Usaremos a senha que você criou para nos comunicarmos <?php  echo $senha  ?>.
    </p>
</div>
</div>
</main>
</body>
</html>