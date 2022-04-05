<?php


$user = implode(":",$_POST);
var_dump($user);

# file handle

try{
    $userfile =fopen("users.txt", "a");
    fwrite($userfile, $user.PHP_EOL);

    fclose($userfile);

}catch (Exception $e){
    echo $e->getMessage();
}