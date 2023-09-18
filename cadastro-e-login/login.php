<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <div>
            <input type="text" name="nome" id="nome" placeholder="Usuário">
           </div>
           <br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <a href="index.html" class="submit">Login</a>
        
    </div>
    <h1>Adm</h1>
    <div class="box">
        <a href="login_adm.php">Login Adm</a>
        <a href="cadastro.php">Cadastro Adm</a>
    </div>
</form>
</body>
</html>