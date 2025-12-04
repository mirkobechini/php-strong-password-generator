<div class="card mb-3 col-6 mx-auto">
    <div class="card-body">
        <form action = "index.php" method="GET">
            <div class= "mb-3 d-flex justify-content-between">
                <label for="password_length">Inserire la lunghezza della password</label>
                <input type="number" id="password_length" min="0" max="50" name="password_length" class="text-end" required placeholder="<?php echo $password_length; ?>">
            </div>    
            <div class= "mb-3 d-flex justify-content-between align-items-start">
                <label for="characters_type" class="form-label">Tipologia di caratteri</label>
                <div id="characters_type" style="width: 50%;">
                    <div class="row row-cols-2 g-2">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="numbers" value="1" id="numbers" checked/>
                                <label class="form-check-label" for="numbers"> Numeri </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uppercase" value="1" id="uppercase" checked/>
                                <label class="form-check-label" for="uppercase"> Lettere maiuscole </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="lowercase" value="1" id="lowercase" checked/>
                                <label class="form-check-label" for="lowercase"> Lettere minuscole </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="special" value="1" id="special" checked/>
                                <label class="form-check-label" for="special"> Caratteri speciali </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>   
            <button type="submit" class="btn btn-primary">
                Generate password
            </button>
        </form>
    </div>
</div>