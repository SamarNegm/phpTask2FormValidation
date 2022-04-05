<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body >
    <h1 style="text-align: center;color:#C3DBD9;padding: 30px;">Your Data </h1>
<div class="col-9" style="margin:auto;">

<?php
       
          
       $users = file("users.txt");
       
       //foreach ($users as $i=>$l){
       //    var_dump($i, $l);
       //}
       echo "<table border='2px' class='table table-striped' >
               <th>FirstName</th> <th>LastName</th>  <th>View</th> <th>Edit</th> <th>delete</th>";
       foreach ($users as $index=>$l){  # $l --> line ===> is string
           $line = explode(":", $l); # convert the string to array
       
           echo "<tr>";
           echo "<td>{$line[0]}</td> <td>{$line[1]}</td>
                <td><a href='./viewuser.php?id={$index}'> View</a></td>
                <td><a href='./login.php?id={$index}'> Edit</a></td>
                <td><a href='./delete.php?id={$index}'> delete</a></td>
                ";
               
           echo "</tr>";
       }
       echo "</table>";
?>
</div>
       </body>
</html>