<?php 

function generate_password(int $length, array $character_types = ['numbers' => true, 'uppercase' => true, 'lowercase' => true, 'special' => true]):string{
    $letters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $special_characters=['!','@','#','$','%','^','&','*','(',')','-','+','=','{','}','[',']',':',';','"',"'",'<','>','?',',','.','/','|','~','`'];

    $password = '';

    while(strlen($password) < $length){
        $charType = random_int(0,2);
        if($charType === 0 && ($character_types['lowercase'] || $character_types['uppercase'])){
            if( $character_types['lowercase'] && $character_types['uppercase']){
                $isUppercase = random_int(0,1);
            } else if($character_types['uppercase']){
                $isUppercase = 1;
            } else {
                $isUppercase = 0;
            }
            if($isUppercase){
                $password .= strtoupper($letters[random_int(0, count($letters) - 1)]);
            } else {
                $password .= $letters[random_int(0, count($letters) - 1)];
            }            
        } else if($charType === 1 && $character_types['numbers']){
            $password .= random_int(0,9);
        } else if($charType === 2 && $character_types['special']){
            $password .= $special_characters[random_int(0, count($special_characters) - 1)];
        }
    }

    return $password;
}



function validateForm($length, array $character_types): bool{
    if(!is_numeric($length) || $length <= 0 || $length > 50){
        return false;
    }

    if(!$character_types['numbers'] && !$character_types['uppercase'] && !$character_types['lowercase'] && !$character_types['special']){
        return false;
    }

    return true;
}

?>