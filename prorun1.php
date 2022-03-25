<?php

if($_REQUEST['btn_submit']=="Button 1")
{
shell_exec('D:');
$output= shell_exec('python classify.py');

$myArray = explode(',', $output);
print_r($myArray[0]);
echo "<br>";
print_r($myArray[1]);
echo "<br>";
print_r($myArray[2]);
echo "<br>";
print_r($myArray[3]);
echo "<br>";
print_r($myArray[4]);
echo "<br>";
print_r($myArray[5]);
echo "<br>";
//print($output);
}
else if($_REQUEST['btn_submit']=="Button 2")
{
shell_exec('D:');
$output= shell_exec('python detectv.py');

$myArray = explode(',', $output);
print_r($myArray[0]);
echo "<br>";
print_r($myArray[1]);
echo "<br>";
print_r($myArray[2]);
echo "<br>";
print_r($myArray[3]);
echo "<br>";
print_r($myArray[4]);
echo "<br>";
print_r($myArray[5]);
echo "<br>";
//print($output);
}
else if($_REQUEST['btn_submit']=="Button 3")
{
shell_exec('D:');
$output= shell_exec('python classifyd.py');

$myArray = explode(',', $output);
print_r($myArray[0]);
echo "<br>";
print_r($myArray[1]);
echo "<br>";
print_r($myArray[2]);
echo "<br>";
print_r($myArray[3]);
echo "<br>";
print_r($myArray[4]);
echo "<br>";
print_r($myArray[5]);
echo "<br>";
//print($output);
}


/*shell_exec('D:');
$output= shell_exec('python classify.py');

$myArray = explode(',', $output);
print_r($myArray[0]);
echo "<br>";
print_r($myArray[1]);
echo "<br>";
print_r($myArray[2]);
echo "<br>";
print_r($myArray[3]);
echo "<br>";
print_r($myArray[4]);
echo "<br>";
print_r($myArray[5]);
echo "<br>";
//print($output);

*/

?>