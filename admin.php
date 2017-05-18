<!DOCTYPE html>
<!DOCTYPE html>
<?php
session_start();
$y = 0;
$link = mysqli_connect("localhost:33060","root","1234","construction");
$name = array();
$id= array();
$j= 0;
$z=0;
$hour = array();
$date = array();
$cont = array();
$Add = array();
$Age = array();
$i = 0;
if(isset($_GET['error'])){
	$er = $_GET['error'];
	if($er ==7)
		echo "<script type='text/javascript'>alert('Update success');</script>";

}

$namep = array();
$idp= array();
$charge= array();
$status = array();
$Details = array();
$Addp = array();
$DOS = array();
$DOJ = array();


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$res = mysqli_query($link,"select * from Employee ")
		or die("Failed to query database".mysqli_error());


		while($row = mysqli_fetch_assoc($res)){
			
			{
				$fname[$i]= $row['First_Name'];
				$id[$i]= $row['Emp_ID'];
			$lname[$i] = $row['Last_Name'];
			$Age[$i] = $row['Age'];	
			$Add[$i] = $row['Address'];
			$cont[$i] = $row['Contact_No'];
			$date[$i] = $row['Date_Of_Join'];
			$hour[$i] = $row['Hours_Worked'];
				$i++;
			}
			
		}
			
		
		
		$resp = mysqli_query($link,"select * from Project ")
or die("Failed to query database".mysqli_error());

		while($row1 = mysqli_fetch_assoc($resp)){
			
		$idp[$j]= $row1['Pro_ID'];
		$namep[$j] = $row1['Name'];
		$Details{$j}= $row1['Project_Details'];	
		$status[$j] = $row1['Status'];
		$Addp[$j] = $row1['Address'];
		$charge[$j] = $row1['Charge_Per_Hour']; 
		$DOS = $row1['Date_Of_Start'];
		$DOJ = $row1['Date_Of_End'];

			
			$j++;
			
		}
		
		$resc = mysqli_query($link,"select * from Client")
		or die("Failed to query database".mysqli_error());

		while($row3 = mysqli_fetch_assoc($resc)){
		$idc[$z]= $row3['Client_ID'];
		$namec[$z] = $row3['First_Name'];
$lnamec[$z]= $row3['Last_Name'];	
$agec[$z] = $row3['Age'];
		$Addc[$z] = $row3['Address'];
		$contc[$z] = $row3['Contact_No'];
		$z++;
		}
		

?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="jquery-ui.min.js">
</script>
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="Customjs.js">
</script>
<script>
function p(){
document.getElementById("p").style.display = "block";
document.getElementById("e").style.display = "none";
document.getElementById("c").style.display = "none";}
function e(){
document.getElementById("e").style.display = "block";
document.getElementById("p").style.display = "none";
document.getElementById("c").style.display = "none";}
function c(){
document.getElementById("c").style.display = "block";
document.getElementById("e").style.display = "none";
document.getElementById("p").style.display = "none";}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Admin
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="pooja.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body class="Contact">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div class="ttr_menushape1">
<div class="html_content"><p style="margin:0em 0.36em 0em 0em;text-align:Center;line-height:0.695774647887324;"><br style="font-family:'Roboto','Impact';font-weight:700;font-size:0.143em;color:rgba(52,52,52,1);" /></p><p style="margin:0em 0.36em 0.36em 0em;text-align:Center;line-height:0.695774647887324;"><span style="font-family:'Roboto','Impact';font-weight:700;font-size:1.571em;color:rgba(52,52,52,1);">AGENCY</span></p></div>
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav navbar-right">
<li class="ttr_menu_items_parent dropdown"><a href="home.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>

<li class="ttr_menu_items_parent dropdown active"><a href="contact.html" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Settings</a>
<div class="dropdown" style="padding-top:30px;">
   
    <div  class="dropdown-content" >
	<span>Logged in as <?php echo $id[0]; ?></span>
    <button onclick="getElementById('cp').style.display='block'" style="width:200px;">Change Password</button>
    
    <a href="home.php<?php session_destroy(); ?>" >LogOut</a>
  </div>
</div>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>

