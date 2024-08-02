<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLE INHERITANCE</title>
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
            text-align: center;
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
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            interface A{
                function setUser($user);
            }
            interface B{
                function getUser();
            }
            class Userinfo implements A,B{
                public $user;
                function setUser($user){
                    $this->user = $user;
                }
                function getUser(){
                    echo $this->user;
                }
            }
            $use = new Userinfo();
            $user = $_POST["userName"];
            $use->setUser($user);
        }
    ?>
<div class="container">
        <h1>Multiple Inheritance</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="ans">Enter a Name :</label>
                <input type="text" name="userName" required><br><br>
                <button type="submit">Submit</button><br><br>
                <label for="ans">Displaying User Name using Child Class Object :</label>
                <input type="text" name="displayUser" value="<?php $use->getUser(); ?>" readonly>
            </div>
        </form>
</body>
</html> 