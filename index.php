<?php

include ('connection.php');
if(isset($_GET['submit'])){
    $username = $_GET['username'];
    $fullname = $_GET['full_name'];
    $gender = $_GET['gender'];
    $dateofbirth = $_GET['dateofbirth'];
    $nationality= $_GET['nationality'];
    $password = $_GET['password'];
    $error = "";

    if(empty($username) || empty($full_name) || empty($gender)  || empty($dateofbirth)  || empty($nationality)  || empty($password)){
        $error = "FILL ALL FIELDS";
    }else{
        $query = "INSERT INTO users (username, full_name, gender, dateofbirth, nationality, password) VALUES (
                '$username',
                '$full_name',
                '$gender',
                '$dateofbirth',
                '$nationality',
                '$password'

        )";
        if(mysqli_query($connection, $query)){
            $message = "DATA SUCCESSFULLY INSERTED!";

        }else{
            $error = "THERE WAS AN ERROR";
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>INSERT DATA INTO DATABASE</title>
        <style type="text/css">
            body{
                width: 900px;
                margin: auto;
            }
            .form input[type="text"], .form select, .form input[type="password"],
            .form input[type="date"]{
                width: 850%;
                padding: 10px;
                margin-bottom: 10px;
            }

            button{
                padding: 10px;
                background: darkblue;
                border:2px solid;
                cursor: pointer;
                color: white;

            }

            button:hover{
             
            opacity: 0.7;

            }



        </style>
    </head>
    <body>
        <h1><U>REGISTER</U></h1>
        <form method="GET" class="form">
            <label for="username"> username</label>
         <input type="text" name="username"><br>
         <label for="fullname">full_name</label>
         <input type="text" name="full_name"><br>
         <lab.form input[type="text"], .form select, .form input[type="password"],
                     .form input[type="date"] {
                         width: 80%;
                         padding: 10px;
                         margin-bottom: 10px;
                     };el for="gender">gender</label>
         <input type="radio" name="gender" value="M">Male
         <input type="radio" name="gender" value="F">Female<br><br>
         <label for="date of birth">date of birth</label>
         <input type="date" name="dateofbirth"><br>
         <label for="phone number">phone number</label>
         <input type="text" name="phone_number"><br>
         <label for="nationality">nationality</label>
         <select name="nationality" required>
            <option value="">--- select Nationality---</option>
            <option>Tanzania</option>
            <option>Kenya</option>
            <option>Uganda</option>
                </select><br>
                <label for="password">password</label>
                <input type="password" name="password"><br>
                <button name="submit">REGISTER</button>
        </form>

        <?php
        if(!empty($error)){
            echo ' <div class = "error">
            <h2>
                ' .$error . '

            </h2>
            </div>';
        }if(!empty($message)){
            echo ' <div class = "message">
            <h2>
                ' .$error . '

            </h2>
            </div>';
        }
        ?>
        <body>

</html>