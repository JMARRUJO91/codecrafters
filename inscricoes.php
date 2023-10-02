<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="calendario/style.css">
    <link rel="stylesheet" href="headeraside.css">
    <link rel="stylesheet" href="inscricoes.css">
</head>

<body>

    <div class="principal">


        <header>
            <div id="menu">

                <img src="imagens/logo1.png" width="400" height="450">
                <ul>
                    <li><a href="index.html">INÍCIO</a></li>
                    <li><a href="inscricoes.php">INSCRIÇÕES</a></li>
                    <li><a href="sobre.html">SOBRE</a></li>
                    <li><a href="galeria.html">GALERIA</a></li>
                    <li><a href="equipes.html">EQUIPES</a></li>
                    <li><a href="resultados.html">RESULTADOS</a></li>
                    <li><a href="suporte.php">SUPORTE</a></li>
                </ul>
            </div>

        </header>



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
        <section>
            <div>
         <div class="caixa"><div class="text">
                <h1>Login</h1>
                <form action="testLogin.php" method="POST">
                    <div>
                    
                        <input type="text" name="nome" id="nome" placeholder="Usuário">
                    </div>
                </div>
                    <br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>

                    <a class="bot" href="index.html" class="submit">Login</a>
            </div>


            </div>
            <div class="adm"><h1>Login Administrador</h1>
            <div class="box">
                <a class="bot" href="cadastro-e-login/login.php">Login adm</a></br>
                <a class="bot" href="cadastro-e-login/cadastro.php">Cadastro Adm</a>
    </div> 
        </div>

        </section>
        <footer>
            <br>
            <br>
        </footer>
    </div>



</body>

</html>