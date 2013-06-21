<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//create static array
$arr = array("Maruti" => "800", "TOYOTA" => "xyz", "Mahindra" => "abc", "BMW" => "a1");



//Changes all keys in an array to lowercase or uppercase
echo "Key in Upper case   :";
print_r(array_change_key_case($arr, CASE_UPPER));
echo "<br> Key in Lower case   :";
print_r(array_change_key_case($arr, CASE_LOWER));

//Splits an array into chunks of arrays
//true if want to preserve the key (default=>false)
echo "<br> Devides array into no of arrays in which 2 elements are present :";
print_r(array_chunk($arr, 2, true));


//Combine 2 arrays of key and values
//Returns the combined array. FALSE if number of elements does not match

$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

$c = array_combine($fname, $age);
echo "<br> Combine different key and value array :";
print_r($c);

//Counts all the values of an array
echo "<br> Counts all the values of an array :";
$a = array("A", "Cat", "Dog", "A", "Dog");
print_r(array_count_values($a));

//Compare arrays, and returns the differences (compare values only)
echo "<br> Compare arrays returns the differences :";
$a1 = array("red", "green", "blue", "yellow");
$a2 = array("red", "green", "blue");
$a3 = array("red", "green", "blue", "yellow");
$a4 = array("red", "yellow", "green");
echo "<br> Compare a2 with a1 and print diff element of a2 :";
$result = array_diff($a2, $a1);
print_r($result);
echo "<br> Compare a1 with a2 and print diff element of a1 :";
$result = array_diff($a1, $a2);
print_r($result);
echo "<br> Compare a1 with a2,a3 and print diff element of a1 :";
$result = array_diff($a1, $a2, $a3);
print_r($result);
echo "<br> Compare a2 with a4 and print diff element of a2 (a2 and a4 having same length) :";
$result = array_diff($a2, $a4);
print_r($result);


//Compare keys and values of array
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "d" => "blue");

echo "<br> Compare keys and values of 2 arrays :";
$result = array_diff_assoc($a1, $a2);
print_r($result);


//Compare the keys of two arrays, and return the differences:
echo "<br> Compare keys of 2 arrays (keys are not specified):";
$a1 = array("red", "green", "blue", "yellow");
$a2 = array("black", "pink", "white");

$result = array_diff_key($a1, $a2);
print_r($result);
echo "<br> Compare keys of 2 arrays (keys are specified):";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("c" => "red", "d" => "green", "e" => "blue");

$result = array_diff_key($a1, $a2);
print_r($result);


//fill an array with values but not in previus array !
$a1 = array("red", "green", "blue", "yellow");
echo "<br>Insert element in to aaray :";
$a1 = array_fill(0, 3, "violet");
print_r($a1);

//Filters the values of an array using a callback function
function test_odd($var) {
    return($var & 1);
}

$a1 = array("a", "b", 2, 3, 4);
echo "<br>Odd filter :";
print_r(array_filter($a1, "test_odd"));


//Flips/Exchanges all keys with their associated values in an array
echo "<br>Flip the keys with their associated values :";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$result = array_flip($a1);
print_r($result);



//Compare arrays, and returns the matches (compare values only)

$a1 = array("red", "green", "yellow", "blue");
$a2 = array("red", "green", "blue");
echo "<br>Return the matching values of a1 :";
$result = array_intersect($a1, $a2);
print_r($result);
echo "<br>Return the matching values of a2 :";
$result = array_intersect($a2, $a1);
print_r($result);


//Checks if the specified key exists in the array
echo "<br> Checks if the specified key exists in the array :";
$a = array("a" => "Dog", "b" => "Cat");
if (array_key_exists("a", $a)) {
    echo "Key exists!";
} else {
    echo "Key does not exist!";
}


//Returns all the keys of an array
$a=array(10,"a"=>20,30,"10");
echo "<br> Return all keys :";
print_r(array_keys($a));
echo "<br> Return specific keys :";
print_r(array_keys($a,20));
echo "<br> Strict type match :";
print_r(array_keys($a,10,true));
echo "<br> No Strict type match :";
print_r(array_keys($a,"10",false));



//Sends each value of an array to a user-made function, which returns new values
function myfunction($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}
$a=array("Horse","Dog","Cat");
echo "<br> map an element to array :";
print_r(array_map("myfunction",$a));


//Merges one or more arrays into one array
$a = array("a" => "Dog", "b" => "Cat");
$b = array("c" => "Hourse", "d" => "Cat","b"=>"mouse");
echo "<br>Merge array b into a :";
print_r(array_merge($b,$a));
echo "<br>Merge array a into b :";
print_r(array_merge($a,$b));


//multidimentional array sorting !
$cars = array(
    'Audi' => array(
        'A1',
        'A2',
        'A3'
    ),
    'BMW' => array(
        'B1',
        'B2'
    ),
    'Mahindra' => array(
        'H1'
    )
);
echo "<br> Sorting of multidimentional array :";
print_r(array_multisort($cars));
?>



