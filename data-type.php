<?php

// string
$personName = "Aiman Shafi";
var_dump($personName);

echo "<br>";

// integer
$personAge = 25;
var_dump($personAge);

echo "<br>";

// float
$personHeight = 5.8;
var_dump($personHeight);

echo "<br>";

// boolean
$personIsMale = true;
var_dump($personIsMale);

echo "<br>";

// array
$personHobbies = ["Reading", 123, false];
var_dump($personHobbies);

echo "<br>";

// object
class personInfo
{
    public $personName = "Aiman Shafi";
    public $personAge = 23;
}

$obj = new personInfo;
var_dump($obj->personName);
var_dump($obj->personAge);

echo "<br>";

// null
$personInfo = null;
var_dump($personInfo);

echo "<br>";

// resource

$personName = fopen("data-type.php","r");
var_dump($personName);

echo "<br>";

// single line comment

# this is also a single line comment

/* 
    this is 
    a multiline 
    comment
*/

/**
 * this is a div block
 * this is dynamic line comment
 * Php - Hypertext pre processor
 * Fullstack development 
 */

// Constants

define("name","Aiman Shafi");
echo name;