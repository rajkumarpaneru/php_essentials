<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
         $ages = [4, 8, 15, 16, 23, 42];

         foreach($ages as $age) {
            echo "Age: {$age}<br />";
         }

         $person = [
            "first_name" => "John",
            "last_name" => "Smith",
            "age" => 40,
            "state" => "CA", 
            "city" => "Beverly Hills",
            "zip" => "12345"
         ];

         foreach ($person as $key => $value){
            echo "{$key}: {$value}<br />";
         }
    ?>
</body>
</html>