<!DOCTYPE html>
<head>
	
</head>
<body>

	<!-- this is for $_REQUEST later-->
	<form method="post"
		action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name:
		<input type="text" name="fname">
		<input type="submit">
	</form>

	<?php //declare(strict_types = 1); //strict requirement
		/*PHP is a Loosely Typed Language, Since the data types are not set in a strict sense, 
		you can do things like adding a string to an integer without causing an error.
		To specify the data type, declare strict_type on the VERY FIRST LINE OF THE PHP FILE.*/

		/*if a php just have an echo inside it ( <?php echo 'asf'; ?> )
			replace it using <?= 'asf'; ?> */
		
		echo '<h1 style="color:#940c20; text-align:center;">LEARN PHP</h1>';
		echo 'Hello World<br>';#echo bisa diganti print
		$number0 = 9;
		print "Number0 is $number0<br>";
		//klo " bs lgsg print variable (interpolation)
		echo false; #kosong bukan 0
		//comment #also_comment

		$color = "red";
		echo "My car is " . $color . "<br>"; // . is concatenation
		$color = "blue";
		echo $color . " is my house color<br>";
		echo $color, " asdf<br>";
		echo "<h4>" . "qwer" . "</h4>";

		$num1 = 3;
		$num1+=1;
		$num2 = $num1;
		echo "num1 : ", $num1, "<br>num2 : ", $num2, "<hr>";

	//DATA TYPES
		echo '<p style= "color: red">FINDING DATA TYPES (var_dump)</p>';
		$data0 = NULL;//bs jg lowercase
		var_dump($data0); #null
		$data1 = 5985;
		var_dump($data1); #integer
		$data2 = 10.365;
		var_dump($data2); #float
		$data3 = true;
		var_dump($data3); #bool
		$data4 = "crookedman";
		var_dump($data4); #string
		echo "<br>";
		$data5 = array("Volvo","BMW",3);
		var_dump($data5); #array of 2 strings & 1 int
		echo "<br>";
		class Car{
			function Car(){
				$this->model = "VW";
			}
		}
		$herbie = new Car();
		echo $herbie->model . "<br>";
		var_dump($herbie); #object #1
		echo "<br>";
		$herbie2 = new Car();
		var_dump($herbie2); #object #2
		echo "<hr>";

	//STRING
		echo '<p style= "color: red">STRINGS</p>';
		echo strlen("Hello World!"), "<br>"; #string length
		echo str_word_count("Hello World!"), "<br>"; #count word
		echo strrev("Hello World!"), "<br>"; #reverse
		echo strpos("Hello World!","World"),"<br>"; #if exist, output index of the first same word
		echo str_replace("world", "Dolly", "Hello world!"); #replace 1st word with 2nd word in 3rd word
		echo "<hr>";

	//NUMBERS
		echo '<p style= "color: red">NUMBERS</p>';
		echo "Function to check if a number is an integer :<br>";//is_int(), alias : is_integer() & is_long()
		$number1 = 5985;
		var_dump(is_int($number1)); #bool true
		$number2 = 59.85;
		var_dump(is_int($number2)); #bool false, it's float
		echo '<br>maximum integer : ' . PHP_INT_MAX . '<br>minimum integer : ' . PHP_INT_MIN . "<br><br>";

		echo 'Function to check if a number is a float :<br>';//is_float()
		$number3 = 10.365;
		var_dump(is_float($number3));
		echo '<br>maximum float : ' . PHP_FLOAT_MAX;
		echo '<br><br>';

		echo 'A numeric value that is larger than PHP_FLOAT_MAX is considered infinite<br>';//is_finite(), is_infinite()
		if(is_finite($number1)) echo 'number1 ('. $number1 .') is finite';
		else 'number 1 ('.$number1.') is infinite';
		echo '<br><br>';
		
		echo 'NaN (Not A Number)  used for impossible mathematical operations.<br>';//is_nan()
		var_dump(acos(8));
		if(is_nan(acos(8))) echo '$x is not a number<br><br>';

		echo 'is_numeric<br>';
		if(!is_numeric('asdf')) echo 'asdf is not numeric<br>';
		if(is_numeric(89.6)) echo '89.6 is numeric<br>';
		var_dump(is_numeric('asdf'));

		echo '<br><br>Typecasting (int) (integer) intval()<br>';
		$num3 = 3.14;
		echo intval($num3) . (int)$num3 . (integer)$num3;
		echo "<hr>";
		
	//ARRAY = indexed array, associative array, multidimensional array
		echo '<p style= "color: red">ARRAY</p>';
		$dorm = array( #associative array
			"Gryfindor" => "Minerva McGonagal",
			"Hufflepuff" => "Pomona Sprout",
			"Ravenclaw" => "Filius Flitwick",
			"Slytherin" => "Severus Snape"
		);
		echo "Dorm Heads: ".
			$dorm["Gryfindor"].", ".
			$dorm["Hufflepuff"].", ".
			$dorm["Ravenclaw"].", ".
			$dorm["Slytherin"].".";
		
		echo "<br>Using index example : " . $data5[1] . "<br>";

		foreach($dorm as $key => $val){ # looping through associative array
			echo '$key : ' . $key . ', $val : ' . $val;
			echo '<br>';
		}

		$cars = array("Volvo", "BMW", "Toyota");
		echo '<br>I like' . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

		print '<br>Multidimensional Array<br>';
		$numbers = array( #multidimensional array
			array(1,2,3),
			array(4,5,6),
			array(7,8,9)
		);
		echo '$numbers [1][1] : ' . $numbers[1][1] . '<br>';
		for($a = 0; $a < 3; $a++){
			for($b = 0; $b < 3; $b++){
				echo $numbers[$a][$b];
			}
			echo '<br>';
		}

		print '<br>Sorting Array<br>';
		#sort (ascending)
		#rsort (descending)
		#asort (value ascending associative array)
		#ksort (key ascending associative array)
		#arsort (value descending associative array)
		#krsort (key descending associative array)
		$arraySort = array(6,1,9,3,7,2,4);
		print 'Array: ';
		foreach($arraySort as $numSort)
			echo $numSort;
		echo '<br>Sorted Array: ';
		sort($arraySort);
		foreach($arraySort as $numSort)
			echo $numSort;

	//IF ELSE
		echo '<hr><p style= "color: red">IF ELSE CONDITION</p>';
		$day = "Sunday";
		if($day == "Sunday"){
			echo "Today is Sunday<br>";
		}
		else {
			echo "Today is not Sunday<br>";
		}
		#{ } can be replaced by : and endif;
		if($day == 'Sunday'):
			echo "Today is Sunday<br>";
		else:
			echo "Today isn't Sunday";
		endif;
		echo "<hr>";

	//SWITCH CASE
		echo '<p style= "color: red">SWITCH CASE CONDITION</p>';
		switch($day){
			case "Saturday" : echo "Today is Saturday<br>";break;
			case "Sunday" : echo "Today is Sunday<br>";break;
			default : echo "It's neither Saturday nor Sunday<br>";
		}
		echo "<hr>";

	//LOOPING
		echo '<p style= "color: red">LOOPING</p>';
		echo 'For Loop<br>';
		for($i = 0; $i < 9; $i++){
			echo " i is $i";
			// echo " i=" . $i;
		}

		echo '<br>While Loop<br>';
		$i = 0;
		while($i < 5){
			echo "i is $i ";
			$i++;
		}
		
		echo '<br>Do While Loop<br>';
		$i = 0;
		do{
			$i++;
			echo "i is $i ";
		}while($i<5);

		echo '<br>For Each Loop<br>';
		$arr3 = array(0,1,2,3);
		foreach($arr3 as $value){
			echo " arr3 is $value,";
		}
		echo "<hr>";

	//OPERATORS
		echo '<p style= "color: red">PHP OPERATORS (that i didn\'t know)</p>';
		echo 'Exponentiation (**)<br>';
		echo '2 to the 3rd power = ' . 2**3 . '<br><br>';

		echo 'Identical (===) and Not Identical (!==)<br>';
		echo 'identical means equal and of the same type<br>';
		#equal but not identical example (because the data type)
		echo ': 1 == "1"' . var_dump(1 == '1') . '<br>';
		echo ': 1 === "1"' . var_dump(1 === '1') . '<br><br>';

		echo 'Concatenation Assignment (.=) for Strings<br>';

		echo '<br>Union (+) for Array<br>';
		$arr1 = array('a' => 'red', 'b' => 'yellow');
		$arr2 = array('c' => 'green', 'd' => 'blue');
		$arr1 += $arr2;
		echo 'now $arr1 can use $arr2\'s element. $arr1[\'c\'] = ' . $arr1['c'] . '<br>';
		print_r($arr2);//but not vice versa
		echo '<br>$arr1 union $arr2';
		print_r($arr1 + $arr2);
		#print_r() to print human-readable information about a variable. usually for array
		echo '<br>';

		echo '<br>Logical Operators: and, or, xor (not & | ^)<br>';

		echo '<br>Conditional Assignment Operators (?: and ??)<br>';
		echo (5 > 3) ? '5 is greater than 3' : '5 is not greater than 3<br>';
		
		echo '<br>Null Coalescing (??)<br>';
		$num4 = 0;
		echo $num4 ?? '$num4 is not exist'; #num 4 is not exist, if statement 1 not valid, statement 2

	//FUNCTION
		echo '<hr><p style= "color: red">FUNCTION</p>';
		function sum($angka1, $angka2){
			return $angka1 + $angka2;
		}
		echo "function sum 3 + 8 = " . sum(3, 8) . '<br>';
		function writeMsg(){
			echo 'Hello World!<br>';
		}
		writeMsg();

		#default argument value
		function setHeight(int $height = 100){
			echo "<br>The height is $height";
		}
		setHeight(180);
		setHeight();#using default parameter (100)
		echo '<br><br>';

		#return type declaration
		function add(float $a, float $b): float{
			return $a+$b;
		}
		echo add(3.14, 5.12) . var_dump(add(3.14, 5.12));

		echo '<br><br> Built In function example:<br>';
		echo 'empty() determine whether a variable is considered to be empty<br>';
		echo 'unset() unset a specified variable in a scope, use $GLOBALS to unset the variable globally<br>';
		echo 'count() to return the number of items in array<hr>';

	//CONSTANT
		echo '<p style= "color:red">CONSTANT, are automatically global</p>';
		define("testConstant", "Hello World case sensitive"); #case sensitive
		echo testConstant . '<br>';
		define("testconstant", "Hello World case insensitive", true); #case insensitive
		echo TeStCoNsTaNt . '<br><br>';

		echo 'Constant Array<br>';
		define("cars", [
			"Alfa Romeo",
			"BMW",
			"Toyota"
		]);
		echo cars[1] . '<hr>';

	//GLOBAL VARIABLES - SUPERGLOBALS
		/*several predefines variables in PHP are superglobals, which means that they are always accessible
			regardless of scope - and u can access them from any function, class or file without having to do anything special*/
		//superglobals are usually associative array, for ex. vardump[$_SERVER] or vardump[$_GET]
		echo '<p style="color:red">GLOBAL VARIABLES</p>';
		//$GLOBALS
			#used to access global variables from anywhere in the PHP script (also from within functions or methods).
			echo '<br>$GLOBALS<br>';
			$c = 4;
			$d = 5;
			function addition(){
				$GLOBALS['e'] = $GLOBALS['c'] + $GLOBALS['d'];
				#atau bs jg ditype gini:
				// global $c, $d;
				// $GLOBALS['e'] = $c + $d;
			}
			addition();
			echo "$e<br>";

		//$_SERVER
			echo '<br>$_SERVER<br>'; #bisa pake vardump($_SERVER); buat brutality
			echo '1. php_self : ' . $_SERVER['PHP_SELF'] . '<br>'; #Returns the filename of the currently executing script
			echo '2. server_name : ' . $_SERVER['SERVER_NAME'] . '<br>'; #Returns the name of the host server
			echo '3. http_host : ' . $_SERVER['HTTP_HOST'] . '<br>'; #Returns the Host header from the current request
			// echo '4. http_referer : ' . $_SERVER['HTTP_REFERER'] . '<br>'; #Returns the complete URL of the current page
			echo '5. http_user_agent : ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
			echo '6. script_name : ' . $_SERVER['SCRIPT_NAME'] . '<br>'; #Returns the path of the current script

		//$_REQUEST
			echo '<br>$_REQUEST<br>';
			#the form is up above in html part
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				// colect value of input field
				$name = htmlspecialchars($_REQUEST['fname']);
				if(empty($name)) echo 'Name is empty';
				else echo $name;
			}
			echo '<br>';

		//$_GET
			echo '<br>$_GET<br>';
			$_GET['phoneNumber'] = "087781589338";
			echo 'phone number: ' . $_GET['phoneNumber'];

			//or type in link -> ?phoneNumber=087781589339
			echo 'phone number: ' . $_GET['phoneNumber'];
			//for adding more data use &

			echo '<br>';

		//$_POST
			echo '<br>$_POST<br>';



###################################################################################################################
		// what's $_SESSION $_COOKIE $_ENV ?


		/**
		 * below this, just a test
		 */
		echo '<hr><p style="background-color:#e6b3e8;color:#595fff">';
		$arr = array(1, 2, 3, 4);
		foreach ($arr as &$value) {
			$value = $value * 2;
		}
		// $arr is now array(2, 4, 6, 8)

		// without an unset($value), $value is still a reference to the last item: $arr[3]

		foreach ($arr as $key => $value) {
			// $arr[3] will be updated with each value from $arr...
			echo "<br>{$key} => {$value} ";
			print_r($arr);
		}
		echo '</p>';
	?>
</body>
</html>