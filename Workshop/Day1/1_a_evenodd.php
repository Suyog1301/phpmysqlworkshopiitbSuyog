<?php
$a=array();
$a=readline("Enter the number");
for($i=0;$i<sizeof($a);$i++)
{
if($a[$i]%2==0)
echo $a[$i]." is even number.<br>";
else
echo $a[$i]." is odd number.<br>";
}
?>
