<?php

//numbers in php
//numbers are stored in variables
//variables are called identifiers
//variables can be assigned values

//declaring the numbers
$number1 = 1;
$number2 = 10;
$number3 = 100;
echo'<br>';

//Arithmetic operations in php
// + addition
// - subtraction
// * multiplication
// / division
// % modulus

echo $number1 + $number2.'br';
echo $number1 - $number2.'br';
echo $number1 * $number2.'br';
echo $number1 / $number2.'br';
echo $number1 % $number2.'br';
echo'<br>';

//Assignment operators in php
// = assignment operator
// += addition assignment operator
// -= subtraction assignment operator
// *= multiplication assignment operator
// /= division assignment operator
// %= modulus assignment operator

//$number1+= $number2; echo $number1.'br';
//$number1-= $number2; echo $number1.'br';
//$number1*= $number2; echo $number1.'br';
//$number1/= $number2; echo $number1.'br';
//$number1%= $number2; echo $number1.'br';
//echo'<br>';

//increment operators
//++ increments the value of the variable by 1
//-- decrements the value of the variable by 1

echo $number1++.'<br>';
echo ++$number1.'<br>';

//decrement operators
//-- decrements the value of the variable by 1
//++ increments the value of the variable by 1

echo $number1--.'<br>';
echo --$number1.'<br>';

//number checking functions in php
//is_int($number1);
//is_float($number1);
//is_bool($number1);
//is_string($number1);  
//echo'<br>';

//conversion functions in php
$strNumber = '100';
$number = (int)$strNumber;
var_dump($number);
echo'<br>';

//number functions in php
echo "abs(-10) = ".abs(-10).'<br>';
echo "ceil(10.1) = ".ceil(10.1).'<br>';
echo "floor(10.1) = ".floor(10.1).'<br>';
echo "round(10.1) = ".round(10.1).'<br>';
echo "max(10,20) = ".max(10,20).'<br>';
echo "min(10,20) = ".min(10,20).'<br>';
echo "rand() = ".rand().'<br>';
echo "sqrt(100) = ".sqrt(100).'<br>';
echo "pow(2,3) = ".pow(2,3).'<br>';
echo '<br>';

//formating numbers in php
//This refers to the number of decimal places to be displayed
$number=10.123456789;
echo number_format($number,2,'.','.').'<br>';

//https://www.w3schools.com/php/func_string_number_format.asp
//https://www.php.net/manual/en/function.number-format.php
?>


