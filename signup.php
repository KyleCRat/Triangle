<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<title>MSU Triangle Members</title>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.js" type="text/javascript"></script>


</head>

<body>
<div class="wrapper-non-home">

<div class="navbarContent-non-home">

<ul id="MenuBar1" class="MenuBarHorizontal">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="members.php">Members</a></li>
                  <li><a class="MenuBarItemSubmenu" href="#">Documents</a>
                    <ul>
                      <li><a href="governing_docs.html">Governing Documents</a></li>
                      <li><a href="minutes.html">Meeting Minutes</a></li>
                    </ul>
                  </li>
                  <li><a href="photos.php">Photos</a></li>
                  <li><a class="MenuBarItemSubmenu" href="#">Recruitment</a>
                    <ul>
                      <li><a href="information.html">Information</a></li>
                      <li><a href="signup.html">Sign-Up</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                  <li><a class="MenuBarItemSubmenu" href="#">About Us</a>
                    <ul>
                      <li><a href="triangle_history.html">Triangle History</a></li>
                      <li><a href="chapter_history.html">Chapter</a></li>
                      <li><a href="family.html">Family Lineage</a></li>
                    </ul>
                  </li>
                </ul>

</div>

<div class="containerTop">

    <div class="headder-container-non-home">
    
        <div class="banner">
        <div class="bannerimage">
        <img src="images/Headder-nobg.png"  />
        <!-- end .banner --></div>
        <!-- end .bannerimage --></div>
    
        <div class="headder">
        
            <div class="headder-left">
            
            <!-- end .headder-left --></div>
            
            <div class="headder-mid">
            
                <div class="navbar">
                
                
                
              </div>
            
            </div>
            
            <div class="headder-right">
        
        
        
            <!-- end .headder-right --></div>
        
        <!-- end .headder --></div>
    
    <!-- end .headder-container --></div>
    
    <div class="headderBottom-non-home">
    
    <!-- end .headderBottom--> </div>

<!-- end .containerTop --></div>

<div class="containerMid-non-home">

	<div class="contentTop-non-home">
    
    <!-- end .contentMidTop--></div>

    <div class="contentMid-non-home">
    
		<!-- PUT CONTENT HERE -->
        
        <div id="contentMid-non-home">


            
<div id="col">

<div id="header1">
<h1>Sign-Up Here</h1> <br  /> <br  /> <br  />
</div>

<style>
label { width: 150px; }
outter { width: 300px; }
</style>

<form style="color:white;font-family:CoGothic;text-align:center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="text/plain">
<outter> <label> First name: </label> <input type="text" name="firstname"> </outter> <br> <br>
<outter> <label> Last name: </label> <input type="text" name="lastname"> </outter> <br> <br>
<outter> <label> Major: </label> <input type="text" name="major"> </outter> <br> <br>
<outter> <label> Year: </label> <input type="text" name="year"> </outter> <br> <br>
<outter> <label> GPA: </label> <input type="text" name="gpa"> </outter> <br> <br>
<outter> <label> Phone: </label> <input type="text" name="phone"> </outter> <br> <br>
<outter> <label> Email: </label> <input type="text" name="email"> </outter> <br> <br>
<p><input type="submit" name="submit" value="Send" />
<input type="reset" name="reset" value="Clear Form" /></p>
<?
$fname =@$_GET['firstname'];
if($fname!=""){
$lname =@$_GET['lastname'];
$maj =@$_GET['major'];
$y =@$_GET['year'];
$g =@$_GET['gpa'];
$p =@$_GET['phone'];
$e =@$_GET['email'];
$myFile = "rush.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $fname);
fwrite($fh, ",");
fwrite($fh, $lname);
fwrite($fh, ",");
fwrite($fh, $maj);
fwrite($fh, ",");
fwrite($fh, $y);
fwrite($fh, ",");
fwrite($fh, $g);
fwrite($fh, ",");
fwrite($fh, $p);
fwrite($fh, ",");
fwrite($fh, $e);
fwrite($fh, "\n");

echo '<script type="text/javascript">alert("Thank You! We will be in contact soon!")</script>';
fclose($fh);}
?>

</form>

<br  /> <br  /> 
<h2>For More Information Contact: rush@msutriangle.org</h2>

            
		
		</div>
    
    <!-- end .contentMid--></div>
    
    <div class="contentBottom-non-home" style="top:60px;">
    
    <!-- end .contentBottom--></div>

<!-- end .containerMid--></div>

<!-- end .wrapper--></div>

<div class="footer">

<div class="containerFooter">

    <div class="footerContent">
    
    <div id="footerContent">
        
        	<div style="height: 100px; width: 350px; float:left">
            	<p id="footerHead">Contact Info:</p>
            	<p id="footerText">242 North Harrison Rd.<br /> East Lansing, MI, 48823 <br />248.332.3563</p>
            </div>
            
            <div style="height: 100px; width: 350px; float:left">
            	<p id="footerHead">Triangle MSU Resources:</p>
            	<a style="display:block" href="http://www.Triangle.org">Triangle Nationals</a>
                <a style="display:block" href="http://www.MSU.edu">Michigan State University</a>
            </div>
            
            <div style="position:relative; overflow: auto; width: 700px;">
            	<p id="footerText" style="font-size: 12px;">Designed by: Brother Kyle Ratliff; Coded By: Brother Kyle Ratliff and Brother Anthony Russel</p>
            </div>
        
        </div>
    
    <!-- end .footerContent--></div>
    
    <!-- end .footerContent--></div>

<!-- end .containerFooter--></div>

<!-- end .footer --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
