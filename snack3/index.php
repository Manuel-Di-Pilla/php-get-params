<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
    .green{
      background-color: green;
    }
    .grey{
      background-color: grey;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="green">
    <?php
      for ($i=0; $i < count($db['pm']) ; $i++) {
        echo $db['pm'][$i]['name'] . ' ' . $db['pm'][$i]['lastname'] . ' ';
      }
    ?>
  </div>
  <div class="grey">
    <?php
      for ($i=0; $i < count($db['teachers']) ; $i++) {
        echo $db['teachers'][$i]['name'] . ' ' . $db['teachers'][$i]['lastname'] . ' ';
      }
    ?>
  </div>
</body>
</html>
