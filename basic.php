<html lang="en">
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <?php  
            //$var1 = 10;
            //echo $var1;
            $float = 3.14;
            echo "Is {$float} float?" . is_int($float) . '<br>';
            //constant - can't change value
            define("MAX_WIDTH", 980);

            // arrays
            $mixed = array(1,"fox",3, array(5,6,7.7));
            echo $mixed[3][2] . '<br>';
            $mixed[] = "horse"; //append at the end 
            echo print_r($mixed) . '<br>'; //print array 

            $numbers = array(8,23,7,10,-9,2,0);
            /* count($numbers)
             * max($numbers)
             * sort($numbers)
             * rsort($numbers)
             * implode(" * ", $numbers)
             * explode(" * ", $num_string)
             * in_array(15, $numbers) //contains, returns true/false
             */ 

            //current pointer value 
            echo current($numbers) . "<br>";
            next($numbers);
            prev($numbers); 
            end($numbers);
            reset($numbers); 
            // useful in db pointers
            while ($number = current($numbers)) {
                echo $number . ", ";
                next($numbers);
            }
            echo "<br>";

            // associative array
            $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund");
            $assoc["first_name"] = "Larry";
            echo $assoc["first_name"] . " " . $assoc["last_name"] . '<br>';

            foreach($assoc as $k => $v) {
                echo "{$k}: {$v} ";
            }  
            echo "<br>";

            // type casting 
            $count = "2";
            echo gettype($count) . '<br>';
            settype($count, "integer");
            echo gettype($count) . '<br>';

            // conditions
            $a = 4; 
            $b = 3;

            if ($a > $b) {
                echo "a is greater than b" . '<br>';
            } elseif ($a < $b) {
                echo "a is smaller than b" . '<br>';
            } else {
                echo "a equals b" . '<br>';
            }

            /* equal == 
             * identical === 
             * > < >= <= <> 
             * != 
             * !== 
             * &&
             * || 
             */
            switch ($b) {
            case 1:
                echo "a equals 1 <br>";
            case 2:
                echo "a equals 2 <br>";
            default: 
                echo "a equals 2 <br>";
            }

            //loop
            $count = 0;
            while ($count <= 10) {
                echo $count . " "; 
                $count += 1;
            }
            echo "<br>";

            for ($i = 0; $i <= 10; $i++) {
                echo $i . " ";
            }
            echo "<br>";

            $ages = array(123,22,55,21,62,27);
            foreach ($ages as $age) {
                echo $age . " ";
            }
            echo "<br>";

            // functions 
            function say_hello($word) {
                echo "Hello {$word}! <br>"; //or, return 
            }
            say_hello("world");

            // default
            function paint($room="office", $color="red") {
                return "The color of the {$room} is {$color}.<br>";
            }
            echo paint();
            echo paint("bedroom", "blue"); 


        ?>

    </body>
</html>
