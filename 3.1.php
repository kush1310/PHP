<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE CALCULATOR</title>
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
    }

    input {
      margin: 10px 0;
      width: 50%;
      padding: 15px;
      font-size: 18px;
      font-weight: bold;
    }

    button {
      border-radius: 10px;
      padding: 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      text-align: center;
      font-size: 16px;
      transition: background-color 0.8s ease;
    }

    button:hover {
      background-color: skyblue;
      color: black;
      border-radius: 20px;
      transition: border-radius 0.8s ease;

    }
	</style>
<?php
	$result = 0;
	if(isset($_POST['var'])){
		$num_1 = $_POST['num1'];
		$num_2 = $_POST['num2'];
		$operator = $_POST['var'];
		if ($operator == "+") 
		{
			$result = $num_1 + $num_2;
		}
		else if ($operator == "-")
		{
			$result = $num_1 - $num_2;
		}
		else if ($operator == "*")
		{
			$result = $num_1 * $num_2;
		}
		else if ($operator == "/")
		{
			$result = $num_1 / $num_2;
		}
	}
?>
</head>
<body>
	<div class="container">
		<form action="" method="POST">
			<h1 style="color: red;">CALCULATOR</h1>
    		<label for="num1">ENTER THE FIRST NUMBER</label>
			<input type="text" name="num1" placeholder="EG: 10" required><br>
	
    		<label for="num1">ENTER THE SECOND NUMBER</label>
			<input type="text" name="num2" placeholder="EG: 20" required><br><br>
	
			<button type="submit" name="var" value="+" required>	+	</button>
			<button type="submit" name="var" value="-" required>	-	</button>
			<button type="submit" name="var" value="*" required>	*	</button>
			<button type="submit" name="var" value="/" required>	/	</button>
			<h3>RESULT </h3><input type="text" value = "<?php echo $result ?>" readonly>
		</form>
	</div>
</body>
</html>