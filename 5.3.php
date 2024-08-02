<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 X 3 MATRIX MULTIPLICATION</title>
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
  $res = "   ";
  if (isset($_POST['SUB1'])) {
    $arr1 = $_POST['arr1'];
    $arr2 = $_POST['arr2'];
    $result = array();
    for ($i = 0 ; $i <= 2 ; $i++) {
      for ($j = 0 ; $j <= 2 ; $j++) {
        $result[$i][$j] = 0;
        for ($k = 0 ; $k <= 2 ; $k++) {
          $result[$i][$j] += $arr1[$i][$k] * $arr2[$k][$j];
        }
      }
    }
    echo "<table>";
    for ($i = 0 ; $i <= 2 ; $i++) {
      echo "<tr>";
      for ($j = 0 ; $j <= 2 ; $j++) {
        echo "<td>" . $result[$i][$j] . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
?>
</head>
<body>
<form action = "" method = "POST">
    <div class="container">
        <table>
            <th>MATRIX - 01</th>
            <tr>
                <td><input type = "text" name = "arr1[0][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr1[0][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr1[0][2]" placeholder = "30" required></td>
            </tr>

            <tr>
                <td><input type = "text" name = "arr1[1][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr1[1][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr1[1][2]" placeholder = "30" required></td>
            </tr>

            <tr>
                <td><input type = "text" name = "arr1[2][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr1[2][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr1[2][2]" placeholder = "30" required></td>
            </tr>
            <tr>
                <td>
                    <br>
                    <button type="submit" name="SUB1">SUBMIT</button>
                </td>
            </tr>
            <th>MATRIX - 02</th>
            <tr>
                <td><input type = "text" name = "arr2[0][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr2[0][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr2[0][2]" placeholder = "30" required></td>
            </tr>

            <tr>
                <td><input type = "text" name = "arr2[1][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr2[1][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr2[1][2]" placeholder = "30" required></td>
            </tr>

            <tr>
                <td><input type = "text" name = "arr2[2][0]" placeholder = "10" required></td>
                <td><input type = "text" name = "arr2[2][1]" placeholder = "20" required></td>
                <td><input type = "text" name = "arr2[2][2]" placeholder = "30" required></td>
            </tr>
            <tr>
                <td>
                    <br>
                    <button type="submit" name="SUB">SUBMIT</button>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <input type = "text" name = "res" value = "<?php echo $res[0][0]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[0][1]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[0][2]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[1][0]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[1][1]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[1][2]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[2][0]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[2][1]?>" placeholder = " RESULT" readonly>
        <input type = "text" name = "res" value = "<?php echo $res[2][2]?>" placeholder = " RESULT" readonly>

    </div>
</form>
</body>
</html>