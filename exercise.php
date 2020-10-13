<?php
$cities = [
'New York'=> 'NY(8,175,133 people)',
'Los Angeles' => 'CA(3,792,621)',
'Chicago' => 'IL(2,695,598)',
'Houston' => 'TX (2,100,263)',
'Philadelphia' => 'PA(1,526,006)',
'Phoenix' => 'AZ(1,445,632)',
'San Antonio' => 'TX(1,327,407)',
'San Diego' => 'CA(1,307,402)',
'Dallas' => 'TX(1,197,816)',
'San Jose' => 'CA(945,942)',
];


echo "<table border=1 cellpadding=10px>";
echo "<tr> <td colspan=2><h4>Ten Largest Cities</h4> </td></tr>";
foreach ($cities as $key => $value) {
	echo "<tr><td>$key<td>$value</tr>";
}
echo "</table>";
echo "<br>";


$population = asort($cities);
echo "<table border=1 cellpadding=10px>";
echo "<tr> <td colspan=2> <h4> Ten Largest Cities ordered by population </h4> </td></tr>";
foreach ($cities as $key => $value) {
	echo "<tr><td>$key<td>$value</tr>";
}
echo "</table>";
echo "<br>";


$cityname = ksort($cities);
echo "<table border=1 cellpadding=10px>";
echo "<tr> <td colspan=2> <h4> Ten Largest Cities ordered by city </h4> </td></tr>";
foreach ($cities as $key => $value) {
	echo "<tr><td>$key<td>$value</tr>";
}
echo "</table>";

?>