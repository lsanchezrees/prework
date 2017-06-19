<!DOCTYPE html>
<html>
	<head>
		<title>Test1</title>
	</head>
	<body>
		<?php
		$username ="Fred Smith";
		echo $username;
		echo "<br>";
		$current_user = $username;
		echo $current_user . "<br>";
		$y = 0;
		if ($y-- == 0) echo $y."<br>";
		$count = 30;
		echo 'this week the count is $count';
		echo "<br>this week the count is $count <br>";
		echo <<<_END
THIS IS a test
of the emergency broadcasting system.
_END;
		function longdate($timestamp)
		{
			return date("l F jS Y", $timestamp);
		}

		echo "<br>".longdate(time());
		?>

	</body>
</html>