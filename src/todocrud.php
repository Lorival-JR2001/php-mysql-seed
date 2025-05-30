<?php
// Conecta ao banco
$mysqli = new mysqli("db", "user", "pass", "tododb");

if ($mysqli->connect_errno) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

// Cria a tabela se não existir
$mysqli->query("CREATE TABLE IF NOT EXISTS todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarefa VARCHAR(255) NOT NULL
)");

// Processa requisições antes de qualquer saída
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $task = $mysqli->real_escape_string($_POST['task']);
    $mysqli->query("INSERT INTO todos (tarefa) VALUES ('$task')");
    header("Location: todocrud.php");
    exit;
}

if (isset($_GET['remove'])) {
    $id = intval($_GET['remove']);
    $mysqli->query("DELETE FROM todos WHERE id = $id");
    header("Location: todocrud.php");
    exit;
}

// Depois de processar, buscar dados e renderizar
$result = $mysqli->query("SELECT * FROM todos");
?>

<?php include 'header.php'; ?>

<h2>To-Do List</h2>

<form method="POST">
    <input type="text" name="task" placeholder="Nova tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li>
            <?php echo htmlspecialchars($row['tarefa']); ?>
            <a href="?remove=<?php echo $row['id']; ?>">[Remover]</a>
        </li>
    <?php endwhile; ?>
</ul>

<?php include 'footer.php'; ?>
