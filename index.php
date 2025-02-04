<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Login page</title>
</head>
<body>

    <img src="./img/logo.png" alt="" id="logo">

    <form action="./php/login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Sign in</button>
    </form>

    <div>
        <a href="./src/register.php">Don't have an account yet? <br> Sign up</a>
    </div>

</body>
</html>
