<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo $variable; //variable value
        // print_r($array); //print readable array
        // gettype($variable); //variable type
        // var_dump($variable) //variable type and value
        // get_defined_vars(); //array of defined variables
        // debug_backtrace(); //show backtrace

        $number = 99;
        $string = "Bug?";
        $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

        var_dump($number);

        var_dump($string);

        var_dump($array);

        // print_r(get_defined_vars()); 

        function say_hello_to($word){
            echo "Hello {$word}! <br />";
            var_dump(debug_backtrace());
        }

        say_hello_to("Everyone");

        /** 
         * debuggers 
         * 1. xdebug
         * 2. DBG
         * 3. FirePHP
         */
        
    ?>
</body>
</html>