<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $numbers = [4, 8, 2, 3, 5];
        
        echo $numbers[1] . "<br/>";

        $mixed = array(5, "cat", "dog", array("x", "y", "z"));
        echo $mixed[2] . "<br />";
    
        // echo print_r($mixed[3]) . "<br />";

        echo $mixed[3][1] . "<br />";

        $mixed[2] = "mouse";
        $mixed[4] = 3.14;
        $mixed[] = "elephant";

        echo print_r($mixed) . "<br />";
    ?>
</body>
</html>