<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES CALCULATOR</title>
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
            align-items: center;
        }

        button {
            display: inline-block;
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
    $ans = " ";
    if (isset($_POST['submit'])){
        $amt =$_POST['amt'];
        function countnotes($amt){
            $var = 1;
            while ($var != 0){
                if ($amt >= 100){
                    $temp = 100;
                }
                else if ($amt >= 50){
                    $temp = 50;
                }
                else if ($amt >= 20){
                    $temp = 20;
                }
                else if ($amt >= 10){
                    $temp = 10;
                }
                else if ($amt >= 5){
                    $temp = 5;
                }
                else if ($amt >= 2){
                    $temp = 2;
                }
                else if ($amt >= 1){
                    $temp = 1;
                }
                else{
                    $ans .= $amt;
                }

                $amount = $amt/$temp;
                $notes = floor(floatval($amount));
                echo " USE OF $temp NOTES: $notes";
                $amt = fmod($amt , $temp);
                if ($amt == 0){
                    $var = 0;
                }
            }
        }
        countnotes($amt);
    }
?>
</head>
<body>

<form action = "" method = "POST">
    <div class="container">
        <label for = "amt">ENTER THE AMOUNT:</label>
        <input type = "text" name = "amt" placeholder = "1310" required>
        <button type="submit" name="submit">SUBMIT</button> 
    </div>
</form>
</body>
</html>