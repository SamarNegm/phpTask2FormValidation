<?php
        $fname=null;
        $lname=null;
        $gender=null;
        $address=null;
        $username=null;
        $password=null;
        $department=null;
        $id=null;

//    var_dump($_GET);
    if (isset($_GET["errors"])){
        $errors = json_decode($_GET["errors"]);
//        var_dump($errors);  # object
    }
    if (isset($_GET["olddata"])){
        $olddata = json_decode($_GET["olddata"]);
//        var_dump($olddata);  # object
    }
    if (isset($_GET["id"])){
        $id=$_GET["id"];
        echo $id;
        echo "editting";
        $user=file("users.txt")[$_GET["id"]];
        echo "user>>".$user ;
        $line = explode(":", $user);
        echo "/nuserName>>".$line[0] ;
        $fname=$line[0];
        $lname=$line[1];
        $gender=$line[2];
        $address=$line[3];
        $username=$line[4];
        $password=$line[5];
        $department=$line[6];
    }

?>





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
    <div class="container"  class="form-group" style="width: 500px ; border-radius: 30px; shadow: 2px">
    <h1 style="text-align:center;">   Data</h1>

    <!-- <?php
        ($fname)?'edit.php':'validationDemo.php';
        ?> -->
        <form method="post"  class="row g-3 needs-validation" action="validationDemo.php?id=<?php echo $id ?>">
        <table >
                <tr>
                    <td>
                        <label for="">First Name</label>
                    </td>
                    <td><input type="text" class="form-control" name="fname"  
                    value="<?php
                     if(isset($olddata->fname)) 
                     {echo $olddata->fname;}
                     if($fname)
                     {
                         echo $fname;
                     }
                     
                     
                     ?>"></td>
                
                </tr>
                <tr>
                    <td></td>
                <td>
                        <?php
                            if(isset($errors->fname)){
                                echo "<p style='color: red'> $errors->fname</p>";
                            }
                            
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Last Name</label>
                    </td>
                    <td><input class="form-control" type="text" name="lname" 
                    value="<?php 
                    if(isset($olddata->lname)) {
                        echo $olddata->lname;
                    } 
                    if($lname)
                    {
                        echo $lname;
                    }
                        
                        ?>"></td>
                  
                </tr>
                <tr>
                    <td></td>
               
                    <td>
                        <?php
                            if(isset($errors->lname)){
                                echo "<p style='color: red'> $errors->lname</p>";
                            }
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">description</label>
                    </td>
                    <td>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <label for="">Gender</label>
                    </td>
                    <td>
                    <div class="form-check">
                            <input class="form-check-input" type="radio"
                             name="gender" 
                             value="femail" id="flexRadioDefault1"
                     
                             
                             >
                            <label class="form-check-label" for="gender">
                            Femail
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio"
                             name="gender" value="male" 
                             id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="gender">
                            Male
                            </label>
                            </div>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    
                <td>
                        <?php
                            if(isset($errors->gender)){
                                echo "<p style='color: red'> $errors->gender</p>";
                            }
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Egypt">Country</label>
                    </td>
                    <td>
    
    
                        <select  class="form-select" name="address" id="Egypt">
                            <option value="Egypt">Egypt</option>
                            <option value="Us">Us</option>
                            <option value="UK">UK</option>
                            <option value="Sudan">Sudan</option>
                        </select>
                    </td>
               
                </tr>
                <tr>
                    <td></td>
                <td>
                        <?php
                            if(isset($errors->address)){
                                echo "<p style='color: red'> $errors->address</p>";
                            }
                        ?>
    
                    </td>
                </tr>
 
                <tr>
                    <td>
                        <label for="">UserName</label>
                    </td>
                    <td><input class="form-control" type="text" name="username" 
                     value="<?php 
                     if(isset($olddata->username))
                      {echo $olddata->username;} 
                      if($username)
                      {
                          echo $username;
                      }
                      
                      ?>"></td>
                
                </tr>
                <tr>
                    <td></td>
                <td>
                        <?php
                            if(isset($errors->username)){
                                echo "<p style='color: red'> $errors->username</p>";
                            }
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td><input type="text" class="form-control" name="password" 
                     value="<?php 
                     if(isset($olddata->password))
                      {
                          echo $olddata->password;
                      }
                      if($password)
                      {
                          echo $password;
                      }
                       ?>"></td>
            
                </tr>
                <tr>
                    <td></td>
                <td>
                        <?php
                            if(isset($errors->password)){
                                echo "<p style='color: red'> $errors->password</p>";
                            }
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Department">Department</label>
                    </td>
                    <td><input class="form-control" type="text" name="Department" 
                    value="<?php 
                    if(isset($olddata->Department))
                     {echo $olddata->Department;}
                     if($department)
                     {
                         echo $department;
                     }

                     
                     ?>"></td>
               
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                            if(isset($errors->Department)){
                                echo "<p style='color: red'> $errors->Department</p>";
                            }
                        ?>
    
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <label for="">12344</label>
                    </td>
    
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" class="form-control">
                        <label for="">
                            Please enter the text
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Skills</label>
                    </td>
                    <td>
                  
    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="s1" value="c++" id="c++">
                            <label class="form-check-label" for="flexCheckDefault">
                            C++
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="s2" value="java" id="java" checked > 
                            <label class="form-check-label" for="flexCheckChecked">
                            Java
                            </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                        <input type="submit" class="btn" style="background-color: #CDB699;margin: 20px; ;color: #FFFFFF">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>

                        <input type="reset" class="btn" style="background-color: #BB6464 ;color: #FFFFFF">
                    </td>
                </tr>
            </table>
        </form>
    </div>
                  
</body>
</html>