<div id="cupdate1" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="cupdate.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">client Number:<?php echo $idc[1];?></span>
        <span onclick="document.getElementById('cupdate1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	
	<div class="container">
      <label><b>Client Name</b></label>
      <input type="text" value=<?php echo $namec[1];?> name="namec"  >

      <label><b>Client Id:</b></label>
      <input type="text" value=<?php echo $idc[1];?> name="idc"  >
	  
	  <label><b>Age</b></label>
      <input type="text" value=<?php echo $agec[1];?> name="agec"  >
	  
	  <label><b>Contact Details</b></label>
      <label><b>Phone Number:</b></label><input type="text" value=<?php echo $contc[1];?> name="contactnoc"  >
	  <label><b>Address</b></label><input type="text" value=<?php echo $Addc[1];?> name="Addressc"  >
	  
	  
	  
	  
	  
       <button type="submit">Save</button> 
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>




<div id="pupdate1" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="update2.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Project Number:<?php echo $idp[0];?></span>
        <span onclick="document.getElementById('pupdate1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <?php
	include("pdetails.php");?>
	<div class="container">
      <label><b>Name</b></label>
      <input type="text" value=<?php echo $namep[0];?> name="namep"  >

      <label><b>Project Id:</b></label>
      <input type="text" value=<?php echo $idp[0];?> name="idp"  >
	  
	  <label><b>Project Details</b></label><input type="text" value=<?php echo $Details[0];?> name="details"  >
      
	  <label><b>Address</b></label><input type="text" value=<?php echo $Addp[0];?> name="loc"  >
	  
	  <label><b>Status</b></label>
      <input type="text" value=<?php echo $status[0];?> name="status"  >
	  
	    <label><b>Charge_Per_Hour</b></label>
      <input type="text" value=<?php echo $charge[0];?> name="charge"  >
	  
	  
	  
	  
	  
       <button type="submit">Save</button> 
	   </fieldset>
	   </form>
	   </div>
	   </div>
