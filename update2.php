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
$id = $_POST['id'];
$name = $_POST['name'];
$cont = $_POST['contactno'];
$add = $_POST['Address'];
$age= $_POST['age'];

$hour = $_POST['Hoursworked'];

$idp = $_POST['idp'];
$namep = $_POST['namep'];
$details = $_POST['details'];
$loc = $_POST['loc'];
$stat= $_POST['status'];

$charge = $_POST['charge'];


		$res1 = mysqli_query($link,"update Project set Name= '$namep',Project_Details = '$details',Status = '$stat', Address = '$loc',Charge_Per_Hour= '$charge' where Pro_id = '$idp'")
		or die("Failed to query database".mysqli_error());

if($res1){
header("location:admin.php?name='$name',status='updated'");}
mysqli_close($link);
}

		

		



	
	

?>