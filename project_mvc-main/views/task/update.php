<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando Usuário</title>
</head>
<body>
    <h1>Atualizando Usuário</h1>
    <form action="index.php?action=update&id=<?php echo $task['id']; ?>" method="post">
        <label for="name">tarefa:</label>
        <input type="text" id="tarefa" tarefa="name" value="<?php echo htmlspecialchars($task['tarefa'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <label for="prazo">Prazo:</label>
        <input type="name" id="prazo" tarefa="prazo" value="<?php echo htmlspecialchars($task['prazo'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Voltar para lista de Tarefa</a>
</body>
</html>
