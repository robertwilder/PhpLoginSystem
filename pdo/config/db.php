<?php

    $host = 'localhost';
    $user = 'root';
    $password ='root';
    $dbname = 'login.php';

$dsn = 'mysql:host=' . $host . '; dbname=' . $dbname;

$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);






// http://localhost:8888/phpmyadmin/
// comes with MAMP Server add on

//  the bigger the element that you choose for the database them more space it will take up on the database, pick the most appropriate 