<div id="cp" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="cp.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:40px">Reset Password</span>
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
	<input type="text" value=<?php echo $id[0]; ?> name="nm"  >
      <label><b>Old Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Old Password" name="op"  required>

      <label><b>New Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Enter Password" name="np" required>
	  
	  <label><b>Repeat Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Repeat New Password" name="rnp" required>
	  
       <button type="submit">Change</button> 
	   </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="eadd" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="add.php">
    <fieldset>
    <div class="imgcontainer">
		
        <span onclick="document.getElementById('eadd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	<label><b>Emplyee Id:</b></label>
      <input type="text" placeholder="EMPxxx" name="id"  >
	  <label><b>Password:</b></label>
      <input type="password" placeholder="*******" name="pass"  >
      <label><b>Name</b></label>
      <input type="text" placeholder="FirstName" name="fname"  >
	  
      <input type="text" placeholder="LastName" name="lname"  >

      
	  
	  <label><b>Age</b></label>
      <input type="text" placeholder="xx years" name="age"  >
	  
	  <label><b>Contact Details</b></label>
      <label></label><input type="text" placeholder="Mobile Number" name="num"  >
	  <label></label><input type="text" placeholder="Address"name="add"  >
	  
	 
	
	  
	  
	  
	  
	  
       <button type="submit">Add</button> 
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="eupdate1" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="update.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[0];?></span>
        <span onclick="document.getElementById('eupdate1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div><?php
	$res6 = mysqli_query($link,"select sum(Hrs_Worked) as th1 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row6 = mysqli_fetch_assoc($res6);
		$th = $row6['th1'];
$res5 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T1 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row5 = mysqli_fetch_assoc($res5);
		$salary = $row5['T1'];?>
	<div class="container">
      <label><b>Name</b></label>
      <input type="text" value=<?php echo $fname[0];?> name="name"  >

      <label><b>Emplyee Id:</b></label>
      <input type="text" value=<?php echo $id[0];?> name="id"  >
	  
	  <label><b>Age</b></label>
      <input type="text" value=<?php echo $Age[0];?> name="age"  >
	  
	  <label><b>Contact Details</b></label>
      <label><b>Phone Number:</b></label><input type="text" value=<?php echo $cont[0];?> name="contactno"  >
	  <label><b>Address</b></label><input type="text" value=<?php echo $Add[0];?> name="Address"  >
	  
	  <label><b>Date of Joining</b></label>
      <input type="text" value=<?php echo $date[0];?> name="datejoin"  >
	  
	  <label><b>Hours Worked</b></label>
      <input type="text" value=<?php echo $hour[0];?> name="Hoursworked"  >
	  
	  
	  
	  
	  
       <button type="submit">Save</button> 
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="eupdate2" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="update.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[1];?></span>
        <span onclick="document.getElementById('eupdate2').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
      <label><b>Name</b></label>
      <input type="text" value=<?php echo $fname[1];?> name="name"  >

      <label><b>Emplyee Id:</b></label>
      <input type="text" value=<?php echo $id[1];?> name="id"  >
	  
	  <label><b>Age</b></label>
      <input type="text" value=<?php echo $Age[1];?> name="age"  >
	  
	  <label><b>Contact Details</b></label>
      <label><b>Phone Number:</b></label><input type="text" value=<?php echo $cont[1];?> name="contactno"  >
	  <label><b>Address</b></label><input type="text" value=<?php echo $Add[1];?> name="Address"  >
	  
	  <label><b>Date of Joining</b></label>
      <input type="text" value=<?php echo $date[1];?> name="datejoin"  >
	  
	  <label><b>Hours Worked</b></label>
      <input type="text" value=<?php echo $hour[1];?> name="Hoursworked"  >
	  
	  
	  
	  
	  
       <button type="submit">Save</button> 
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="eupdate3" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="update.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[2];?></span>
        <span onclick="document.getElementById('eupdate3').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div><?php
	$res9 = mysqli_query($link,"select sum(Hrs_Worked) as th2 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP103'")
		or die("Failed to query database".mysqli_error());
		
		$row9 = mysqli_fetch_assoc($res9);
		$th = $row9['th2'];
$res10 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T2 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP103'")
		
		or die("Failed to query database".mysqli_error());
		$row10 = mysqli_fetch_assoc($res10);
		$salary = $row10['T2'];?>
	<div class="container">
      <label><b>Name</b></label>
      <input type="text" value=<?php echo $fname[2];?> name="name"  >

      <label><b>Emplyee Id:</b></label>
      <input type="text" value=<?php echo $id[2];?> name="id"  >
	  
	  <label><b>Age</b></label>
      <input type="text" value=<?php echo $Age[2];?> name="age"  >
	  
	  <label><b>Contact Details</b></label>
      <label><b>Phone Number:</b></label><input type="text" value=<?php echo $cont[2];?> name="contactno"  >
	  <label><b>Address</b></label><input type="text" value=<?php echo $Add[2];?> name="Address"  >
	  
	  <label><b>Date of Joining</b></label>
      <input type="text" value=<?php echo $date[2];?> name="datejoin"  >
	  
	  <label><b>Hours Worked</b></label>
      <input type="text" value=<?php echo $hour[2];?> name="Hoursworked"  >
	  
	  
	  
	  
	  
       <button type="submit">Save</button> 
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>

<div id="pdetails1" style="display:none;"class="modal">
<?php
	include("pdetails.php");?>
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);width:80%;height:550px;">
  <form>
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Project Number:<?php echo $idp[0];?></span>
        <span onclick="document.getElementById('pdetails1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Project Id: <?php echo $idp[0];?></b></label>
      <label><b>Name <?php echo $namep[0];?></b></label></br>
       
      
	  
	  <label><b>Project Location:<?php echo $Add[0];?> </b></label>
	  <label><b>Charge Per Hour:<?php echo $charge[0];?> </b></label>
	  <label><b>Status:<?php echo $status[0];?> </b></label>
	  
	  
	  
	  <!--label><b>Date of Joining:<?php echo $date[0];?></b></label-->
     
	  
	 
	  <label><h4>Charge::<?php echo $salary1;?></h4></label></br>
	  <label><h4>Total Hours taken:<?php echo $th1;?></h4></label>
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Employee Details of  <?php echo $idp[0]; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Employee</th>
        <th>Hours Worked</th>
		<th>Positions</th>
        
      </tr>
    </thead>
	<tbody>
	<?php
	$e1 = mysqli_query($link,"select * from Employee,Works_on,Job where  Works_on.Emp_ID = Employee.Emp_ID  and Employee.Emp_ID=Job.Emp_ID and Works_on.Project_ID='01'")
		or die("Failed to query database".mysqli_error());
		
