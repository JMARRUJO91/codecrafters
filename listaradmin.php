<?php include 'db.php';
require_once 'controllers/AdmController.php';

// Atualiza ADM
if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['senha'])) {
    $admController->atualizarAdm($_POST['id'], $_POST['atualizar_nome'], $_POST['atualizar_senha']);
}

// Excluir ADM
if (isset($_POST['excluir_adm'])) {
    $admController->excluirAdm($_POST['excluir_id']);
}

$adms = $admController->listarAdms();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista de Competidores</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
        </tr>
        <?php foreach ($adms as $adm): ?>
            <tr>
                <td><?php echo $adm['id']; ?></td>
                <td><?php echo $adm['nome']; ?></td>
                <td><?php echo $adm['senha']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <fieldset>
        <legend><h2>Lista dos Admininstradores</h2></legend>
            <ul>
                <?php foreach ($adms as $adm): ?>
                    <li><?php echo $adm['nome']; ?> - <?php echo $adm['senha']; ?></li>
                <?php endforeach; ?>
            </ul>
    </fieldset>

<h2>Atualizar Admininstrador</h2>
    <form method="post">
        <select name="id_adm">
        <?php foreach ($adms as $adm): ?>
                                <option value="<?php echo $adm['id']; ?>"><?php echo $adm['nome']; ?>"><?php echo $adm['senha']; ?></option>
                                <?php endforeach; ?>
         </select>
                <input type="text" name="atualizar_nome" placeholder="Novo nome">
                <input type="text" name="atualizar_senha" placeholder="Nova senha">
                <button type="submit">Atualizar Admininstrador</button>
    </form>

    <h2>Excluir Admininstrador</h2>
    <form method="post">
        <select name="excluir_admininstrador">
            <?php foreach ($adms as $adm): ?>
                <option value="<?php echo $adm['id']; ?>"><?php echo $adm['nome']; ?>"><?php echo $adm['senha']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Admininstrador</button>
    </form><br><br><br><br>

</body>
</html>

