<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE - 01</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            border: 2px solid white;
            border-radius: 10px;
            width: 60%;
        }

        form {
            display: inline-block;
            margin: 0 auto;
            background-color: #333;
            border-radius: 5px;
            width: 60%;
            padding: 20px;
        }

       label {
            display: block;
            text-align: center;
            font-size: 20px;
            font-weight: bolder;    
            background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            -webkit-background-clip: text;
            color: transparent;
        }

        input {
            border: solid black;
            border-radius: 5px;
            margin: 10px 0;
            width: 50%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        button {
            margin: 20px auto;
            border-radius: 10px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
        }

        button:hover {
            background-color: skyblue;
            color: black;
            border-radius: 20px;
            transition: border-radius 1.5s ease;
            transition: background-color 1.5s ease;
        }
        th{
            text-align: center;
            font-size: 18px;
            align-items: center;
        }
    </style>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "70_1";
        $demo = " ";
        $conn = new mysqli($servername,$username, $password ,$dbname);
        if ($conn->connect_error){ 
            die("CONNECTION FAILED: " . $conn->connect_error);
        }
        if(isset($_POST['SUB'])){
            $en_num = $_POST['en_num'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $mobile = $_POST['mobile'];

            $insert = "INSERT INTO STUDENT VALUES('$en_num', '$name', '$age', '$mobile')";
            if ($conn->query($insert) === TRUE) {
                $demo = "RECORD INSERTED...";
            } else {
                echo "ERROR: " . $insert . "<br>" . $conn->error;
            }
        }
    ?>
</head>
<body>
<form action "#" method = "POST">
<div class="container">
    <label for = "en_num">ENTER YOUR ENROLLMENT NUMBER</label>
        <input type = "number" name = "en_num" required>

    <label for = "name">ENTER YOUR NAME</label>    
        <input type = "text" name = "name" required>

    <label for = "age">ENTER YOUR AGE</label>
        <input type = "number" name = "age" required>

    <label for = "mobile">ENTER YOUR MOBILE NUMBER</label>
        <input type = "number" name = "mobile" required>
        <br><br>
        <button type = "submit" name = "SUB">SUBMIT</button>
</div>
<div class="container">
    <input type = "text" name = "age" value = "<?php print $demo?>" readonly>
</div>
</form>
</body>
</html>