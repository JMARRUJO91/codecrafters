<?php




    if(isset($_POST['submit']))
    {
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
</head>
<body>

    <div class="principal">
        
            
        <header>
            <div id="menu">
                    
                    <img src="imagens/logo1.png" width="400" height="450" >
                    <ul>
                        <li><a href="index.html">INÍCIO</a></li>
                        <li><a href="inscricoes.php">INSCRIÇÕES</a></li>
                        <li><a href="sobre.html">SOBRE</a></li>
                        <li><a href="galeria.html">GALERIA</a></li>
                        <li><a href="equipes.html">EQUIPES</a></li>
                        <li><a href="resultados.html">RESULTADOS</a></li> 
                        <li><a href="suporte.php">SUPORTE</a></li>
                        <li><a href="contato.html">CONTATO</a></li>
                    </ul>
                </div>
                    

        </header>

                

        <aside>
            
                <div class="calendar">
                    <h1>Calendário</h1>
                    <div class="countdown">
                        <h2>Contagem Regressiva para 10/10/2023</h2>
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
                    <p>PERGUNTA 1</p>
      
                </div>
                <div class="accordion__answer">
                    <p>RESPOSTA 1</p>
      
                </div>
            </div>
            <div class="accordion">
                <div class="accordion__question">
                    <p>PERGUNTA 2</p>
      
                </div>
                <div class="accordion__answer">
                    <p>
                      RESPOSTA 2
                    </p>
      
                </div>
            </div>
            <div class="accordion">
                <div class="accordion__question">
                    <p>PERGUNTA 3</p>
      
                </div>
                <div class="accordion__answer">
                    <p>RESPOSTA 3</p>
      
                </div>
            </div>

            <div class="accordion">
                <div class="accordion__question">
                    <p>PERGUNTA 4</p>
      
                </div>
                <div class="accordion__answer">
                    <p>RESPOSTA 4</p>
      
                </div>
            </div>

            <div class="accordion">
                <div class="accordion__question">
                    <p>PERGUNTA 5</p>
      
                </div>
                <div class="accordion__answer">
                    <p>RESPOSTA 5</p>
      
                </div>
            </div>
        </div>

        <div>
            
        </div>

    </div>

     
        <script>
            let answers=document.querySelectorAll(".accordion");
            answers.forEach((event)=>{
                event.addEventListener('click',()=>{
                    if(event.classList.contains("active")){
                        event.classList.remove("active");
                    }
                    else{
                        event.classList.add("active");
                    }
                })
            })
         </script>
        
 

  
  </section>
      
    <footer>
        <br>
        <br>
    </footer>

    </div>
</body>
</html>