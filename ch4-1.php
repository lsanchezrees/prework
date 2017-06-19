
<!DOCTYPE html>
<html>
	<head>
		<title>Test1</title>
	</head>
	<body>
		<?php
		$j = 10;
		while ($j >= -10)
		{
			$j--;
			if ($j == 0) continue;
			echo (int) (10/$j) . "<br>";
		}
		echo "<br>";

		for ($count = 1; $count <= 12; $count+=2)
			echo "$count times 12 is " . $count * 12 . "<br>";
		echo "<br><br>";
		$count = 1;
		do
			echo "$count times 12 is " . $count * 12 . "<br>";
		while(++$count <=12);
		echo "<br><br>";
		$count = 0;
		while (++$count <= 12)
		{
			echo "$count times 12 is ". $count * 12 . "<br>";
		}

		$fuel = 0.5;
		echo $fuel <= 1 ? "fill tank now" : "there's enough fuel";

		$a = 1; $b = 0;
		echo ($a AND $b)."<br>";
		echo ($a OR $b)."<br>";
		echo ($a xor $b)."<br>";
		echo !$a ."<br>";

		echo "a: [".(20>9)."]<br>";
		echo "b: [".(5==6)."]<br>";
		echo "c: [".(1==0)."]<br>";
		echo "d: [".(1==1)."]<br>";
		$day_number = 155;

		$days_to_new_year = 366 - $day_number;
		if ($days_to_new_year < 30)
		{
			echo "not long now till new year";
		}else
			echo "new year is a long way off";
		?>

</body>
</html>