<?php
$a=array(array(1,2),array(3,4));
$b=array(array(3,4),array(5,6));
$result=array(array());
for($x=0;$x<2;$x++)
{
for($y=0;$y<2;$y++)
{
$result[$x][$y]=$a[$x][$y]+$b[$x][$y];
echo $result[$x][$y]." ";
}
echo "<br>";
}
?>