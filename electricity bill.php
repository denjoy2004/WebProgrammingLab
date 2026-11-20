<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill</title>
</head>
<body>

<h1>Electricity Bill</h1>
<form method="POST" action="registration.php">
	<label>Name</label>
	<input type="text" name="name" id="name"><br><br>
	
	<label>House No.</label>
	<input type="text" name="houseno" id="houseno"><br><br>
	
	<label>Previous Month Consumption</label>
	<input type="number" name="prev" id="prev"><br><br>
	
	<label>Current Month Consumption</label>
	<input type="number" name="current" id="current"><br><br>
	
	<input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST['name'];
	$house=$_POST['houseno'];
	$pre=$_POST['pre'];
	$current=$_POST['current'];
	$units=$prev-$current;
	if($unit<0){
		echo"Invalid Consumption";	
	}
	else {
		if($units<=100){
			$bill=$units*1.50;
		}
		elseif($units<=200 & $units >100){
			$bill=(100*1.50)+(($units-100)*2.50);
		}
		elseif($units<=300 & $units >200){
			$bill=(100*1.50)+(100*2.50)+(($units-200)*3.50);
		}
		else{
			$bill=(100*1.50)+(100*2.50(100*3.50)+)+(($units-300)*5);
		}
	}
	echo"<h2>Electricity Bill</h2>:"
	echo"<Name : $name<br>";
	echo"<House No. : $house<br>";
	echo"<Previous Month Consumption : $prev<br>";
	echo"<Previous Month Consumption : $current<br>";
	echo"<Total Units Used : $units<br>";
	echo"<Total Bill: Rs. $bill<br>";
	
}

?>

