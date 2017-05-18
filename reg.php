<?php


session_start();

$link = mysqli_connect("localhost:33060","root","1234","construction");
$fname = $_POST['fcname'];
$lname = $_POST['flname'];
$age = $_POST['agec'];
$num = $_POST['Cnoc'];
$add = $_POST['Addc'];
$pass = $_POST['psw'];
$id = $_POST['idc'];
$loc= $_POST['Addp'];
$tit= $_POST['tit'];
$det= $_POST['det'];



if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$res = mysqli_query($link,"insert into user values('$id','$pass','Client') ")
		or die("Failed to query database".mysqli_error());


	if($res){
	$res1 = mysqli_query($link,"insert into Client  values('$id','$fname','$lname','$age','$add','$num') ")
		or die("Failed to query database".mysqli_error());
			$res2 = mysqli_query($link,"insert into Project values('11','$tit','$det','$loc',NULL,NULL,NULL,NULL) ")
		or die("Failed to query database".mysqli_error());
				if($res1){
	header("location:home.php?error=8");}
	else echo "apurv";}
	else echo "pooja";
		

?>



