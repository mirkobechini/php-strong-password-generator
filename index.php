
<?php

$password_length=0;

if(isset($_GET["password_length"]) && is_numeric($_GET["password_length"]) && $_GET["password_length"] > 0){
    $password_length = $_GET["password_length"];
    $generated_password = generate_password($password_length);
}


function generate_password($length){
    $letters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $special_characters=['!','@','#','$','%','^','&','*','(',')','-','+','=','{','}','[',']',':',';','"',"'",'<','>','?',',','.','/','|','~','`'];

    $password = '';

    for($i=0; $i<$length; $i++){
        $charType = random_int(0,2);
        if($charType === 0){
            $password .= $letters[random_int(0, count($letters) - 1)];
        } else if($charType === 1){
            $password .= random_int(0,9);
        } else {
            $password .= $special_characters[random_int(0, count($special_characters) - 1)];
        }
    }

    return $password;
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
<header>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Password Generator</a>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="./">Home</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main -->
<main>
    <div class="container d-flex flex-column align-items-center">
    
        <h1 class="my-2" >Strong password generator</h1>
        
        <?php if($password_length > 0) { ?>
            <div class="alert alert-success col-6 mx-auto" role="alert">
                Here it is your password: 
                <br>
                <?php echo $generated_password; ?>
            </div>
        <?php } ?>

        <div class="card mb-3 col-6 mx-auto">
            <div class="card-body">
                <form action = "index.php" method="GET">
                    <div class= "mb-3 d-flex justify-content-between">
                        <label for="password_length">Inserire la lunghezza della password</label>
                        <input type="number" id="password_length" min="0" name="password_length" class="text-end" placeholder="<?php echo $password_length; ?>">
                    </div>    
                    <button type="submit" class="btn btn-primary">
                        Generate password
                    </button>
                </form>
            </div>
        </div>
    </div>

</main>

<!-- Footer -->
<footer>
    <div class="bg-dark-subtle">
            <div class="container text-white">
                <p>Esercizio di Mirko Bechini</p>
            </div>
        </div>
</footer>

</body>
</html>