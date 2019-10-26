<?php

$n1 = $_POST["fnum"];
$n2 = $_POST["snum"];

while($n1<$n2)
{
	$count = 0;
	for($i=1;$i<$n1;$i++)
	{
		if(($n1%$i)==0)
		{
			$count++;
		}
	}	
		if($count<3)
		echo " ".$n1;
	$n1++;
}

?>
