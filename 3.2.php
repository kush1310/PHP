<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALARY CALCULATOR</title>
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
    if (isset($_POST['SUB'])) {
        $bs = $_POST['BS'];
        $da = $hra = $med = $gs = $in = $pf = $ded = $fs = '';
        $da = $bs * 0.50;
        $hra = $bs * 0.10;
        $med = $bs * 0.04;

        $gs = $bs + $da + $hra + $med;

        $in = $gs * 0.07;
        $pf = $gs * 0.05;

        $ded = $in + $pf;
        $fs = $gs - $ded;
    }
    ?>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="age">BASIC SALARY (IN RUPEES):</label>
            <input type="text" name="BS" placeholder="BASIC SALARY" value="<?php echo isset($bs) ? $bs : ''; ?>" required>
            <button type="submit" name="SUB">CALCULATE</button>
</form>
</div>
    <div class="container">
            <label for="age">DEARNESS ALLOWANCE (IN RUPEES):</label>
            <input type="text" name="DA" placeholder="DEARNESS ALLOWANCE" value="<?php echo isset($da) ? $da : ''; ?>" required>
            <label for="hra">HOUSE RENT ALLOWANCE (IN RUPEES):</label>
            <input type="text" name="HRA" placeholder="HOUESE RENT ALLOWANCE" value="<?php echo isset($hra) ? $hra : ''; ?>" required>
            <label for="med">MEDICAL ALLOWANCE (IN RUPEES):</label>
            <input type="text" name="MED" placeholder="MEDICAL ALLOWANCE" value="<?php echo isset($med) ? $med : ''; ?>" required>
            <label for="ins">INSURANCE (IN RUPEES):</label>
            <input type="text" name="IN" placeholder="INSURANCE" value="<?php echo isset($in) ? $in : ''; ?>" required>
            <label for="pf">PROVIDENT FUND (IN RUPEES):</label>
            <input type="text" name="PF" placeholder="PROVIDENT FUND" value="<?php echo isset($pf) ? $pf : ''; ?>" required>
            <label for="ded">DEDUCTION AMOUNT (IN RUPEES):</label>
            <input type="text" name="DED" placeholder="DEDUCTION AMOUNT" value="<?php echo isset($ded) ? $ded : ''; ?>" required>
            <label for="fs">NET SALARY (IN RUPEES):</label>
            <input type="text" name="FS" placeholder="FINAL SALARY" value="<?php echo isset($fs) ? $fs : ''; ?>" required>
    </div>
</body>
</html>