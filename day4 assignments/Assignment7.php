<?php
	$name=$_POST['name'];
	$emailid=$_POST['emailid'];

	$server="localhost:1221.1.1";
	$dbname="ass7";
	$username="root";
	$password="";

	$sFlag=0;

	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Server Connection Failure';
		$sFlag=0;
	} else {
		echo 'Server Connection Authorised';
		$sFlag=1;
	}
	echo '<br/>';

	if($sFlag==1) {

		
		$sql="INSERT INTO contact_form (name,email) VALUES('".$name."','".$emailid."');";

	
		$a=mysqli_query($conn,$sql);

		if($a) {
			echo "Data Inserted Successfully";
		} else {
			echo $conn->error;
		}
	}
?>

