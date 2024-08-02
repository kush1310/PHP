<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR COMPANY FINDER</title>
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
<?php
    if (isset($_POST['car_name'])) {
        $comp = "";
        $name = strtoupper($_POST['car_name']);
        $name = $_POST['car_name'];

        if($name == "SAFARI" || $name == "NEXON" || $name == "TIGOR" || $name == "TIAGO") {
            $comp = "TATA";
        } else if($name == "XUV700" || $name == "XUV300" || $name == "BOLERO") {
            $comp = "MAHINDRA";
        } else if($name == "I20" || $name == "VERNA" || $name == "VENUE" || $name == "CRETA") {
            $comp = "HYUNDAI";
        } else if($name == "SWIFT" || $name == "ALTO" || $name == "BOLENO" || $name == "BREZZA") {
            $comp = "SUZUKI";
        } else {
            $comp = "SORRY! NO DATA FOUND...";
        }
    }
?>
</head>
<body>
<form action = "" method = "POST">
    <div class="container">
        <label for="car">ENTER THE CAR NAME:</label>
        <input type="text" name="car_name" placeholder="EG: MERCEDES" required> 
        <button type="submit" name="SUB">SUBMIT</button>
        <label for="comp_name">COMPANY NAME:</label>
        <input type="text" name="res" placeholder="COMPANY NAME" value="<?php echo isset($comp) ? $comp : ''; ?>" readonly>    
    </div>
</body>
</html>