;		while($r1 = mysqli_fetch_assoc($e1)){
			
		$ename= $r1['First_Name'];
		$ehour = $r1['Hrs_Worked'];
		$desi = $r1['Designation'];
		//$dur = $r1['Date_Of_End']; 
		//$dur1 = $r1['Date_Of_Start']; 
		
		echo "<tr>
        <td>$ename</td>
        <td>$ehour</td>
        <td>$desi</td>
       
      </tr>";
				

			
			$y++;
			
		}?>
    </tbody>
      
  </table>
</div>

	  
	  
</div>

     
	  
	  
	  
	  
	  
       
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="edetails1" style="display:none;"class="modal">
<?php
	$res6 = mysqli_query($link,"select sum(Hrs_Worked) as th1 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row6 = mysqli_fetch_assoc($res6);
		$th1 = $row6['th1'];
$res5 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T1 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row5 = mysqli_fetch_assoc($res5);
		$salary1= $row5['T1'];?>
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);width:80%;height:550px;">
  <form>
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[0];?></span>
        <span onclick="document.getElementById('edetails1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Emplyee Id: <?php echo $id[0];?></b></label>
      <label><b>Name <?php echo $fname[0];?></b></label></br>
       <label><b>Age<?php echo $Age[0];?></b></label></br>
      
	  <label><b>Contact Details</b></label></br>
      <label><b>Phone Number:<?php echo $cont[0];?></b></label>
	  <label><b>Address:<?php echo $Add[0];?> </b></label>
	  
	  <!--label><b>Date of Joining:<?php echo $date[0];?></b></label-->
     
	  
	 
	  <label><h4>Salary:<?php echo $salary1;?></h4></label></br>
	  <label><h4>Total Hours worked:<?php echo $th1;?></h4></label>
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Project Details of  <?php echo $fname[0]; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
	  <th>Project_ID</th>
        <th>Project</th>
        <th>Hours Worked</th>
        <th>Location</th>
        
        
      </tr>
    </thead>
	<tbody>
	<?php
	$res1 = mysqli_query($link,"select * from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		
;		while($row2 = mysqli_fetch_assoc($res1)){
		$pid  =$row2['Pro_ID'];	
		$Pname= $row2['Name'];
		$phour = $row2['Hrs_Worked'];
		$ploca = $row2['Address'];
		
		echo "<tr>
		<td>$pid</td>
        <td>$Pname</td>
        <td>$phour</td>
        
        <td>$ploca</td>
       
      </tr>";
				

			
			$y++;
			
		}?>
    </tbody>
      
  </table>
</div>

	  
	  
</div>

     
	  
	  
	  
	  
	  
       
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="cdetails1" style="display:none;"class="modal">
<?php
	
include("pdetails.php");?>
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);width:80%;height:550px;">
  <form>
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Client Number:<?php echo $idc[1];?></span>
        <span onclick="document.getElementById('edetails1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Client Id: <?php echo $idc[1];?></b></label>
      <label><b>Name <?php echo $namec[1];?></b></label></br>
       <label><b>Age<?php echo $agec[1];?></b></label></br>
      
	  <label><b>Contact Details</b></label></br>
      <label><b>Phone Number:<?php echo $contc[1];?></b></label></br>
	  <label><b>Address:<?php echo $Addc[1];?> </b></label>
	  
	  <!--label><b>Date of Joining:<?php echo $date[0];?></b></label-->
     
	  
	 
	  <label><h4>Total Charge to be paid:<?php echo $salary1;?></h4></label></br>
	  
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Project Details of  <?php echo $namec[1]; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
	  <th>Project_ID</th>
        <th>Project</th>
  
        <th>Location</th>
        
        
      </tr>
    </thead>
	<tbody>
	<?php
	$res1 = mysqli_query($link,"select * from Project,Request where  Request.Project_ID = Project.Pro_ID  and Request.Client_ID='CLI111'")
		or die("Failed to query database".mysqli_error());
		
;		while($row2 = mysqli_fetch_assoc($res1)){
		$pid  =$row2['Pro_ID'];	
		$Pname= $row2['Name'];
	
		$ploca = $row2['Address'];
		
		echo "<tr>
		<td>$pid</td>
        <td>$Pname</td>
       
        
        <td>$ploca</td>
       
      </tr>";
				

			
			$y++;
			
		}?>
    </tbody>
      
  </table>
</div>

	  
	  
