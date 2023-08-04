<?php
$names=array("aniket","rana","ram");
echo "<pre>"; // to getit in  below
print_r ($names); // bracket is necessary
/*
Array
(
    [0] => aniket
    [1] => rana
    [2] => ram
)
*/
$names[0]="shiv"; // overwrite 

echo "<pre>"; 
print_r ($names); 

echo "<br>";
print_r ($names[2]);
echo $names[0];

$arraylength=count($names);
echo $arraylength; 
// if we $names[10]="shiv";
// then array length will be 5

// printing the array
echo "<ol>";
for($i=0;$i<$arraylength;$i++){
    echo "<li>".$names[$i]."</li>";
}

echo "</ol>";

// ***********************************************************************************
// FOR EACH LOOP
$secArray=array("aniket","dana","cam");
// we dont depeand upon count function in it
foreach($secArray as $names){
    echo $names. " ";
}

// soriting in an array
 sort($secArray);

//  for reverse
// rsort($secArray);
 foreach($secArray as $names){
    echo $names. " ";
}

// ***********************************************************************************
// array_pop($arrayName): remove from last
// array_push($arrayName): add from last
// array_shift($arrayName): remove from beginning
// array_unshift($arrayName): add from beginning


$names=array("aniket","rana","ram");
echo "<pre>"; 
print_r ($names);

array_push($names,"push");
print_r ($names);

// names will get overwrite
array_pop($names);  // push will pop out
print_r ($names);

array_shift($names); // aniket will get removed

print_r ($names);


array_unshift($names,"ANiket");
// Aniket will  get add from starting

print_r ($names);


//***********************************************************************************
// php implode function: join elements of an array with strings  (ARRAY TO STRING) :: Take arrray return string

$colors= array("black","red","pink");

print_r ($colors);

$res= implode(" ",$colors);

echo "my fav colors ". $res;

// php explode function: join elements of string with array  (STRING TO ARRAY) :: Take string return array

$biodata ="My,name,is Aniket Rana";
$res=explode(",", $biodata);
echo "<pre>";
print_r($res);

foreach($res as $val){
    echo $val;
}

// " "= its a delimeter to dstinguish of other element ... we can  give , also as delimeter


//***********************************************************************************
// array_merge(), array_unique()

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

// Merge arrays into a single array
$mergedArray = array_merge($array1, $array2, $array3);

// Output the merged array
print_r($mergedArray);



$array = [1, 2, 2, 3, 4, 4, 5];


$uniqueArray = array_unique($array);


print_r($uniqueArray);

?>