<!DOCTYPE html>
<html>
    <body>
        <?php

        //multidimensional arrays
        //They are arrays that contain other arrays.
        //values in the inner arrays are accessed using the index of the outer array.
        //first method to create the array
        $marks=array(
            "Patrick"=>array(
                "Programming"=>"A",
                "Networking"=>"B",
                "Database"=>"C",
            ),
            "John"=>array(
                "Programming"=>"B",
                "Networking"=>"A",
                "Database"=>"C",
            ),
            "Jane"=>array(
                "Programming"=>"C",
                "Networking"=>"B",
                "Database"=>"A",
            ),

        );
        //accessing the elements of the array
        echo "Patrick's Grade in Programming is". $marks ["Patrick"]["Programming"]."<br>";
        echo "John's Grade in Programming is ".$marks ["John"]["Programming"]."<br>";
        echo "Jane's Grade in Programming is ".$marks ["Jane"]["Programming"]."<br>";
        echo"<br>";
        ?>
    </body>
</html>