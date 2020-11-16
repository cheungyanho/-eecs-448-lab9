<?php

echo "<table>";
	for ($x=1; $x<=100;$x++) {
		echo "<tr> \n";
		for ($y=1; $y<=100; $y++) {
		   $z = $x * $y;
		   echo "<td>$z</td> \n";
		   	}
	  	    echo "</tr>";
		}
echo "</table>";

?>
