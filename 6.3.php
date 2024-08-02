<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH FUNCTIONS</title>
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
    <label for = "n1">ENTER FIRST NUMBER</label>
        <input type = "text" name = "n1" placeholder = "START RANGE" required>
    <label for = "n2">ENTER SECOND NUMBER</label>
        <input type = "text" name = "n2" placeholder = "END RANGE" required>
    <label for = "num">ENTER A NUMBER</label>
        <input type = "text" name = "num" placeholder = "DECIMAL NUMBER TO CONVERT" required>
    <label for = "angle">ENTER AN ANGLE</label>
        <input type = "text" name = "angle" placeholder = "EG: 80" required>
    <br>
    <button type="submit" name="SUB">SUBMIT</button>
</form>
</body>
<?php
        if (isset($_POST['SUB'])) {
            $num1 = $_POST['n1'];$num2 = $_POST['n2'];$num = $_POST['num'];
            $angle = $_POST['angle'];
            $random_num = rand($num1, $num2);
            echo "<input type = 'text' name = 'random' value = 'RANDOM NUMBER GENERATED IS: $random_num' readonly>";
            
            $num_bin = decbin($num); $num_oct = decoct($num); $num_hex = dechex($num);
            echo "<input type = 'text' name = 'decbin' value = 'BINARY VALUE OF $num IS: $num_bin' readonly>";
            echo "<input type = 'text' name = 'decoct' value = 'OCTAL VALUE OF $num IS: $num_oct' readonly>";
            echo "<input type = 'text' name = 'dechex' value = 'HEXADECIMAL VALUE OF $num IS: $num_hex' readonly>";
           
            $angle_sin = sin($angle); $angle_cos = cos($angle); $angle_tan = tan($angle);
            echo "<input type = 'text' name = 'sin' value = 'SINE VALUE OF $angle IS: $angle_sin' readonly>";
            echo "<input type = 'text' name = 'cos' value = 'OCTAL VALUE OF $angle IS: $angle_cos' readonly>";
            echo "<input type = 'text' name = 'tan' value = 'HEXADECIMAL VALUE OF $angle IS: $angle_tan' readonly>";
        }
?>
</html>