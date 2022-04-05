<?php

    $errors = [];
    $olddata= [];
    if (empty($_POST["fname"]) or $_POST["fname"]==""){
        $errors["fname"]="First Name is required";
    }else{
        $olddata["fname"] = $_POST["fname"];
    }

    if (empty($_POST["lname"]) or $_POST["lname"]==""){
        $errors["lname"]="Last Name is required";
    }else{
        $olddata["lname"] = $_POST["lname"];
    }

    if (empty($_POST["gender"]) or $_POST["gender"]==""){
        $errors["gender"]="Gender is required";
    }else{
        $olddata["gender"] = $_POST["gender"];
    }
    if (empty($_POST["address"]) or $_POST["address"]==""){
        $errors["address"]="address is required";
    }else{
        $olddata["address"] = $_POST["address"];
    }

    if (empty($_POST["username"]) or $_POST["username"]==""){
        $errors["username"]="username is required";
    }else{
        $olddata["username"] = $_POST["username"];
    }

    if (empty($_POST["password"])){
        $errors["password"]="password is required";
    }else{
        $olddata["password"] = $_POST["password"];
    }
    if (empty($_POST["Department"]) or $_POST["Department"]==""){
        $errors["Department"]="Department is required";
    }else{
        $olddata["Department"] = $_POST["Department"];
    }


    # convert array to string
    if (count($errors)> 0){

        $err=json_encode($errors);

        if(count($olddata) > 0) {
            var_dump($olddata);
            $old = json_encode($olddata);

            header("Location:login.php?errors={$err}&olddata={$old}");
        }else {
            header("Location:login.php?errors={$err}");  # issue url --> get method
        }
    }
    else
    {
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
        
           

 header("Location:viewTable.php?id={$_GET["id"]}");
    }