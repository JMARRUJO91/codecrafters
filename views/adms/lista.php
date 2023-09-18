<!DOCTYPE html>
<html>
<head>
    <title>Lista de Admininstradores</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Admininstradores</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <?php foreach ($adms as $adm): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $adms['id']; ?></td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>