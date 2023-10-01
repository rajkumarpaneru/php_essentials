<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php
    
        $a = 4;
        $b = 5;

        if($a > $b){
            echo "a is larger than b. <br />";
        }
            

        if($b > $a){
            echo "b is larger than a. <br />";
        }

        $text1 = "hello";
        $text2 = "Hello";

        if($text1 == $text2){
            echo "text1 and text2 are same texts.";
        }


    ?>
    
</body>
</html>