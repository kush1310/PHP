<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING FUNCTIONS</title>
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
    </style>
</head>
<body>
<form action = "" method = "POST">
    <div class="container">
        <label for = "string">ENTER A STRING</label>
        <input type = "text" name = "string" placeholder = " EG: KUSH SHAH" required>
        <button type="submit" name="SUB">SUBMIT</button>
    </div>
</form>
</body>
<?php
    $string_low = " ";
    $string_rev = " ";
    $string_trimmed = " ";
    $string_before = "HELLO WORLD!";
    $string_after = " ";
    if (isset($_POST['string'])) {
        $string = $_POST['string'];
        $string_low = strtolower($string);
        $string_rev = strrev($string);
        $string_trimmed = trim($string);
        $string_after = str_replace("WORLD" , "KUSH" , "HELLO WORLD!");
        echo "<input type = 'text' name = 'org' value = 'ORIGINAL STRING IS: $string' readonly>";
        if($string == $string_low){
            echo "<input type = 'text' name = 'lower' value = 'THE STRING IS IN LOWERCASE.' readonly>";
        }else{
            echo "<input type = 'text' name = 'lower_not' value = 'THE STRING IS NOT IN LOWERCASE.' readonly>";
        }
        echo "<input type = 'text' name = 'reversed' value = 'THE REVERSED STRING IS: $string_rev' readonly>";
        echo "<input type = 'text' name = 'trimmed' value = 'STRING AFTER REMOVING WHITESPACES IS: $string_trimmed' readonly>";
        echo "<input type = 'text' name = 'before' value = 'STRING TO REPLACE: $string_before' readonly>";
        echo "<input type = 'text' name = 'after' value = 'REPLACED STRING IS: $string_after' readonly>";

    }
?>
</html>