<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIBONACCI CREATOR</title>
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
    $series = "";
    $result  = 0;
    if (isset($_POST['size'])) {
        $a = 0;
        $b = 1;
        $fibo = $_POST['size'];
        for($i = 0 ; $i <= $fibo ; $i++){
            $series .= $a . " ";
            $result = $a + $b;
            $a = $b;
            $b= $result;
        }
    }
        ?>
</head>
<body>
<form action = '' method = 'POST'>
    <div class="container">
        <label for = "size">ENTER THE NUMBER UPTO WHICH YOU WANT TO GENERATE FIBONACCI SERIES</label>
        <input type = "number" name = "size" placeholder = " EG:- 10">
        <button type="submit" name="SUB">SUBMIT</button>
    </div>
    <div class="container">
        <label for = "size">RESULT</label>
        <input type = "text" name = "res" readonly value = "<?php echo $series?>" placeholder = "RESULT">
    </div>
</form>
</body>
</html>