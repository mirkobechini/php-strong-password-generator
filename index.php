<?php
require_once "./functions.php";


$password_length=0;

if(isset($_GET["password_length"]) && is_numeric($_GET["password_length"]) && $_GET["password_length"] > 0){
    $password_length = $_GET["password_length"];
    $generated_password = generate_password($password_length);
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password</title>
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
</head>
<body>
    
    <!-- Header -->
    
    <?php include_once "./components/Header.php"; ?>


<!-- Main -->
<main>
    <?php include_once "./components/Main.php"; ?>

</main>

<!-- Footer -->
<?php include_once "./components/Footer.php"; ?>

</body>
</html>