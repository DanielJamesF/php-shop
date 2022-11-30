<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id))
    header('location: login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
    if(isset($message)) {
        foreach($message as $message){
            echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
        }
    }
    ?>

    <div class="container">

    </div>
</body>
</html>
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/DanielJamesF/php-shop.git
git push -u origin main