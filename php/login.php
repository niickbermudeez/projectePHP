<?php
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ? AND active = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar contraseña
        if (password_verify($password, $user['passHash'])) {
            $_SESSION['user'] = [
                'id' => $user['idUser'],
                'name' => $user['userFirstName'],
                'lastname' => $user['userLastName'],
                'username' => $user['username']
            ];

            // Redirigir al home
            header("Location: home.php");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado o inactivo.";
    }
}
?>
