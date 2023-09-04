<!DOCTYPE html>
<html>
<head>
    <title>Lista de Competidores Individuais</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Competidores Individuais</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Modalidade</th>
                        <th>Email</th>
                        <th>Cidade</th>
                        <th>Série</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <?php foreach ($individuais as $individual): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $individual['id_individual']; ?></td>
                            <td><?php echo $individual['nome']; ?></td>
                            <td><?php echo $individual['idade']; ?></td>
                            <td><?php echo $individual['modalidade']; ?></td>
                            <td><?php echo $individual['email']; ?></td>
                            <td><?php echo $individual['cidade']; ?></td>
                            <td><?php echo $individual['serie']; ?></td>
                            <td><?php echo $individual['telefone']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>