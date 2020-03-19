<?php

session_start();
// this needs to be at the top
// to ways to keep people logged in to your site, either sessions/ cookies 
// session is always valid until the browser is shutdown 

require('./config/db.php');

if (isset($_POST['login.php'])) {
    require('./config/db.php');

    $email = $_POST['userEmail'];
    //echo "Email: $email <br>";

    $password = $_POST['userPassword'];
    //echo "Password: $password <br>";

    $stmt = $pdo->prepare('SELECT * from users WHERE userEmail = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (password_verify($password, $user->userPassword)) {
        echo "Login is successful <br>";
        $_SESSION['userId'] = $user->id;
        header('Location: http://localhost:8888/pdo/index.php');
    } else {
        echo "Your email or password is incorrect<br>";
    }
}



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <nav>

        <h1>Navigation Bar</h1>
        <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>




        <form action="login.php" method="POST">
      
            <div class="form-group">
                <label for="userEmail">User Email</label>
                <input name="userEmail" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="password" class="form-check-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleCheck1">
            </div>
            <button name="login" type="submit" class="btn btn-primary">Register</button>
        </form>
</body>
</html>