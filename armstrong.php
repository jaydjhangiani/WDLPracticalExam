<?php

$onum = $_POST["ip"];
$num = $onum;
$rem = 0;
$sum = 0;
$digit = 0;
$j=2;

while($num!=0)
{
	$digit +=1;
	$num = $num/10;
	$num = floor($num);
	
}
$num=$onum;
while($num !=0)
{
	$rem = $num%10;
	$sum += $rem**$digit;
	$num /= 10;
}

if($sum == $onum)
	echo"THE NUMBER IS ARMSTRONG";
else
	echo"THE NUMBER IS NOT ARMSTRONG";

?>
