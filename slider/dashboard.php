<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Painel de Controle</h2>
        <p>Bem-vindo, <?php echo $_SESSION["username"]; ?>!</p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
