<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>
</head>
<body>
    <?php 
        $var1 = null; //NULL
        $var2 = "";

        echo "var1 null: " . is_null($var1) . "<br />";
        echo "var2 null: " . is_null($var2) . "<br />";
        echo "var3 null: " . is_null($var3) . "<br />";
        echo "<br />";
        echo "var1 is set: " . isset($var1) . "<br />";
        echo "var2 is set: " . isset($var2) . "<br />";
        echo "var3 is set: " . isset($var3) . "<br />";
        echo "<br />";
        $var3 = "0.0";
        $var4 = "0";
        echo "var1 is empty: " . empty($var1) . "<br />";
        echo "var2 is empty: " . empty($var2) . "<br />";
        echo "var3 is empty: " . empty($var3) . "<br />";
        echo "var4 is empty: " . empty($var4) . "<br />";
        // empty: "", null, 0, 0.0, "0", false, array()
    ?>
    
</body>
</html>