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
    ?>
</body>
</html>