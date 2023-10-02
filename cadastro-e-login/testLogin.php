<?php
    session_start();
     print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM adm WHERE nome = '$nome' and senha = '$senha'";

        $result = $conexao->query($sql);

        print_r($sql);
        print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: erro.html');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: confirma.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login_adm.php');
    }
?>  