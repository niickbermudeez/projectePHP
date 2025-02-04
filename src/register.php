<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="form-header">
        <button id="return-button"><a href="../index.php"><img src="../img/volverIcono.png" alt=""></a></button>
        <img src="../img/logoTitulo.png" alt="" id="logoTitulo">
    </div>
    
    <form action="./../php/register_action.php" method="POST>
        <label for="name">First Name</label>
        <input type="text" name="name" placeholder="Name">

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" placeholder="Last Name">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" required>
        
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label for="password">Password</label>
        <input type="text" name="password" placeholder="Password" required>

        <label for="verifypassword">Verify Password</label>
        <input type="text" name="verifypassword" placeholder="Verify Password" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>