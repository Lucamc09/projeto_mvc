<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando nova tarefa</title>
</head>
<body>
    <h1>Criando nova tarefas</h1>
    <form action="index.php?action=create" method="post">
        <label for="name">tarefa:</label>
        <input type="text" id="tarefa" tarefa="tarefa" required>
        <br>
        <label for="text">Prazo:</label>
        <input type="text" id="prazo" tarefa="prazo" required>
        <br>
        <input type="submit" value="Create">
    </form>
    <a href="index.php">Voltar para lista de tarefas</a>
</body>
</html>
