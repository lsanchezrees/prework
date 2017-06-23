
<!DOCTYPE html>
<html>
	<head>
		<title>Test1</title>
	</head>
	<body>
		<?php


		$paper[] = "Copier";
		$paper[] = "Inkjet";
		$paper[] = "Laser";
		$paper[] = "Photo";

		for ($j = 0; $j < 4; ++$j)
		{
			echo "$j:  $paper[$j]<br>";
		}
		$paper['copier'] = "Copier";
		$paper['inkjet'] = "Inkjet";
		$paper['laser'] = "Laser";
		$paper['photo'] = "Photo";


			echo $paper['laser'];

		$p1 = array("Copier", "Inkjet", "Laser", "Photo");
		$p2 = array('copier' => "Copier and Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'photo' => "Photographic Paper");

		$paper = array("Copier", "Inkjet", "Laser", "Photo");
		$j = 0;
		foreach($paper as $item)
		{
			echo "$j:  $item<br>";
			++$j;
		}
		/*$paper = array('copier' => "Copier and Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'photo' => "Photographic Paper");*/
		//foreach($paper as $item => $description)
			//echo "$item: $description<br>";

		while (list($item,$description) = each($paper));
			echo "$item:  $description<br>";

		list($a, $b) = array('Alice', 'Bob');
		echo "a=$a, b=$b";

		$products = array(
			'paper' => array(
				'copier' => "Copier and Multipurpose",
				'inkjet' => "Inkjet Printer",
				'laser' => "Laser Printer",
				'photo' => "Photographic Paper"),
			'pens' => array(
				'ball' => "Ball Point",
				'hilite' => "Highlighters",
				'marker' => "Markers"),
			'misc' => array(
				'tape' => "Sticky Tape",
				'glue' => "Adhesives",
				'clips' => "Paperclips")
			);
		echo "<pre>";

		foreach($products as $section => $items)
			foreach($items as $key => $value)
				echo "$section:\t$key\t($value)<br>";
		echo "</pre>";
		$fred = array("Fred","Smith","fredsmith@yahoo.com");
		echo (is_array($fred)) ? "Is an array" : "Is not an array";
		echo "<br>" . count($fred) . "<br>";
		echo "count of products is " . count($products) . "<br>";
		echo "count of products is " . count($products, 1) . "<br>";
		sort($fred);
		$k = 0;
		foreach($fred as $item) {
			echo $item . "<br>";
			++$k;
		}

		$temp = explode(' ', "Go placidly amid the noise and haste");
		print_r($temp);






		?>

	</body>
</html>