<?php
require_once "./functions.php";

session_start();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generated password</title>
        
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
    <div class="container d-flex flex-column align-items-center">
        
        <h1 class="my-2" >Strong password generator</h1>
            <div class="alert alert-success col-6 mx-auto" role="alert">
                Here it is your password: 
                <br>
                <?php echo $_SESSION['password']; ?>
            </div>
    </div>
</main>

<!-- Footer -->
<?php include_once "./components/Footer.php"; ?>

</body>
</html>