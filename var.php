<?php
//variables in php refers to the memory location of the variable
//variables in php are case sensitive
//variables in php are global, local and static
//variables in php are declared using the keyword $
//variables in php are initialized using the = operator
//variables in php are reset using the = operator
//variables in php are concatenated using the . operator

//variable types in php
//string
//integer
//float
//boolean
//array
//object
//resource
//null

//Declaring variables in php
//$variable_name
//$variable_name = value
$name= "Patrick";
$age = "21";
$height = "5.8";
$weight = "70";
$eye_color = "brown";
$hair_color = "black";
$is_married = false;
$is_employed = true;
$isMale= true;


//printing the variables in php
//what is concatenation in php?
//concatenation is the process of combining two or more strings together
//concatenation is done using the . operator
//echo is used to print the value of a variable

echo $name.'br';
echo $age.'br';
echo $height.'br';
echo $weight.'br';
echo $eye_color.'br';
echo $hair_color.'br';
echo $is_married.'br';
echo $is_employed.'br';
echo $isMale.'br';

//printing the types of the variables in php

echo gettype($name).'br';
echo gettype($age).'br';
echo gettype($height).'br';
echo gettype($weight).'br';
echo gettype($eye_color).'br';
echo gettype($hair_color).'br';
echo gettype($is_married).'br';
echo gettype($is_employed).'br';
echo gettype($isMale).'br';


//printing the whole variable in php
var_dump($name,$age,$height,$weight,$eye_color,$hair_color,$is_married,$is_employed,$isMale);

//changing the value of the variables in php

$name=false;

//printing the type of variable
echo gettype($name).'br';

//variable checking functions in php
is_string($name);
is_int($age);
is_float($height);
is_bool($is_married);
is_bool($is_employed);
is_bool($isMale);


//variable definition functions in php
var_dump(isset($name));
var_dump(isset($name2));
echo'<br>';

//constants in php
//constants are variables that cannot be changed
//constants are defined using the define() function
define('PI',3.14);
echo PI.'br';
var_dump(defined('PI'));
echo'<br>';

//php built in constants
echo SORT_ASC.'br';
echo PHP_INT_MAX.'br';
echo PHP_FLOAT_MAX.'br';
echo PHP_INT_SIZE.'br';
echo PHP_VERSION.'br';
echo PHP_OS.'br';
echo PHP_EOL.'br';
echo PHP_INT_MIN.'br';
echo PHP_FLOAT_MIN.'br';
echo PHP_INT_SIZE.'br';

?>