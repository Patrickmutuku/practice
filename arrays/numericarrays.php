<!DOCTYPE html>
<html>
    <body>
        <?php
        //numeric arrays
        //They are arrays that contain numeric values.
        //first method to create the array

        $numbers=array(1,2,3,4,5);
        
        foreach($numbers as $value){
            echo "Value as integer is $value<br>";

        }

        //second method to create the array
        $numbers[0]="one";
        $numbers[1]="two";
        $numbers[2]="three";
        $numbers[3]="four";
        $numbers[4]="five";

        //accessing the elements of the array
        foreach($numbers as $value){
            echo "The numbers in the array are $value<br>";
        }


        ?>
    </body>
</html>