</div>

     
	  
	  
	  
	  
	  
       
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="edetails2" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);width:80%;height:550px;">
  <?php
	$res7 = mysqli_query($link,"select sum(Hrs_Worked) as th2 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP102'")
		or die("Failed to query database".mysqli_error());
		$row7 = mysqli_fetch_assoc($res7);
		$th2 = $row7['th2'];
$res8 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP102'")
		or die("Failed to query database".mysqli_error());
		$row8= mysqli_fetch_assoc($res8);
		$salary = $row8['T'];?>
  <form>
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[1];?></span>
        <span onclick="document.getElementById('edetails2').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Emplyee Id: <?php echo $id[1];?></b></label>
      <label><b>Name <?php echo $fname[1];?></b></label></br>
       <label><b>Age<?php echo $Age[1];?></b></label></br>
      
	  <label><b>Contact Details</b></label></br>
      <label><b>Phone Number:<?php echo $cont[1];?></b></label>
	  <label><b>Address:<?php echo $Add[1];?> </b></label>
	  
	  <!--label><b>Date of Joining:<?php echo $date[1];?></b></label-->
     
	  
	 
	  <label><h4>Salary:<?php echo $salary;?></h4></label></br>
	  <label><h4>Total Hours worked:<?php echo $th2;?></h4></label>
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Project Details of  <?php echo $fname[1]; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
         <th>Project_ID</th>
        <th>Project</th>
        <th>Hours Worked</th>
        <th>Location</th>
        
      </tr>
    </thead>
	<tbody>
	<?php
	$res1 = mysqli_query($link,"select * from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP102'")
		or die("Failed to query database".mysqli_error());
		
;		while($row2 = mysqli_fetch_assoc($res1)){
			
		$Pname= $row2['Name'];
		$phour = $row2['Hrs_Worked'];
		$dur = $row2['Date_Of_End']; 
		$dur1 = $row2['Date_Of_Start']; 
		
		echo "<tr>
        <td>$pid</td>
        <td>$Pname</td>
        <td>$phour</td>
        
        <td>$ploca</td>
       
      </tr>";
				

			
			$y++;
			
		}?>
    </tbody>
      
  </table>
</div>

	  
	  
</div>

     
	  
	  
	  
	  
	  
       
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<div id="edetails3" style="display:none;"class="modal">
<?php
	$res9 = mysqli_query($link,"select sum(Hrs_Worked) as th3 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP103'")
		or die("Failed to query database".mysqli_error());
		
		$row9 = mysqli_fetch_assoc($res9);
		$th3 = $row9['th3'];
$res10 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T3 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP103'")
		
		or die("Failed to query database".mysqli_error());
		$row10 = mysqli_fetch_assoc($res10);
		$salary3 = $row10['T3'];?>
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);width:80%;height:550px;">
  <form>
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id[2];?></span>
        <span onclick="document.getElementById('edetails3').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Emplyee Id: <?php echo $id[2];?></b></label>
      <label><b>Name <?php echo $fname[2];?></b></label></br>
       <label><b>Age<?php echo $Age[2];?></b></label></br>
      
	  <label><b>Contact Details</b></label></br>
      <label><b>Phone Number:<?php echo $cont[2];?></b></label>
	  <label><b>Address:<?php echo $Add[2];?> </b></label>
	  
	  <!--label><b>Date of Joining:<?php echo $date[2];?></b></label-->
     
	  
	 
	  <label><h4>Salary:<?php echo $salary3;?></h4></label></br>
	  <label><h4>Total Hours worked:<?php echo $th3;?></h4></label>
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Project Details of  <?php echo $fname[2]; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
         <th>Project_ID</th>
        <th>Project</th>
        <th>Hours Worked</th>
        <th>Location</th>
        
      </tr>
    </thead>
	<tbody>
	<?php
	$res1 = mysqli_query($link,"select * from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP103'")
		or die("Failed to query database".mysqli_error());
		
;		while($row2 = mysqli_fetch_assoc($res1)){
			
		$Pname= $row2['Name'];
		$phour = $row2['Hrs_Worked'];
		$dur = $row2['Date_Of_End']; 
		$dur1 = $row2['Date_Of_Start']; 
		
		echo "<tr>
        <td>$pid</td>
        <td>$Pname</td>
        <td>$phour</td>
        
        <td>$ploca</td>
       
      </tr>";
				

			
			$y++;
			
		}?>
    </tbody>
      
  </table>
