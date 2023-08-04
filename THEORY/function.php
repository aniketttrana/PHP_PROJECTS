<?php

// LOCAL AND GLOBAL VARIABLE

$globall=22;
 function localGlobal(){
$locall=222;
echo $locall;
}
localGlobal();

// STATiC VARIABLE



function staticWorking(){
static $locall=0;
echo $locall;
$locall++;
}

staticWorking();
staticWorking();
staticWorking();
echo "</br>";

// with parameter and argument

function sub($a,$b){ // parameter
    echo $a-$b;
}

sub(110,10);  // argument

echo "</br>";
// default parameter

function multi($a,$b=5){
  echo $a*$b;
}


multi(6);  // default it takes another value 5 as in b it is assigned at above

//  with return
function multip($a,$b=5){
    return $a*$b;
  }

  $output=multip(10,2);

  echo "The result is " .$output;
?>