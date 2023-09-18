<?php
require_once 'db.php';
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
        
            
        

                <div id="menu">
                    
                    <img src="imagens/logo1.png" width="400" height="450" >
                    <ul>
                        <li><a href="index.html">INÍCIO</a></li>
                        <li><a href="#">INSCRIÇÕES</a></li>
                        <li><a href="#">SOBRE</a></li>
                        <li><a href="#">GALERIA</a></li>
                        <li><a href="#">EQUIPES</a></li>
                        <li><a href="#">RESULTADOS</a></li> 
                        <li><a href="suporte.html">SUPORTE</a></li>
                    </ul>
                    </div>
                    





                   
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
        <style>
         
        </style>
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
        
    
<form action="suporte.html" method="POST">
    <div class="formulariocontato">
        <label class="contato1" for="contato">Alguma idéia/sugestão ou dúvida? </label>
        <input class="contato2" placeholder="Fale conosco!" type="textarea" name="contato" id="contato">
        <label class="nome1" for="nome">Insira seu nome!</label>
        <input class="nome2" placeholder="Nome" type="textarea" name="nome" id="nome">
        <input class="" type="submit" name="submit" value="Enviar">
        </div>
    </form>
    <footer>
        <br>
        <br>
        </footer>
    </div>
</body>
</html>