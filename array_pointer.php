<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pointer</title>
</head>
<body>
    <?php
        $ages = [4, 8, 15, 16, 23, 42];

        //current: current pointer value
        echo "1: " . current($ages) . "<br />";

        next($ages);
        echo "2: " . current($ages) . "<br />";

        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br />";

        prev($ages);
        echo "3: " . current($ages) . "<br />";

        reset($ages);
        echo "4: " . current($ages) . "<br />";

        end($ages);
        echo "5: " . current($ages) . "<br />";

        echo "<br />";

        //while loop that moves the array pointer
        //similar to foreach
        reset($ages);
        while($age = current($ages)){
            echo $age . ", ";
            next($ages);
        }

    ?>
    
</body>
</html>