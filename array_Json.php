<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi array ke Json</title>
</head>
<body>
  <?php

  $people = [
    ["name" => "Diavolo", "age" => 25],
    ["name" => "Joestar", "age" => 32],
    ["name" => "Hol Horse", "age" => 18],
    ["name" => "Bruno", "age" => 41],
    ["name" => "Leone Abbacchio", "age" => 27],
    ["name" => "Cioccolata", "age" => 60],
    ["name" => "Risotto Nero", "age" => 22],
    ["name" => "Emporio", "age" => 38],
    ["name" => "Mori Jin", "age" => 19],
    ["name" => "Mujin Park", "age" => 24],
    ["name" => "Han Daewi", "age" => 55],
    ["name" => "Dabi", "age" => 16],
    ["name" => "Overhaul", "age" => 30],
    ["name" => "Shinra", "age" => 21],
    ["name" => "Arthur", "age" => 28],
  ];

  // Mengkonversi data Array ke Json
  $json = json_encode($people, JSON_PRETTY_PRINT);

  // Menampilkan data Json
  echo "<pre>" . $json . "</pre>";
  ?>
</body>
</html>