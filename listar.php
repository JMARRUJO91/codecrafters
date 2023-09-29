
<?php include 'cadastro-e-login/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuários</title>
</head>
<body background="backgrounded.jpg">
    <h1>Usuários</h1>
    <section>
<div class="r2">
    
    <button type="submit" name="submit" value=""><a href="index.php">Coletivo</a></button>
</div>
<div class="container2"></div>

    
    <?php
$stmt = $pdo->query('SELECT * FROM coletivo ORDER BY nomes, equipe, modalidade, serie');
$coletivo = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($coletivo) == 0) {
    echo '<h2>Nenhum usuário cadastrado</h2>';
} else {
    echo '<table border="1">';
    echo '<thead><tr><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Data de Nascimento</th><th>Cidade</th><th colspan="2">Opções</th></tr></thead>';
    echo '<tbody>';
    foreach ($coletivo as $coletivos) {
        echo '<tr>';
        echo '<td>' . $coletivo['nomes'] . '</td>';
        echo '<td>' . $coletivo['equipe'] . '</td>';
        echo '<td>' . $coletivo['modalidade'] . '</td>';
        echo '<td>' . $coletivo['serie'] . '</td>';
        echo '<td><a style="color:black;" href="atualizar.php?id=' . $coletivo['id_coletivo'] . '">Atualizar</a></td>';
        echo '<td><a style="color:black;" href="deletar.php?id=' . $coletivo['id_coletivo'] . '">Deletar</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}
?>

</body>
</html>