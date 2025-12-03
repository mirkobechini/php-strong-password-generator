<?php 

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