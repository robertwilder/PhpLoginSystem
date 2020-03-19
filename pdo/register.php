<?php
require('./config/db.php');

if (isset($_POST['register'])) {
    require('./config/db.php');
    $name = $_POST['userName'];
    // echo "Name: $name <br>";

    $email = $_POST['userEmail'];
    // echo "Email: $email <br>";

    $password = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);
    // echo "Password: $password <br>";

    $stmt = $pdo->prepare('SELECT * from users WHERE userEmail = ?');
    $stmt->execute([$email]);
    $totalUsers = $stmt->rowCount();
    // echo "$totalUsers emails in the database <br>";

    if ($totalUsers > 0) {
        echo "Email already taken <br>";
    } else {

        $sql = 'INSERT into user(userName, userEmail, userPassword) VALUES(?,?,?)'; //positional parameters to prevent hackers
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $password]);
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




        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="userName">User Name</label>
                <input required name="userName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="userEmail">User Email</label>
                <input name="userEmail" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="userPassword" class="form-check-label">Password</label>
                <input name="userPassword" type="password" class="form-control" id="exampleCheck1">
            </div>
            <button name="register" type="submit" class="btn btn-primary">Register</button>
        </form>
</body>
</html>