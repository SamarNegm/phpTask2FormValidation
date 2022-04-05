<?php



$file = fopen("users.txt", "a+");
$user=file("users.txt")[$_GET["id"]];
$dir="users.txt";
$contents = file_get_contents($dir);
$contents = str_replace($user, '', $contents);
file_put_contents($dir, $contents);
fclose($file);