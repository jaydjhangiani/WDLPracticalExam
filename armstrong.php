<?php

$onum = $_POST["ip"];
$num = $onum;
$rem = 0;
$sum = 0;

while($num !=0)
{
	$rem = $num%10;
	$sum += $rem*$rem*$rem;
	$num /= 10;
}

if($sum == $onum)
	echo"THE NUMBER IS ARMSTRONG";
else
	echo"THE NUMBER IS NOT ARMSTRONG";
?>