</div>

	  
	  
</div>

     
	  
	  
	  
	  
	  
       
	   
   

  </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>

<header id="ttr_header" style="background:url(images/download.jpg);height:1100px">
<div id="ttr_header_inner">
<div class="ttr_headershape01" style="display:block;height:500px;">

<div class="html_content"  ><div style="margin:0.36em 0em 0.36em 1.43emtext-align:left;"><button onclick=e() style="font-family:'Ubuntu','Arial';font-size:2.286em;color:rgba(255,255,255,1); width:185px;">Employees</button>

<button style="font-family:'Ubuntu','Arial';font-size:2.286em;color:rgba(255,255,255,1);width:180px;" onclick=p()>Projects</button>

<button style="font-family:'Ubuntu','Arial';font-size:2.286em;color:rgba(255,255,255,1);width:180px;" onclick=c()>Client</button></div>


<!--></-->

<div  class="accordion" id="e" style="display:none;width:70%;padding-left:40px;border:10px solid white;padding-right:40px;border-radius:5px;float:left;">
  
  <button onclick="getElementById('eadd').style.display='block'" style="width:200px;">Add Employee</button>
  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $id[0];?></a>
		  
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $fname[0] ; echo $lname[0]; ?></h3></br><h4>Address : - <?php echo $Add[0] ;?>      Contact No. : - <?php echo $cont[0];?></h4></br><h4>Age : - <?php echo $Age[0];?> Date : - <?php echo $date[0]; ?></br><h4>Hours Worked : - <?php echo $hour[0];?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate1').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails1').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><?php echo $id[1]?></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><h3>Name : - <?php echo $fname[1]; ?></h3></br><h4>Address : - <?php echo $Add[1] ?>      Contact No. : - <?php echo $cont[1] ?></h4></br><h4>Age : - <?php echo $Age[1]?> Date : - <?php echo $date[1] ?></br><h4>Hours Worked : - <?php echo $hour[1]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate2').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails2').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><?php echo $id[2]?></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
       <div class="panel-body"><h3>Name : - <?php echo $fname[2]; ?></h3></br><h4>Address : - <?php echo $Add[2] ?>      Contact No. : - <?php echo $cont[2] ?></h4></br><h4>Age : - <?php echo $Age[2]?> Date : - <?php echo $date[2] ?></br><h4>Hours Worked : - <?php echo $hour[2]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate3').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails3').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><?php echo $id[3];?></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[3]; ?></h3></br><h4>Address : - <?php echo $Add[3] ?>      Contact No. : - <?php echo $cont[3] ?></h4></br><h4>Age : - <?php echo $Age[3]?> Date : - <?php echo $date[3] ?></br><h4>Hours Worked : - <?php echo $hour[3]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><?php echo $id[4];?></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[4]; ?></h3></br><h4>Address : - <?php echo $Add[4] ?>      Contact No. : - <?php echo $cont[4] ?></h4></br><h4>Age : - <?php echo $Age[4]?> Date : - <?php echo $date[4] ?></br><h4>Hours Worked : - <?php echo $hour[4]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><?php echo $id[5];?></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[5]; ?></h3></br><h4>Address : - <?php echo $Add[5] ?>      Contact No. : - <?php echo $cont[5] ?></h4></br><h4>Age : - <?php echo $Age[5]?> Date : - <?php echo $date[5] ?></br><h4>Hours Worked : - <?php echo $hour[5]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><?php echo $id[6];?></a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[6]; ?></h3></br><h4>Address : - <?php echo $Add[6] ?>      Contact No. : - <?php echo $cont[6] ?></h4></br><h4>Age : - <?php echo $Age[6]?> Date : - <?php echo $date[6] ?></br><h4>Hours Worked : - <?php echo $hour[6]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><?php echo $id[7];?></a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[7]; ?></h3></br><h4>Address : - <?php echo $Add[7] ?>      Contact No. : - <?php echo $cont[7] ?></h4></br><h4>Age : - <?php echo $Age[7]?> Date : - <?php echo $date[7] ?></br><h4>Hours Worked : - <?php echo $hour[7]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><?php echo $id[8];?></a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[8]; ?></h3></br><h4>Address : - <?php echo $Add[8] ?>      Contact No. : - <?php echo $cont[8] ?></h4></br><h4>Age : - <?php echo $Age[8]?> Date : - <?php echo $date[8] ?></br><h4>Hours Worked : - <?php echo $hour[8]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><?php echo $id[9];?></a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse in">
        <div class="panel-body"><h3>Name : - <?php echo $fname[9]; ?></h3></br><h4>Address : - <?php echo $Add[9] ?>      Contact No. : - <?php echo $cont[9] ?></h4></br><h4>Age : - <?php echo $Age[9]?> Date : - <?php echo $date[9] ?></br><h4>Hours Worked : - <?php echo $hour[9]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <a href="eupdate.php">Update</a>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4></div>
      </div>
    </div>
  </div> 
