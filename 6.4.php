<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE FUNCTIONS</title>
</head>
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
<body>
<div class="container">
        <h2>DATE TIME FUNCTIONS</h2>
</div>
<?php
    $time = new DateTime();
    $format_1 = $time->format('Y-m-d H:i:s');
    $format_2 = $time->format('d-m-y');
    $format_3 = $time->format('l, F j, Y g:i A');
    $format_4 = $time->format('Y-m-d');
    $format_5 = $time->format('d-D-M-y');
    echo "<input type = 'text' value = 'DEFAULT FORMAT: $format_1' readonly>";
    echo "<input type = 'text' value = 'CUSTOM FORMAT 1: $format_2' readonly>";
    echo "<input type = 'text' value = 'CUSTOM FORMAT 2: $format_3' readonly>";
    echo "<input type = 'text' value = 'CUSTOM FORMAT 3: $format_4' readonly>";
    echo "<input type = 'text' value = 'CUSTOM FORMAT 4: $format_5' readonly>";
?>
</body>
</html>