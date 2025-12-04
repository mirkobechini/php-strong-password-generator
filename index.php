<?php
require_once "./functions.php";

session_start();

$password_length=0;



if(isset($_GET["password_length"]) && (isset($_GET["numbers"]) || isset($_GET["uppercase"]) || isset($_GET["lowercase"]) || isset($_GET["special"]))){
    $password_length = $_GET["password_length"];
    $character_types = [
        'numbers' => isset($_GET["numbers"]),
        'uppercase' => isset($_GET["uppercase"]),
        'lowercase' => isset($_GET["lowercase"]),
        'special' => isset($_GET["special"])
    ];
    
    if(validateForm($password_length, $character_types)){
        $_SESSION['password'] = generate_password($password_length, $character_types);
        header('Location: ./result.php');
        exit;
    }else{
        header('Location: ./index.php');
        exit;
    }
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