<?php

for($x=1; $x<=5; $x++)
{
   for ($y=1; $y<=$x; $y++)
    {
	 echo "*";
	    if($y < $x)
		 {
		   echo " ";
		 }
    }
 echo "<br>";
}

?>