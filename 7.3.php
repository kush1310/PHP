<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINGLE INHERITANCE</title>
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
</head>
<body>
<form action = "" method = "POST">
<div class="container">
    <input type = "text" name = "msg" value = "SINGLE INHERITANCE" readonly>
</div>
<div class="container">
    <label for = "num1">ENTER FIRST NUMBER</label>
        <input type = "number" name = "num1" required>

    <label for = "num2">ENTER SECOND NUMBER</label>
        <input type = "number" name = "num2" required><br>

    <button type = "submit" name = "submit">SUBMIT</button><br>

    <?php
        if(isset($_POST['submit'])){
            class base{
                public $num1;
                public $num2;

                function __construct($num1, $num2){
                    $this->num1 = $num1;
                    $this->num2 = $num2;
                }

                function add(){
                    $ans1 = $this->num1 + $this->num2;
                    echo "ADDITION: " . $ans1;
                }
            }

            class child extends base{
                function sub(){
                    $ans2 = $this->num1 - $this->num2;
                    echo "SUBTRACTION: " . $ans2;
                }
            }

            $ob = new child($_POST['num1'], $_POST['num2']);
        }
    ?>
            <input type = 'text' value = '<?php $ob->add();?>' readonly>
            <input type = 'text' value = '<?php $ob->sub();?>' readonly>
</div>
</form>
</body>
</html>