<?php
//    var_dump($_GET);
    if (isset($_GET["errors"])){
        $errors = json_decode($_GET["errors"]);
//        var_dump($errors);  # object
    }
    if (isset($_GET["olddata"])){
        $olddata = json_decode($_GET["olddata"]);
//        var_dump($olddata);  # object
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="validationDemo.php">
    <table>
            <tr>
                <td>
                    <label for="">First Name</label>
                </td>
                <td><input type="text" name="fname"  value="<?php if(isset($olddata->fname)) {echo $olddata->fname;} ?>"></td>
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
                <td><input type="text" name="lname" value="<?php if(isset($olddata->lname)) {echo $olddata->lname;} ?>"></td>
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
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Gender</label>
                </td>
                <td>
                    <label for="">Femail</label><input type="radio" value="female" name="gender"></input>
                    <label for="">male</label><input type="radio" value="male" name="gender"></input>
                </td>
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


                    <select name="address" id="Egypt">
                        <option value="Egypt">Egypt</option>
                        <option value="Us">Us</option>
                        <option value="UK">UK</option>
                        <option value="Sudan">Sudan</option>
                    </select>
                </td>
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
                    <label for="">Skills</label>
                </td>
                <td>
                    <label for="c++">C++</label> <input type="checkbox" name="s1" value="c++" id="c++">
                    <label for="java">Java</label> <input type="checkbox" name="s2" value="java" id="java">
                    <br>
                    <label for="python">Python</label> <input type="checkbox" name="s3" value="python" id="python">
                    <label for="mysql">MySQL</label> <input type="checkbox" name="s4" value="mysql" id="mysql">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="">UserName</label>
                </td>
                <td><input type="text" name="username"  value="<?php if(isset($olddata->username)) {echo $olddata->username;} ?>"></td>
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
                <td><input type="text" name="password"  value="<?php if(isset($olddata->password)) {echo $olddata->password;} ?>"></td>
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
                <td><input type="text" name="Department" value="<?php if(isset($olddata->Department)) {echo $olddata->Department;} ?>"></td>
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
                    <input type="text">
                    <label for="">
                        Please enter the text
                    </label>
                </td>
            </tr>
        </table>
        <input type="submit">
        <input type="reset">
    </form>

</body>
</html>