<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <?php
    
        $a = 4;
        $b = 5;
        $c = 3;

        if($a > $b && $a > $c){
            echo "a is the largest.<br />";
        }elseif ($b > $c){
            echo "b is the largest. <br />";
        }else{
            echo "c is the largest. <br />";
        }
         
        $b = 4;
        if($a === $b){
            echo "a and b are identical. <br />";
        }

        if($a !== $c){
            echo "a and c are not identical. <br />";
        }

        if($a === $b || $b === $c){
            echo "Either a and b, or b and c are equal. <br />";
        }

    ?>
    
</body>
</html>