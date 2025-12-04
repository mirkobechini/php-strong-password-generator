<div class="card mb-3 col-6 mx-auto">
    <div class="card-body">
        <form action = "result.php" method="GET">
            <div class= "mb-3 d-flex justify-content-between">
                <label for="password_length">Inserire la lunghezza della password</label>
                <input type="number" id="password_length" min="0" max="50" name="password_length" class="text-end" placeholder="<?php echo $password_length; ?>">
            </div>    
            <button type="submit" class="btn btn-primary">
                Generate password
            </button>
        </form>
    </div>
</div>