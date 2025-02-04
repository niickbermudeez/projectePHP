<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit;
}

$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // Cerrar sesión y redirigir al login
    session_destroy();
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="navbar-container">
                <div class="logo">
                    <img src="../img/logoTitulo.png" alt="Logo" id="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                    </ul>
                </div>
                <div class="user-greeting">
                    <p>Hola, <?php echo htmlspecialchars($user['name']); ?>!</p>
                    <!-- Botón de logout -->
                    <form method="POST" style="display:inline;">
                        <button type="submit" name="logout" style="background: none; border: none; color: blue; cursor: pointer; text-decoration: underline;">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

</body>
</html>
