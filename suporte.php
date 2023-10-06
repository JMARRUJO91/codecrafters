<?php




if (isset($_POST['submit'])) {
    //print_r('Nome: ' . $_POST['sugestao']);
    //print_r('<br>');


    include_once('./cadastro-e-login/config.php');

    $nome = $_POST['nome'];
    $sugestao = $_POST['sugestao'];


    $result = mysqli_query($conexao, "INSERT INTO contato(nome,sugestao)
        VALUES ('$nome','$sugestao')");

    header('Location: suporte.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="calendario/style.css">
    <link rel="stylesheet" href="headeraside.css">
    <link rel="stylesheet" href="suporte.css">
    <link rel="stylesheet" href="calendariosuporte.css">
    <link rel="stylesheet" href="faq.css">
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
                </ul>
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


            <div class="faq">
                <p>FAQ (PERGUNTAS MAIS REALIZADAS)</p>
                <div class="accordion">
                    <div class="accordion__question">
                        <p>O que é uma competição interclasse?</p>

                    </div>
                    <div class="accordion__answer">
                        <p>Uma competição interclasse é um evento onde equipes
                             de diferentes turmas ou níveis escolares competem 
                             entre si em atividades esportivas, acadêmicas ou culturais.</p>

                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__question">
                        <p>Por que as escolas organizam competições interclasses?</p>

                    </div>
                    <div class="accordion__answer">
                        <p>
                        As escolas organizam competições interclasses para promover 
                        o espírito de equipe, incentivar a participação dos alunos,
                         e criar um ambiente de aprendizado divertido e competitivo.
                        </p>

                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__question">
                        <p>Que tipos de atividades são comuns em competições interclasses?</p>

                    </div>
                    <div class="accordion__answer">
                        <p>As atividades podem variar, mas em nossa escola são mais frequentes
                            esportes como futebol e Vôlei, e brincadeiras como a queimada. Além disso, jogos 
                            de tabuleiro, como xadrez, também podem 
                            fazer parte das competições.
</p>


                    </div>
                </div>

                <div class="accordion">
                    <div class="accordion__question">
                        <p>Todos os alunos são obrigados a participar das competições interclasses?</p>

                    </div>
                    <div class="accordion__answer">
                        <p>A participação geralmente é voluntária,
                             e os alunos podem escolher se desejam participar ou não.</p>

                    </div>
                </div>

                <div class="accordion">
                    <div class="accordion__question">
                        <p>As competições interclasses têm prêmios?</p>

                    </div>
                    <div class="accordion__answer">
                        <p>Sim, algumas competições interclasses oferecem prêmios, 
                            como medalhas para as equipes vencedoras.</p>

                    </div>
                </div>
            </div>

            <div>

            </div>




            <script>
                let answers = document.querySelectorAll(".accordion");
                answers.forEach((event) => {
                    event.addEventListener('click', () => {
                        if (event.classList.contains("active")) {
                            event.classList.remove("active");
                        } else {
                            event.classList.add("active");
                        }
                    })
                })
            </script>




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