<?php

// session_start();
        
// if(isset($_SESSION['userId'])){
        
//         require('./config/db.php');

//         $userId = $_SESSION['userId'];
//         $stmt = $pdo->prepare('SELECT * from users WHERE id = ?');
//         $stmt->execute([$userId]);
//         $user = $stmt->fetch();

//         if($user->userRole == "admin"){
//                 $admin = true;
//                 $stmt  = $pdo->prepare('SELECT userName from user');
//                 $stmt->execute();
//                 $users = $stmt->fetchALL();
//         }
//         else {
//             header('Location: http://localhost:8888/pdo/index.php');
//         }


//     } else {
//     header('Location: http://localhost:8888/pdo/index.php');
//     }

session_start();

if (isset($_SESSION['userId'])) {
    //echo "There is a session variable <br>";
    require('./config/db.php');

    $userId = $_SESSION['userId'];
    $stmt = $pdo->prepare('SELECT * from users WHERE id = ?');
    $stmt->execute([$userId]);
    $users = $stmt->fetch();

    if($user->userRole == "admin") {
        $admin = true;

        $userId = $_SESSION['userId'];
        $stmt = $pdo->prepare('SELECT userName from users');
        $stmt->execute();
        $users = $stmt->fetchAll();

    } else {
        header('Location: http://localhost:8888/pdo/index.php');
    }

} else {
    header('Location: http://localhost:8888/pdo/index.php');
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

        <?php if($admin){ ?>
            <?php foreach($users as $user){ ?>
                <h1><?php echo $user->userName; ?></h1>
        <?php } ?>
        <?php } ?>
    
</body>
</html>