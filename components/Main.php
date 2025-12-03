<div class="container d-flex flex-column align-items-center">
    
    <h1 class="my-2" >Strong password generator</h1>
    
    <?php if($password_length > 0) { ?>
        <div class="alert alert-success col-6 mx-auto" role="alert">
            Here it is your password: 
            <br>
            <?php echo $generated_password; ?>
        </div>
    <?php }else if(isset($_GET["password_length"])){ ?>
            <div class="alert alert-danger col-6 mx-auto" role="alert">
                Please enter a valid password length between 0 and 50
            </div>
    <?php } 
    
    include_once "./components/FormCard.php";
    
    ?>

    
</div>