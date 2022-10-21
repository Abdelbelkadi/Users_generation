<?php

require dirname(__DIR__) . "/PDO/vendor/autoload.php";

$ch = curl_init();

curl_setopt_array($ch, [
  CURLOPT_URL => "https://randomuser.me/api",
  CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);


$response = json_decode($response, true);

$firstName = $response['results'][0]["name"]["first"];
$lastName = $response['results'][0]["name"]["last"];
$gender = $response['results'][0]['gender'];
$email = $response['results'][0]['email'];
$picture = $response['results'][0]['picture']['large'];

$pdo = new Database();
$pdo = $pdo->getDb();
$sql = "INSERT INTO users_table (first_name, last_name, email) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql)->execute([$firstName, $lastName, $email]);



?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet">
</head>

<body>

  <form action="POST">
    <div class="head-container">
      <div class="picture-container">
        <img src="<?php echo $picture ?>" alt="">
      </div>
      <div class="container">
        <div class="div-left">
          <ul>
            <li>Name:</li>
            <li>Lastname:</li>
            <li>Gender:</li>
            <li>email:</li>
          </ul>
        </div>
        <div class="div-right">
          <ul>
            <li><?php echo $firstName ?></li>
            <li><?php echo $lastName ?></li>
            <li><?php echo $gender ?></li>
            <li><?php echo $email ?></li>
          </ul>
        </div>
      </div>
    </div>
  </form>

</body>

</html>