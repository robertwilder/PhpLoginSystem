<?php 

// traversy Media - good series to learn php

    if( isset( $_POST['userName']) && isset($_POST['userEmail'])){
    $name = htmlentities( $_POST['userName']);
    $email = htmlentities( $_POST['userEmail']);
    // this validates to make sure input is set as HTML
        echo "$name <br/> $email";

    if(filter_input(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL)){
        $email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
        // filters to see if it is a valid email. back end validation ]

        echo $email;

    }
    }

?>


<?php require "partials/header.php";?>
<?php require "partials/nav.php";?>



    <div>
        <H1>Welcome to the home page</H1>


        <form action="index.php" method="post"> <br />
            <label for="userName">User Name</label>
            <input type="text" name="userName"> <br />


            <label for="userEmail">User Email</label>
            <input type="email" name="userEmail"> <br />
            <button type="submit">Submit</button>
        </form>
    </div>
<?php require "partials/footer.php";?>