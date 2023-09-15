<!DOCTYPE html>
<html>
<head>
    <title>Lista de Perguntas/Sugestões</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Perguntas/Sugestões</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <?php foreach ($contatos as $contato): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $contatos['id_contato']; ?></td>
                            <td><?php echo $contatos['nome']; ?></td>
                            <td><?php echo $contatos['email']; ?></td>
                            <td><?php echo $contatos['idade']; ?></td>
                            <td><?php echo $contatos['telefone']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>