</div>
</div>
<!--></-->

<!--></-->
<!--></-->
<div  class="accordion1" id="p" style="display:none;width:70%;padding-left:40px;border:10px solid white;padding-right:40px;border-radius:5px;float:right;">
  
  
  <div class="panel-group" id="accordion1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse11"><?php echo $idp[0];?></a>
		  
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namep[0]; ?></h3></br><h4>Address : - <?php echo $Addp[0];?>     Details : - <?php echo $Details[0]; ?></h4></br><h4>Charge : - <?php echo $charge[0]?> Status : - <?php echo $status[0] ?></br></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('pupdate1').style.display='block'">Update</button>
		  <button onclick = "getElementById('pdetails1').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse12"><?php echo $idp[1];?></a>
		  
        </h4>
      </div>
      <div id="collapse12" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namep[1]; ?></h3></br><h4>Address : - <?php echo $Addp[1];?>     Details : - <?php echo $Details[1]; ?></h4></br><h4>Charge : - <?php echo $charge[1]?> Status : - <?php echo $status[1] ?></br><h4>Date of Start : - <?php echo $DOS[1]?></h4><h4>Date of End : - <?php echo $DOJ[1]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse13"><?php echo $idp[2];?></a>
		  
        </h4>
      </div>
      <div id="collapse13" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namep[2]; ?></h3></br><h4>Address : - <?php echo $Addp[2];?>     Details : - <?php echo $Details[2]; ?></h4></br><h4>Charge : - <?php echo $charge[2]?> Status : - <?php echo $status[2] ?></br><h4>Date of Start : - <?php echo $DOS[2]?></h4><h4>Date of End : - <?php echo $DOJ[2]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse14"><?php echo $idp[3];?></a>
		  
        </h4>
      </div>
      <div id="collapse14" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namep[3]; ?></h3></br><h4>Address : - <?php echo $Addp[3];?>     Details : - <?php echo $Details[3]; ?></h4></br><h4>Charge : - <?php echo $charge[3]?> Status : - <?php echo $status[3] ?></br><h4>Date of Start : - <?php echo $DOS[3]?></h4><h4>Date of End : - <?php echo $DOJ[3]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse15"><?php echo $idp[4];?></a>
		  
        </h4>
      </div>
      <div id="collapse15" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namep[4]; ?></h3></br><h4>Address : - <?php echo $Addp[4];?>     Details : - <?php echo $Details[4]; ?></h4></br><h4>Charge : - <?php echo $charge[4]?> Status : - <?php echo $status[4] ?></br><h4>Date of Start : - <?php echo $DOS[4]?></h4><h4>Date of End : - <?php echo $DOJ[4]?></h4> </div>
		<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>
	</div>
	</div>

<!--></-->
<!--></-->
<div  class="accordion2" id="c" style="display:none;width:70%;padding-left:40px;border:10px solid white;padding-right:40px;border-radius:5px;">
  <h2>Clients</h2>
  
  <div class="panel-group" id="accordion2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse16" data-parent="#accordion2" href="#collapse16"><?php echo $idc[0];?></a>
		  
        </h4>
      </div>
      <div id="collapse16" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namec[1] ?></h3></br><h4>Address : - <?php echo $Addc[1] ?>      Contact No. : - <?php echo $contc[1] ?></h4></br><h4>Age : - <?php echo $agec[1]?> </div>
<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('cupdate1').style.display='block'">Update</button>
		  <button onclick = "getElementById('cdetails1').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse17"><?php echo $idc[1];?></a>
		  
        </h4>
      </div>
      <div id="collapse17" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namec[1] ?></h3></br><h4>Address : - <?php echo $Addc[1] ?>      Contact No. : - <?php echo $contc[1] ?></h4></br><h4>Age : - <?php echo $agec[1]?> </div>
