<!DOCTYPE html>
<?php
session_start();
$link = mysqli_connect("localhost:33060","root","1234","construction");
$id="";
$name="";


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

	$res6 = mysqli_query($link,"select sum(Hrs_Worked) as th1 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row6 = mysqli_fetch_assoc($res6);
		$th1 = $row6['th1'];
$res5 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T1 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		$row5 = mysqli_fetch_assoc($res5);
		$salary1= $row5['T1'];


$id = $_GET["name"];

$res = mysqli_query($link,"select * from Employee E,user U where E.Emp_ID=U.ID and ID = 'EMP102'")
		or die("Failed to query database".mysqli_error());
$row = mysqli_fetch_assoc($res);
$name = $row['First_Name'];
$r= $row['Emp_ID'];


	$res6 = mysqli_query($link,"select sum(Hrs_Worked) as th1 from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='$r'")
		or die("Failed to query database".mysqli_error());
		$row6 = mysqli_fetch_assoc($res6);
		$th1 = $row6['th1'];
$res5 = mysqli_query($link,"select Hours_Worked*Salary_Per_Hour as T1 from Employee,Job where Employee.Emp_Id=Job.Emp_ID  and Employee.Emp_ID='$r'")
		or die("Failed to query database".mysqli_error());
		$row5 = mysqli_fetch_assoc($res5);
		$salary1= $row5['T1'];



$res1 = mysqli_query($link,"select * from Employee where First_Name = '$name'")
		or die("Failed to query database".mysqli_error());
$row2 = mysqli_fetch_assoc($res1); 
	$fname= $row['First_Name'];
				$id= $row['Emp_ID'];
			$lname = $row['Last_Name'];
			$Age = $row['Age'];	
			$Add = $row['Address'];
			$cont= $row['Contact_No'];
			$date = $row['Date_Of_Join'];
			$hour = $row['Hours_Worked'];


?>
<html>
<head>
<meta charset="utf-8">
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
	document.getElementById('ppd').style.display='block';
	document.getElementById('pd').style.display='none';
	
}
function f(){
	document.getElementById('pd').style.display='block';
	document.getElementById('ppd').style.display='none';
	
}
</script
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Employee
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="Pooja.css" type="text/css" media="screen"/>
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
<body class="Home">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>
<div id="cpe" style="display:none;"class="modal">
  <div  class="modal-content animate" style="border-top: 10px solid rgba(0,203,203,1);">
  <form method = "POST" action="cp.php">
    <fieldset>
    <div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:40px">Reset Password</span>
        <span onclick="document.getElementById('cpe').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
	<input type="text" value=<?php echo $id; ?> name="nm"  >
      <label><b>Old Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Old Password" name="op"  required>

      <label><b>New Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Enter Password" name="np" required>
	  
	  <label><b>Repeat Password<span style="color:red;">*</span></b></label>
      <input type="password" placeholder="Repeat New Password" name="rnp" required>
	  <input type="submit">
       
	   </div>
    
	<fieldset>
  </form>
  
   </div>
	
</div>
<header id="ttr_header" style="background:url(images/download.jpg);">
<div id="ttr_header_inner">

<div class="innermenu"><nav id="ttr_menu" class="navbar-default navbar">
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

<html>
<head>
<!--style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style-->
</head>
<body>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>

<li class="ttr_menu_items_parent dropdown active ">
	<a class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Settings</a>
<div class="dropdown" style="padding-top:50px;">
   
    <div  class="dropdown-content" >
	<span>Logged in as <?php echo $name; ?></span>
    <button onclick="getElementById('cpe').style.display='block'" style="width:200px;height:30px;">Change Password</button>
    
    <a href="home.php<?php session_destroy(); ?>" >LogOut</a>
  </div>
</div><span class="menuchildicon"></span></a>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>

</div>
<div class="ttr_headershape01">
<div class="html_content" style="padding-top:10px;"><p style="margin:0.36em 0em 0.36em 3.0em;text-align:center;;"><span style="font-family:'Georgia','Arial';font-size:3.286em;color:black;">Welcome</span><span style="font-family:'Georgia','Arial';font-size:3.286em;color:rgba(0,203,203,1);"> <?php echo $name;?>!!</span></p><p style="margin:0.36em 0em 0.36em 1.43em;text-align:Center;"><br style="font-family:'Ubuntu','Arial';font-size:1.143em;color:rgba(255,101,1,1);" /></p><p style="margin:0.36em 0em 0.36em 1.43em;text-align:Center;"><span style="font-family:'Ubuntu','Arial';font-size:1.143em;color:rgba(255,255,255,0.8);">Hard work is key to success :)</span></p></div>

<div style="padding-top:30px;padding-left:200px;">

<div style="height:380px;width:85%;float:center;background-color:white;border-top: 10px solid rgba(0,203,203,1); "id="pd">
<div class="imgcontainer">
		<span style ="font-family:Times New Roman;color:black;font-size:28px">Employee Number:<?php echo $id;?></span>
        <span onclick="document.getElementById('edetails1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	    <label><b>Emplyee Id: <?php echo $id;?></b></label>
      <label><b>Name <?php echo $fname;?></b></label></br>
       <label><b>Age<?php echo $Age;?></b></label></br>
      
	  <label><b>Contact Details</b></label></br>
      <label><b>Phone Number:<?php echo $cont;?></b></label>
	  <label><b>Address:<?php echo $Add;?> </b></label>
	  
	  <!--label><b>Date of Joining:<?php echo $date;?></b></label-->
     
	  
	 
	  <label><h4>Salary:<?php echo $salary1;?></h4></label></br>
	  <label><h4>Total Hours worked:<?php echo $th1;?></h4></label>
	  <button onclick=p()>Projects Details</button>
	  </div>
	  </div>
	  </div>
	  <div style="padding-top:30px;padding-left:200px;">
	  <div style="height:380px;width:85%;float:center;background-color:white;border-top: 10px solid rgba(0,203,203,1);display:none; "id="ppd">
	  <button onclick=f()>Back</button>
	  <div class="table" style="padding-top:20px;float:right;">
	  
	  <div class="container">
  <h4>Project Details of  <?php echo $fname; ?></h4>
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Project</th>
        <th>Hours Worked</th>
        
      </tr>
    </thead>
	<tbody>
	<?php
	$res1 = mysqli_query($link,"select * from Project,Works_on where  Works_on.Project_ID = Project.Pro_ID  and Works_on.Emp_ID='EMP101'")
		or die("Failed to query database".mysqli_error());
		
;		while($row2 = mysqli_fetch_assoc($res1)){
			
		$Pname= $row2['Name'];
		$phour = $row2['Hrs_Worked'];
		$dur = $row2['Date_Of_End']; 
		$dur1 = $row2['Date_Of_Start']; 
		
		echo "<tr>
        <td>$Pname</td>
        <td>$phour</td>
       
      </tr>";
				

			
			
			
		}?>
    </tbody>
      
  </table>
</div>
</div>
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
