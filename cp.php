<?php
//echo "pooja";

$link = mysqli_connect("localhost:33060","root","1234","construction");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

session_start();




if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$password = ($_POST['op']);
$x = ($_POST['np']);
$y = ($_POST['rnp']);
$z = ($_POST['nm']);

$res = mysqli_query($link,"select * from user where   ID= '$z' and Password= '$password'")
		or die("Failed to query database".mysqli_error());

//if ( $res->num_rows == 0 ){ // User doesn't exist
    
//echo "User with that email doesn't exist!";}
//else{
		$row = mysqli_fetch_assoc($res);
		if( $row['Password'] == $password){
		
		
		
		if(strlen($x)>6 ){
			echo "Correct length";
		if($x == $y){
			echo "Password Matched";
			if($q = mysqli_query($link,"UPDATE user SET Password='$x' where ID = '$z'")
				or die("Failed to query database".mysqli_error()))
			{
				$url = 'admin.php';
		$url .= "?name=$row[ID]";
		$url2 = 'home2.php';
		$url2 .= "?name=$row[ID]";
		$url3 = 'asa.php';
		$url3 .= "?name=$row[ID]";
				if($row['Role']== "Administrator")
{
	//if($row['role'])
	header('location:'.$url);
}

else if(  $row['Role']== "Employee")
{
	//if($row['role'])
	header('location:'.$url2);
}
else if(  $row['Role']== "Client")
{
	//if($row['role'])
	header('location:'.$url3);
}
else
echo "failed to login";
			}
	
		}else
			echo "not done";
		}
		else
		"need longer password";}
		else
		echo "Enter previous password correctly";
	}




?>