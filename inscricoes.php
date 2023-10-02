<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="calendario/style.css">
    <link rel="stylesheet" href="headeraside.css">
    <link rel="stylesheet" href="inscricoes.css">
    <link rel="stylesheet" href="rodape.css">
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
                    <li><a href="suporte.php">SUPORTE</a></li>
                    <li><a href="contato.html">CONTATO</a></li>
                    <li><a href="noticias.html">NOTÍCIAS</a></li>
            </div>

        </header>



        <aside>

            <div class="calendar">
                <h1>Calendário</h1>
                <div class="countdown">
                <h2>Contagem Regressiva para 17/10/2023</h2>
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


            <div class="adm">
                <h1>INSCRIÇÕES</h1>
                <div class="box">
                    <a class="bot" href="cadastro-e-login/login.php">Login </a></br>
                    <a class="bot" href="cadastro-e-login/cadastro.php">Cadastro </a>
                </div>
            </div>

        </section>
        <footer>

            <ul>

                <li>

                    <a href="#"> <img class="rodapeimg" src="imagens/facebook.png" alt="Logo da Alura"> </a>
                    <a href="#"> <img class="rodapeimg" src="imagens/logotipo-do-instagram.png" alt="Logo da Caelum"> </a>
                    <a href="#"> <img class="rodapeimg" src="imagens/twitter.png" alt="Logo da Casa do Código"> </a>
                    <a href="#"> <img class="rodapeimg2" src="imagens/Sesi-SP.jpg" alt="Logo do Sesi"> </a>
                    <a href="termos.html">Termos de Uso</a> |
                    <a href="politica.html">Política de Privacidade</a>
                </li>
            </ul>

        </footer>
    </div>



</body>

</html>