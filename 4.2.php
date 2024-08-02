<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTU GRADE CALCULATOR</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            display: block;
            text-align: center;
            font-size: 28px;
            font-weight: bolder;    
            background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            -webkit-background-clip: text;
            color: transparent;
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

        if() 
        {
            $comp = "TATA";
        } 
        else if() 
        {
            $comp = "MAHINDRA";
        } 
        else if() 
        {
            $comp = "HYUNDAI";
        } 
        else if() 
        {
            $comp = "SUZUKI";
        } 
        else 
        {
            $comp = "SORRY! NO DATA FOUND...";
        }
    }
?>
</head>
<body>
<form action = "" method = "POST">
    <div class="container">
        <h2>GTU GRADE CALCULATOR</h2>
        <label for="car">ENTER THE MARKS OF SUBJECT - 1:</label>
        <input type="number" name="sub1" placeholder="MAX: 100" required> 

        <label for="car">ENTER THE MARKS OF SUBJECT - 2:</label>
        <input type="number" name="sub2" placeholder="MAX: 100" required> 

        <label for="car">ENTER THE MARKS OF SUBJECT - 3:</label>
        <input type="number" name="sub3" placeholder="MAX: 100" required> 

        <label for="car">ENTER THE MARKS OF SUBJECT - 4:</label>
        <input type="number" name="sub4" placeholder="MAX: 100" required> 

        <button type="submit" name="SUB">SUBMIT</button>
        <label for="comp_name">COMPANY NAME:</label>
        <input type="text" name="res" placeholder="COMPANY NAME" value="<?php echo isset($comp) ? $comp : ''; ?>" readonly>    
    </div>
</body>
</html>