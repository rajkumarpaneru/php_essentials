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
        }else{
            echo "a is not larger than b. <br />";
        }
         
        
        if($a == 3){
            echo "value of a is 3. <br />";
        }elseif($a == 4){
            echo "value of a is 4. <br />";
        }else{
            echo "value of a is neither 3 nor 4. <br />";
        }



    ?>
    
</body>
</html>