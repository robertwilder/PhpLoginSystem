<?php


session_start();

if (isset($_SESSION['userId'])) {
    //echo "There is a session variable <br>";
    require('./config/db.php');
    $userId = $_SESSION['userId'];

    $stmt = $pdo->prepare('SELECT * from users WHERE id = ?');
    $stmt->execute([$userId]);
    $user = $stmt->fetch();
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
            <?php if(isset($user)){ ?>
                    <?php if($user->userRole == "admin") { ?>
                    <li><a href="admin.php">Admin Dash</a></li>
            <?php } ?>
                    <li><a href="dashboard.php">dashboard</a></li>
                    <li><a href="logout.php">logout</a></li>
            <?php }  else { ?>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
            <?php } ?>
        </ul>
    </nav>
<?php if(isset($user)){ ?>
    <h1>Hello <?php echo $user->userName ?> </h1>
<?php } else { ?>
    <h1>Hello Guest</h1>
<?php } ?>


    <ul>
         <?php foreach($users as $user){?>
           
            <li>The User has the name of : <?php echo $user->userName ?></li>
            <li>The Users email is: <?php echo $user->userEmail ?></li>
            <li>The Password is : <?php echo $user->userPassword ?></li>
            <li>Security Clearance : <?php echo $user->userRole ?></li>

         <?php } ?>
    </ul>




</body>
</html>


