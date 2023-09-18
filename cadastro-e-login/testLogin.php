<?php
    session_start();
     print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $senha = $_POST['senha'];

         print_r('<br>');
         print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM adm WHERE senha = '$senha'";

        $result = $conexao->query($sql);

        print_r($sql);
        print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            
            unset($_SESSION['senha']);
            header('Location: cadastro.php');
        }
        else
        {
            
            $_SESSION['senha'] = $senha;
            header('Location: formulario.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login_adm.php');
    }
?>