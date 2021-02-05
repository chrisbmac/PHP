<?php 
    function salthash(){
        $password = 'password';
        $hashed = password_hash($password, PASSWORD_DEFAULT, array('cost' => 9));
        /*echo "this is hashed" . $hashed;
        $auth = password_verify($password, $hashed);
        echo "this is auth" . $auth;*/
    }