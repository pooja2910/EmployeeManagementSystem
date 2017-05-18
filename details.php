<!DOCTYPE html>
<?php
session_start();
$link = mysqli_connect("localhost:33060","root","1234","apurv");

$user="";

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$res = mysqli_query($link,"select * from Employee")
		or die("Failed to query database".mysqli_error());



		$row = mysqli_fetch_assoc($res);
		$id= $row['Emp_id'];
		$name = $row['Name'];
		$Age = $row['Age'];		


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
<script type="text/javascript" src="contactform.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Details
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
<body class="About-Us">
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

<li class="ttr_menu_items_parent dropdown active ">
	<a class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Settings</a>
<div class="dropdown" style="padding-top:50px;">
   
    <div  class="dropdown-content" >
	<span>Logged in as <?php echo $name; ?></span>
    <button onclick="getElementById('cpe').style.display='block'">Change Password</button>
    <a href="Message.html" >Message Client</a>
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
<header id="ttr_header">
<div id="ttr_header_inner">

<div class="html_content" style="padding-top:40px;"><p style="margin:0.36em 0em 0.36em 3.0em;text-align:center;;"><span style="font-family:'Georgia','Arial';font-size:3.286em;color:black;">Welcome</span><span style="font-family:'Georgia','Arial';font-size:3.286em;color:rgba(0,203,203,1);"> <?php echo $name;?>!!</span></p><p style="margin:0.36em 0em 0.36em 1.43em;text-align:Center;"><br style="font-family:'Ubuntu','Arial';font-size:1.143em;color:rgba(255,101,1,1);" /></p><p style="margin:0.36em 0em 0.36em 1.43em;text-align:Center;"><span style="font-family:'Ubuntu','Arial';font-size:1.143em;color:rgba(255,255,255,0.8);">Hard work is key to success :)</span></p></div>


<div class="ttr_headershape02" style="top:50px;height:450px;width:800px;background-color:#00CBCB;
background:rgba(0,203,203,0.5);">
<div class="html_content"><div id="id01" style="display:block;top:30px;left:30px;right:30px;"class="modal">
  <div  class="modal-content animate" style="height:390px;font-family:Georgia;color:red;">
  hye!! am po</br>
  <?php
  echo $id,$name,$Age;
  ?>
   </div>
	
</div></div>
</div>

