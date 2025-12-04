<?php 

function generate_password(int $length, $include_numbers = true, $include_uppercase = true, $include_lowercase = true, $include_special = true):string{
    $letters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $special_characters=['!','@','#','$','%','^','&','*','(',')','-','+','=','{','}','[',']',':',';','"',"'",'<','>','?',',','.','/','|','~','`'];

    $password = '';

    for($i=0; $i<$length; $i++){
        $charType = random_int(0,2);
        if($charType === 0 && ($include_lowercase || $include_uppercase)){
            if( $include_lowercase && $include_uppercase){
                $isUppercase = random_int(0,1);
            } else if($include_uppercase){
                $isUppercase = 1;
            } else {
                $isUppercase = 0;
            }
            if($isUppercase){
                $password .= strtoupper($letters[random_int(0, count($letters) - 1)]);
            } else {
                $password .= $letters[random_int(0, count($letters) - 1)];
            }            
        } else if($charType === 1 && $include_numbers){
            $password .= random_int(0,9);
        } else if($charType === 2 && $include_special){
            $password .= $special_characters[random_int(0, count($special_characters) - 1)];
        }
    }

    return $password;
}

?>