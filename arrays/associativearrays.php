<!DOCTYPE html>
<html>
    <body>
        <?php
        //associative arrays
        //They are arrays that contain named values.
        //first method to create the array
        $marks=array("Patrick"=>"A","John"=>"B","Jane"=>"C");

        echo "Patrick's Grade is". $marks ["Patrick"]."<br>";
        echo "John's Grade is ".$marks ["John"]."<br>";
        echo "Jane's Grade is ".$marks ["Jane"]."<br>";

        //the second method to create the associative array
        $marks["Patrick"]="Excellent";
        $marks["John"]="Very Good";
        $marks["Jane"]="Good";

        echo "Patrick has an".$marks["Patrick"]."grade<br>";
        echo "John has a".$marks["John"]."grade<br>";
        echo "Jane has a".$marks["Jane"]."grade<br>";

        ?>
    </body>
</html>