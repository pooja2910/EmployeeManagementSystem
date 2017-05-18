<?php

session_start();

$link = mysqli_connect("localhost:33060","root","1234","construction");



if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{



$idp = $_POST['idc'];
$namep = $_POST['namec'];
$details = $_POST['Addressc'];
$loc = $_POST['contactnoc'];
$stat= $_POST['agec'];




		$res1 = mysqli_query($link,"update Client set First_Name= '$namep',Address = '$details',Age='$stat' ,Contact_No = '$loc' where Client_id = 'CLI111'")
		or die("Failed to query database".mysqli_error());

if($res1){
header("location:admin.php?name='$name',status='updated'");}
mysqli_close($link);
}

		

		



	
	

?>