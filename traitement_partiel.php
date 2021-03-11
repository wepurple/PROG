<?php

require "classes_partiel.php";

$lot = array(new Lot(45000, "Asus", 400, 100, 20),
			 new Lot(55000, "Samsung", 100, 50, 10));


			 echo "<table border='2'";

foreach ($lot as $elem) {
	echo "<tr>";
	$elem->toHTML();
	echo "</tr>";
}
echo "</table>";
?>

