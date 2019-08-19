<?php
    session_start();
    $firstname = $_SESSION['firstname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <h1>Congratulation <?php echo $firstname; ?></h1>
    </div>
    

    <a href="login.php">You have Successfully created an account!
        click here to log in.</a>
</body>
</html>