<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MORSE CODE GENERATOR</title>
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
    $series = " ";
    if (isset($_POST['submit'])) 
    {
        $string = $_POST["string"];
        $string_main = strtolower($string);
       
        $array1 = array(
            "a"=>".-", 
            "b"=>"-...", 
            "c"=>"-.-.", 
            "d"=>"-..", 
            "e"=>".", 
            "f"=>"..-.", 
            "g"=>"--.", 
            "h"=>"....", 
            "i"=>"..", 
            "j"=>".---", 
            "k"=>"-.-", 
            "l"=>".-..", 
            "m"=>"--", 
            "n"=>"-.", 
            "o"=>"---", 
            "p"=>".--.", 
            "q"=>"--.-", 
            "r"=>".-.", 
            "s"=>"...", 
            "t"=>"-", 
            "u"=>"..-", 
            "v"=>"...-", 
            "w"=>".--", 
            "x"=>"-..-", 
            "y"=>"-.--", 
            "z"=>"--..", 
            "0"=>"-----",
            "1"=>".----", 
            "2"=>"..---", 
            "3"=>"...--", 
            "4"=>"....-", 
            "5"=>".....", 
            "6"=>"-....", 
            "7"=>"--...",
            "8"=>"---..", 
            "9"=>"----.",
            "."=>".-.-.-",
            ","=>"--..--",
            "?"=>"..--..",
            "/"=>"-..-.",
            " "=>" ");
            for($i=0;$i<strlen($string_main);$i++)
            {
                foreach($array1 as $letter => $code)
                {
                    if($letter == $string_main[$i])
                    {
                        $series .= "$code";
                    }
                }
            }
    }
?>
</head>
<body>
<form action = "" method = "POST">
<div class="container">
    <label for = "string">ENTER THE STRING WHICH IS TO BE CONVERTED TO MORSE CODE:</label>
    <input type = "text" name = "string" placeholder = "MISSION AI1" required>
    <button type="submit" name="submit">SUBMIT</button>
</div>
<div class="container">
    <label for = "res">(MORSE CODE)</label>
    <input type = "text" value = "<?php echo $series?>" placeholder = "RESULT" readonly>
</div>
</form>
</body>
</html>