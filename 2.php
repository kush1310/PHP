<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER INFORMATION FORM</title>
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
      padding: 20px;
      background-color: #333;
      border-radius: 5px;
      width: 90%;
    }

    label {
      display: block;
      text-align: left;
      margin-left: 280px;
      font-size: 20px;
      font-weight: bolder;
    }

    input {
      margin: 10px 0;
      width: 50%;
      padding: 20px;
      font-size: 18px;
      font-weight: bold;
    }

    button {
      display: block;
      margin: 20px auto;
      border-radius: 10px;
      padding: 10px;
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
    }
</style>
</head>
<body>
<div class="container">
  <h1>User Information</h1>
  <form action="" method = "POST" id="userForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required placeholder = "Kush Amit Shah"><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="0" required placeholder = "17"><br>

    <label for="age">Phone Number:</label>
    <input type="number" id="pn" name="pn" min="0" required placeholder = "2260703070"><br>

    <label for="age">Email:</label>
    <input type="emial" id="email" name="email" required placeholder = "kush@bbit.ac.in"><br>

    <label for="age">City:</label>
    <input type="text" id="city" name="city" required placeholder = "Nadiad"><br>
    <button type="submit">Submit</button>
  </form>
  <h2>KINDLY CHECK YOUR DETAILS:</h2>
  <?PHP 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $name_final = filter_var($_POST['name']);
      $age_final = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
      $pn_final = filter_var($_POST['pn'], FILTER_SANITIZE_NUMBER_INT);
      $email_final = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $city_final = filter_var($_POST['city']);

      echo  "<p>NAME : " .$name_final. " </p>";
      echo "<p>AGE : " .$age_final. "</p>";
      echo  "<p>NAME : " .$pn_final. " </p>";
      echo "<p>AGE : " .$email_final. "</p>";
      echo  "<p>CITY : " .$city_final. " </p>";
    }
  ?>
</div>
</body>
</html>