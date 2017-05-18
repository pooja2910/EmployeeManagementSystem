
<?php

#session_start();
require("details2.php");
$link2 = mysqli_connect("localhost:33060","root","1234","apurv");



if (!$link2) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{
function getdata($id)
{
$res = mysqli_query($link2,"select * from pooja where name = '$id'")
		or die("Failed to query database".mysqli_error());

		$array = array();
		$row = mysqli_fetch_assoc($res);
		while($row)
		{
			$array['name']=row['name'];
			$array['password']=row['pass'];
		}
return $array;}
		

}


		

		



	
	
	mysqli_close($link);
?>