<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse18"><?php echo $idc[2];?></a>
		  
        </h4>
      </div>
      <div id="collapse18" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namec[2] ?></h3></br><h4>Address : - <?php echo $Addc[2] ?>      Contact No. : - <?php echo $contc[2] ?></h4></br><h4>Age : - <?php echo $agec[2]?> </div>
<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse19"><?php echo $idc[3];?></a>
		  
        </h4>
      </div>
      <div id="collapse19" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namec[3] ?></h3></br><h4>Address : - <?php echo $Addc[3] ?>      Contact No. : - <?php echo $contc[3] ?></h4></br><h4>Age : - <?php echo $agec[3]?> </div>
<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse20"><?php echo $idc[4];?></a>
		  
        </h4>
      </div>
      <div id="collapse20" class="panel-collapse collapse in">
	    
        <div class="panel-body"><h3>Name : - <?php echo $namec[4] ?></h3></br><h4>Address : - <?php echo $Addc[4] ?>      Contact No. : - <?php echo $conc[4] ?></h4></br><h4>Age : - <?php echo $agec[4]?> </div>
<div class="panel-heading">
        <h4 class="panel-title">
		  <button onclick = "getElementById('eupdate').style.display='block'">Update</button>
		  <button onclick = "getElementById('edetails').style.display='block'">Full Details</button>
        </h4>
      </div>
      </div>
    </div>


</div>

<!--></-->
</div>
</div>
</header>

<div style="height:0px;padding-top:50px;width:0px;overflow:hidden;"></div>
<footer id="ttr_footer">
<div class="ttr_footerHome_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<div class="ttr_footerHome_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;left:0px;"></div>
<div class="html_content" style="padding-left:20px;"><p style="margin:0em 0em 0.36em 0em;text-align:Center;"><br style="font-family:'Open Sans','Arial';font-size:1.786em;color:rgba(255,255,255,1);" /></p><p style="margin:0em 0em 0.36em 0em;text-align:left;"><span style="font-family:'Roboto','Arial';font-size:1.786em;color:rgba(255,255,255,1);">Stay Connected With Us</span></p><p style="margin:0em 0em 0.36em 0em;text-align:left;float:right;padding-right:30px;"></p></div>

<div class="html_content" style="padding-left:0px;float:right;"></div>
<div style = "padding-left:80px;">
<a href="http://www.facebook.com/TemplateToaster" class="ttr_footer_facebook" target="_self" >
</a>
<a href="http://www.templatetoaster.com"class="ttr_footer_linkedin" target="_self" >
</a>
<a href="http://twitter.com/templatetoaster"class="ttr_footer_twitter" target="_self" >
</a>
<a href="http://www.templatetoaster.com"class="ttr_footer_googleplus" target="_self" >
</a>
</div>
<div style = "padding-left:600px;top:30px;
left:28.97%;
margin:0;
height:100px;
width:200px;
display:block;
position:absolute;
background-size : 100% 100%;
transform:rotate(0deg);
-moz-transform:rotate(0deg);
-webkit-transform:rotate(0deg);
-o-transform:rotate(0deg);
}" >
<div class="footer_content">
<div id ="footer-content" style="font-family:'Roboto','Arial';font-size:1.786em;color:rgba(255,255,255,1);">Contact  Us</br></div>
<div id ="footer-content" style = "font-size:1.0em;color:rgba(255,255,255,0.9);">+91-81039-17075</br>Sec :24,Tuta</br>Naya Raipur,492002</br>Chhattisgarh</div>
</div>
</div>

<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div style="float:right;padding:right:20px
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>

</div>
<div class="ttr_footer_bottom_footer">
<div class="ttr_footer_bottom_footer_inner">
<div id="ttr_footer_designed_by_links" style="text-align:left;padding-left:20px">
<a href="http://templatetoaster.com" target="_self" >
Website
</a>
<span id="ttr_footer_designed_by">
by AP_DreamBuilders
</span>
</div>

</div>
</footer>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
<script type="text/javascript">
WebFontConfig = {
google: { families: [ 'Roboto:700','Ubuntu','Ubuntu:700','Open+Sans','Roboto','Open+Sans:700','Roboto:500'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
</script>
</body>
</html>