</div>
</header>
<div id="ttr_page" class="container">
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_About-Us_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;text-align:Center;"><span style="font-family:'Roboto','Segoe UI';font-size:2.143em;color:rgba(52,52,52,1);">How We Work</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row1 row">
<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Roboto','Segoe UI';font-weight:700;font-size:1.429em;color:rgba(78,78,78,1);">Staff With Benifiet's</span></p><p style="margin:0em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.143em;color:rgba(105,105,105,1);">Mazim ea errem eleifend definitionem vim.</span></p><p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/62.jpg" style="max-width:1000px;max-height:666px;" /></span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
</div>
<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column11">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Roboto','Segoe UI';font-weight:700;font-size:1.429em;color:rgba(78,78,78,1);">Staff With Benifiet's</span></p><p style="margin:0em 0.36em 1.43em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.143em;color:rgba(105,105,105,1);">Mazim ea errem eleifend definitionem vim.</span></p><p style="margin:0em 0.36em 1.43em 0em;line-height:1.76056338028169;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/63.jpg" style="max-width:1000px;max-height:665px;" /></span></span><br style="font-family:'Open Sans','Segoe UI';font-size:1.143em;color:rgba(105,105,105,1);" /></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row2 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column20">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="line-height:1.76056338028169;"><span style="font-family:'Roboto','Segoe UI';font-size:1.429em;color:rgba(78,78,78,1);">Phasellus </span><span style="font-family:'Roboto','Segoe UI';font-weight:700;font-size:1.429em;color:rgba(0,203,203,1);">sollicitudin</span><span style="font-family:'Roboto','Segoe UI';font-size:1.429em;color:rgba(78,78,78,1);"> nisl posuere nibh fringilla dui gravida. </span></p><p style="margin:2.14em 0em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.071em;color:rgba(105,105,105,1);">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatlro vel euismod lobortis, mi metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing nequn congssa euismod quisscing elit.Ea mei nostrum imperdiet deterruisset, mei ludus effici. Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc possim. An eros argumentum vel, elit diceret duo&nbsp;&nbsp;quo et aliquid ornatus delicatissimi. Proin eu diam lorm, elerisque sapien.</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row3 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column30">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;font-size:1.143em;"><span style="font-family:'Roboto','Arial';font-size:2.143em;color:rgba(52,52,52,1);">Our Creative Team</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row4 row">
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column40">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/64.jpg" style="max-width:237px;max-height:305px;" /></span></span><br style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);">Cody Simmons</span></p><p style="margin:0.71em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';color:rgba(157,157,157,1);">Project Manager</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column41">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/65.jpg" style="max-width:237px;max-height:306px;" /></span></span><br style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);">Timothy Spray</span></p><p style="margin:0.71em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';color:rgba(157,157,157,1);">Art Director</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column42">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/66.jpg" style="max-width:237px;max-height:304px;" /></span></span><br style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);">Tonya Garcia</span></p><p style="margin:0.71em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';color:rgba(157,157,157,1);">Account Manager</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column43">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img class="ttr_uniform" src="images/67.jpg" style="max-width:237px;max-height:306px;" /></span></span><br style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';font-weight:700;font-size:1.143em;color:rgba(78,78,78,1);">Janee Lane</span></p><p style="margin:0.71em 0em 0em 0em;text-align:Center;"><span style="font-family:'Open Sans','Microsoft PhagsPa';color:rgba(157,157,157,1);">Business Development</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row5 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column50">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.48em 0em 0.48em 0em;text-align:Center;font-weight:700;font-size:1.333em;"><span style="font-family:'Roboto','Arial';font-weight:400;font-size:2.143em;color:rgba(255,255,255,1);">Join </span><span style="font-family:'Roboto','Arial';font-weight:400;font-size:2.143em;color:rgba(0,203,203,1);">307,026 </span><span style="font-family:'Roboto','Arial';font-weight:400;font-size:2.143em;color:rgba(255,255,255,1);">Happy Customers From World Wide</span></p><p style="margin:2.14em 0em 0.48em 0em;text-align:Center;font-size:1.143em;"><span style="font-family:'Open Sans','Arial';color:rgba(255,255,255,1);">We offer a 30 Day Money Back Guarantee, so joining is risk-free!</span></p><p style="margin:2.14em 0em 0.48em 0em;text-align:Center;font-size:1.143em;"><span><a HREF="#" target="_self" class="btn btn-sm btn-default">Get Now</a></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row6 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_About-Us_html_column60">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto','Segoe UI';font-size:2.143em;color:rgba(52,52,52,1);">Our News &amp; Evevnts</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_About-Us_html_row7 row">
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column70">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/68.jpg" style="max-width:500px;max-height:333px;" /></span></span><span style="font-family:'Roboto','Segoe UI';font-size:1.357em;color:rgba(78,78,78,1);">News with image</span></p><p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.071em;color:rgba(131,131,131,1);">Vivamus sodales quam sit nequtempor, nec aliquet urna sagittis. Etiam aliquet neque in libero pretium, eget pharetra.</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column71">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/69.jpg" style="max-width:500px;max-height:333px;" /></span></span><span style="font-family:'Roboto','Segoe UI';font-size:1.357em;color:rgba(78,78,78,1);">News with image</span></p><p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.071em;color:rgba(131,131,131,1);">Vivamus sodales quam sit anequtempor, nec aliquet urna sagittis. Etiam aliquet neque in libero pretium, eget pharetra.</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column72">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/70.jpg" style="max-width:500px;max-height:333px;" /></span></span><span style="font-family:'Roboto','Segoe UI';font-size:1.357em;color:rgba(78,78,78,1);">News with image</span></p><p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.071em;color:rgba(131,131,131,1);">Vivamus sodales quam sit anequtempor, nec aliquet urna sagittis. Etiam aliquet neque in libero pretium, eget pharetra.</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_About-Us_html_column73">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0.36em 0.36em 0em;"><span class="ttr_image" style="float:Left;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/71.jpg" style="max-width:500px;max-height:333px;" /></span></span><span style="font-family:'Roboto','Segoe UI';font-size:1.357em;color:rgba(78,78,78,1);">News with image</span></p><p style="margin:1.43em 0.36em 0.36em 0em;line-height:1.76056338028169;"><span style="font-family:'Open Sans','Segoe UI';font-size:1.071em;color:rgba(131,131,131,1);">Vivamus sodales quam sit anequtempor, nec aliquet urna sagittis. Etiam aliquet neque in libero pretium, eget pharetra.</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div style="clear:both">
</div>
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;"></div>
<footer id="ttr_footer">
<div class="ttr_footerAbout-Us_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_footerAbout-Us_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="margin:0em 0em 0.36em 0em;text-align:Center;"><br style="font-family:'Open Sans','Arial';font-size:1.786em;color:rgba(255,255,255,1);" /></p><p style="margin:0em 0em 0.36em 0em;text-align:Center;"><span style="font-family:'Roboto','Arial';font-size:1.786em;color:rgba(255,255,255,1);">Stay Connected With Us</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_footer_bottom_footer">
<div class="ttr_footer_bottom_footer_inner">
<div id="ttr_footer_designed_by_links">
<a href="http://templatetoaster.com" target="_self" >
Website
</a>
<span id="ttr_footer_designed_by">
Designed With TemplateToaster
</span>
</div>
<a href="http://www.facebook.com/TemplateToaster" class="ttr_footer_facebook" target="_self" >
</a>
<a href="http://www.templatetoaster.com"class="ttr_footer_linkedin" target="_self" >
</a>
<a href="http://twitter.com/templatetoaster"class="ttr_footer_twitter" target="_self" >
</a>
<a href="http://www.templatetoaster.com"class="ttr_footer_googleplus" target="_self" >
</a>
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
