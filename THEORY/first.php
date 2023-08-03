<html>
    <head>
        <title>
            </title>
            <body>


<?php
echo "*****************************";
$x=1;
$y=4;
$sum=$x+$y;
$sub=$x-$y;
echo "hello","world";
echo $sum,"</br>",$sub;
// print "'the number is '.$sum 'Subtraction is '.$sub";
// print "hello","world";  
// we cant pass 2 argument
echo "<br>";
$a=1;
$b=(int)1.5;
echo $a+$b;

// LOCAL AND GLOBAL VARIABLE

$globall=22;
 function localGlobal(){
$locall=222;
echo $locall;
}
localGlobal();

// STATiC VAIABLE



function staticWorking(){
static $locall=0;
echo $locall;
$locall++;
}

staticWorking();
staticWorking();
staticWorking();

?>
<br>


    <table border="2">
    

        <th>Company</th>
        
        <th>Contact</th>
        <th>Country</th>

        <tr>
            <td>0001</td>
            <td>0001</td>
            <td>0001</td>
        
</tr>

<tr>
            <td>0001</td>
            <td>0001</td>
            <td>0001</td>
            
</tr>

<tr>
            <td>0001</td>
            <td>0001</td>
            <td>0001</td>
            
</tr>


<form>
<h1?>Enter your name</h1>
<br>
<input placeholder="ENtER the naem" name="nametab">

</br>

<h1?>Enter your age</h1>
</br>
<input placeholder="Enter your age" name="nametab">
</br>


<h1?>Enter your height</h1>
</br>


<input placeholder="ENtER the height" name="nametab">
</br>
<button>SUBMIT</button>
</br>

</br>
</form>


</body>
</html>