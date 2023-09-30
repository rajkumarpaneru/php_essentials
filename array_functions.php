<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php
        $numbers = [5, 7, 2, 9, 1];
        echo "Count: " . count($numbers) . "<br />";
        echo "Max: " . max($numbers) . "<br />";
        echo "Min: " . min($numbers) . "<br />";

        sort($numbers); 
        echo "Sort: ";
        print_r($numbers);
        echo "<br />";

        rsort($numbers); 
        echo "Reverse Sort: ";
        print_r($numbers);
        echo "<br />";
    ?>
</body>
</html>