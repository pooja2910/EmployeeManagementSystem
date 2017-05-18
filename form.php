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

$username = ($_POST['uname']);
$password = ($_POST['psw']);

$res = mysqli_query($link,"select * from user where ID = '$username' and Password = '$password'")
		or die("Failed to query database".mysqli_error());

if ( $res->num_rows == 0 ){ // User doesn't exist
    
echo "User with that email doesn't exist!";}
else{
		$row = mysqli_fetch_assoc($res);
		$_SESSION['uname']=$row['ID'];
		
		$url = 'admin.php';
		$url .= "?name=$row[ID]";
		$url2 = 'home2.php';
		$url2 .= "?name=$row[ID]";
		$url3 = 'asa.php';
		$url3 .= "?name=$row[ID]";
if($row['ID'] == $username && $row['Password'] == $password && $row['Role']== "Administrator")
{
	//if($row['role'])
	header('location:'.$url);
}

else if($row['ID'] == $username && $row['Password'] == $password && $row['Role']== "Employee")
{
	//if($row['role'])
	header('location:'.$url2);
}
else if($row['ID'] == $username && $row['Password'] == $password && $row['Role']== "Client")
{
	//if($row['role'])
	header('location:'.$url3);
}
else
echo "failed to login";}

}

		

		



	
	
	mysqli_close($link);
?>