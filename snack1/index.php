<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  $message = '';

  if (empty($name) || empty($mail) || empty($age)) {
    $message = 'errore';
  }
  elseif (strlen($name) <= 3) {
    $message = 'accesso negato';
  }
  elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
    $message = 'accesso negato';
  }
  elseif (!is_numeric($age)) {
    $message = 'accesso negato';
  }
  else {
    $message = 'accesso riuscito';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php echo $message ?>
</body>
</html>
