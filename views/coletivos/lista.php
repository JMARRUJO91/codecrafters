<!DOCTYPE html>
<html>
<head>
    <title>Lista de Equipes</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Equipes</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomes</th>
                        <th>Idade</th>
                        <th>Nacionalidade</th>
                    </tr>
                </thead>
                <?php foreach ($coletivos as $coletivo): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $coletivos['id_coletivo']; ?></td>
                            <td><?php echo $coletivos['nomes']; ?></td>
                            <td><?php echo $coletivos['equipe']; ?></td>
                            <td><?php echo $coletivos['modalidade']; ?></td>
                            <td><?php echo $coletivos['serie']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>