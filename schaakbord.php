<!DOCTYPE html>
<html>
<head>
	<title>Chess!</title>
	<link rel="stylesheet" type="text/css" href="chess.css">
</head>
<body>
	<?php
		$rows = 8;
		$cols = 8;
		echo "<table>";
		for ($i=0; $i < $rows; $i++) { 
			echo "<tr>";
			for ($j=0;$j < $cols; $j++) {
				if ($i % 2 == 1 && $j % 2 == 0)
					echo "<td class='black'></td>";
				elseif ($i % 2 == 0 && $j % 2 == 1)
					echo "<td class='black'></td>";
				else
					echo "<td></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>