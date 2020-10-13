<?php

echo "<center><h1>Chess Board Exercise</h1></center><br><br>";
echo " <center><table border=1 cellspacing=0px cellpadding=20px>";

for ($row=1; $row<= 8 ; $row ++) { 
	echo "<tr>";
	for ($col=1; $col <=8 ; $col++) { 
		$sum = $row + $col;
		if ($sum%2 == 0) {
			echo "<td bgcolor=#FFFFFF></td>";
		}
		else{
			echo "<td bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}

echo "</table></center>";


?>
