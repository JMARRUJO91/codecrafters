<!DOCTYPE html>
<html>
<head>
    <title>Lista de Treinadores</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Treinadores</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Nacionalidade</th>
                    </tr>
                </thead>
                <?php foreach ($treinadores as $treinador): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $treinador['id_treinador']; ?></td>
                            <td><?php echo $treinador['nome2']; ?></td>
                            <td><?php echo $treinador['idade2']; ?></td>
                            <td><?php echo $treinador['nacionalidade2']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>