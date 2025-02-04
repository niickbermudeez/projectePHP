<?php
include('./../connecta_db.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verifypassword = $_POST['verifypassword'];

    if ($password !== $verifypassword) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (userFirstName, userLastName, mail, username, passHash, active, creationDate) VALUES (?, ?, ?, ?, ?, 1, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $lastname, $email, $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente. <a href='../index.php'>Ir al login</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
