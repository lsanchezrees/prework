<!DOCTYPE html>
<html>
	<head>
		<title>Test1</title>
	</head>
	<body><?php
		echo strrev(" .dlrow olleH"); //reverse string
		echo str_repeat("Hip", 2); //repeat string
		echo strtoupper("hooray!"); //string to uppercase
		print(abs(5-8));

		echo ucfirst(strtolower("aNY # of Letters and Punctuation you WANT"));
		$names = fix_names("WILLIAM", "henry", "gatES");
		echo $names[0] . " " . $names[1] . " " . $names[2];

		function fix_names($n1,$n2,$n3) {
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));
			return array($n1, $n2, $n3);
		}

			$a1 = "WILLIAM";
			$a2 = "henry";
			$a3 = "gatES";
			echo $a1 . " " . $a2 . " " . $a3 . "<br>";
			fix_names2($a1, $a2, $a3);
			echo $a1 . " " . $a2 . " " . $a3 . "<br>";

		function fix_names2($n1,$n2,$n3) {
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));

		}

		$a1 = "WILLIAM";
		$a2 = "henry";
		$a3 = "gatES";
		echo $a1 . " " . $a2 . " " . $a3 . "<br>";
		fix_names3();
		echo $a1 . " " . $a2 . " " . $a3 . "<br>";
		function fix_names3() {
			global $a1; $a1 = ucfirst(strtolower($a1));
			global $a2; $a2 = ucfirst(strtolower($a2));
			global $a3; $a3 = ucfirst(strtolower($a3));

		}
		if (function_exists("array_combine"))
		{
			echo "Function exists";
		}
		else
		{
			echo "Function does not exist.  Better write our own.";
		}
		$object = new User;
		print_r($object); echo "<br>";
		$object->name = "Joe";
		$object->password = "mypass";
		print_r($object); echo "<br>";

		$object->save_user();

		$object1 = new User();
		$object1->name = "Alice";
		$object2 = clone $object1;
		$object2->name = "Amy";
		echo "object1 name = " . $object1->name . "<br>";
		echo "object2 name = " . $object2->name . "<br>";
		$object = new User;
		$object->password = "secret";
		echo $object->get_password();
		User::pwd_string();

		Translate::lookup();
		$temp = new Test();
		echo "Test A: " . Test::$static_property . "<br>";
		echo "Test B: " . $temp->get_sp() . "<br>";
		//echo "Test C: " . $temp->static_property . "<br>";
		$object = new Subscriber;
		$object->name = "Fred";
		$object->password = "pword";
		$object->phone = "012 345 6789";
		$object->email = "fred@bloggs.com";
		$object->display();
		$object = new Son;
		$object->test();
		$object->test2();
		$object = new Tiger();
		echo "Tigers have...<br>";
		echo "Fur: " . $object->fur. "<br>";
		echo "Stripes: " . $object->stripes;

		class Wildcat
		{
			public $fur; //wildcats have fur
			function __construct()
			{
				$this->fur = "TRUE";
			}
		}
		class Tiger extends Wildcat
		{
			public $stripes;//Tigers have stripes
			function __construct()
			{
				parent::__construct();//call parent constructor first
				$this->stripes = "TRUE";
			}
		}

		class Dad
		{
			function test()
			{
				echo "[class Dad] I am your father<br>";
			}
		}

		class Son extends Dad
		{
			function test()
			{
				echo "[class Son] I am Luke<br>";
			}
			function test2()
			{
				parent::test();
			}
		}

		class Test
		{
			static $static_property = "I'm static";
			function get_sp()
			{
				return self::$static_property;
			}
		}

		class Translate
		{
			const ENGLISH = 0;
			const SPANISH = 1;
			const FRENCH = 2;
			const GERMAN = 3;

			static function lookup()
			{
				echo self::SPANISH;
			}
		}


		class User
		{
			public $name, $password;
			function save_user()
			{
				echo "Save User code goes here";
			}
			function get_password()
			{
				return $this->password;
			}
			static function pwd_string()
			{
				echo "<br>Please enter your password";
			}
		}

		class Subscriber extends User{
			public $phone, $email;

			function display()
			{
				echo "Name: " . $this->name . "<br>";
				echo "Pass: " . $this->password . "<br>";
				echo "Phone: " . $this->phone . "<br>";
				echo "Email: " . $this->email . "<br>";

			}
		}


		?>
	</body>
</html>