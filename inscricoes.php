<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="calendario/style.css">
    <link rel="stylesheet" href="headeraside.css">
</head>
<body>

    <div class="principal">
        
            

                <div id="menu">
                    
                    <img src="imagens/logo1.png" width="400" height="450" >
                    <ul>
                        <li><a href="index.html">INÍCIO</a></li>
                        <li><a href="inscricoes.php">INSCRIÇÕES</a></li>
                        <li><a href="sobre.html">SOBRE</a></li>
                        <li><a href="galeria.html">GALERIA</a></li>
                        <li><a href="equipes.html">EQUIPES</a></li>
                        <li><a href="#">RESULTADOS</a></li>
                        <li><a href="suporte.php">SUPORTE</a></li>
                    </ul>
                    </div>
                    </section>

                    
        <aside>
            
                <div class="calendar">
                    <h1>Calendário</h1>
                    <div class="countdown">
                        <h2>Contagem Regressiva para 16/10/2023</h2>
                        <div id="countdown-timer">
                            <span id="days"></span> dias
                            <span id="hours"></span> horas
                            <span id="minutes"></span> minutos
                            <span id="seconds"></span> segundos
                        </div>


                    </div>
                    <div class="date-grid" id="calendar"></div>
                </div>
                <script src="calendario/script.js"></script>

        
        </aside>
        <footer>
    <br>
    <br>
    </footer>
    </div>

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
        <a href="./cadastro-e-login/login_adm.php">Login Adm</a>
        <a href="./cadastro-e-login/cadastro.php">Cadastro Adm</a>
    </div>

</body>
</html>