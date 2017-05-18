<?php

session_start();

$link = mysqli_connect("localhost:33060","root","1234","construction");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$num = $_POST['num'];
$add = $_POST['add'];
$pass = $_POST['pass'];
$id = $_POST['id'];



if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$res = mysqli_query($link,"insert into user values('$id','$pass','Employee') ")
		or die("Failed to query database".mysqli_error());


	if($res){
	$res1 = mysqli_query($link,"insert into Employee  values('$id','$fname','$lname','$age','$add','$num',NULL,NULL) ")
		or die("Failed to query database".mysqli_error());	
				if($res1){
	header("location:admin.php?error=7");}
	else echo "apurv";}
	else echo "pooja";
		

?>

