<?php

var_dump($_GET);


$user=file("users.txt")[$_GET["id"]];
var_dump($user);