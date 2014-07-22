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

<div id="middle">


<div id="graph">
<?php
    
    function cmp($a, $b)
  {
        if ($a['Seniority'] == $b['Seniority'])
    {
            return 0;
        }
        return ($a['Seniority'] > $b['Seniority']) ? -1 : 1;
    }


  
  function make_member($type, $member)
  {
  echo'       <table ' . ($type == 'single' ? 'style="padding:0;margin:0;width:300px;height:140px;opacity:1;border-spacing:0px;border:1px;' :
                       'style="padding:0;margin:0;width:300px;height:140px;opacity:1;border-spacing:0px;display:inline;border:1px none;float:left;') . '">
      <tr>
        <td>
          <img width=100px height=140px style="z-index:9990" src="MugShots/' . $member['First'] . $member['Last'] . '.jpg" alt="" />
        </td>
        <td>
          <table width="220" border="0">
            <tr>
              <td>
                <p id="p2">' . $member['Position'] . '</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>' . $member['First'] . ' ' . $member['Last'] . '</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><a style="font-size:-2px" href="mailto:' . $member['Email'] . '">' . $member['Email'] . '</a></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>' . $member['Major'] . '</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>' . $member['Initiated'] . '</p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>';
  }

    function member_table($members)
  {
    echo '<ul>';
      for ($i = 0; $i < count($members); $i++)
      {
        echo '
        <li style="list-style-type: none; display: inline;">
        ' . make_member('mult', $members[$i]) . '
        </li>';
      }
    echo '</ul>';
    }

    // Read .csv file containing member information


    $Members = file("Members/Members.csv");


    // Break apart line in to an array

    $Names = explode(',', $Members[0]);
    for ($i = 1; $i < count($Members); $i++)
    {
      $Members[$i] = explode(',', $Members[$i]);
      $Members[$i-1] = array();
      for ($j = 0; $j < count($Names); $j++) $Members[$i-1][trim(trim($Names[$j]),"\"")] = trim(trim($Members[$i][$j]),"\"");
    }
    array_pop($Members);

    // Sort members
    usort($Members, "cmp");
    $President = array();
    $ExecVP = array();
    $AdminVP = array();
    $Secretary = array();
    $Treasurer = array();

    $Actives = array();
    $Inactive = array();
    $Friends = array();
    $Pledges = array();
    $Alumni = array();

    for ($i = 0; $i < count($Members); $i++)
    {

      if ($Members[$i]['Member'] == 'president')
      {
        $President = $Members[$i];
      } else if ($Members[$i]['Member'] == 'executivevp')
      {
        $ExecVP = $Members[$i];
      } else if ($Members[$i]['Member'] == 'adminvp')
      {
        $AdminVP = $Members[$i];
      } else if ($Members[$i]['Member'] == 'secretary')
      {
        $Secretary = $Members[$i];
      } else if ($Members[$i]['Member'] == 'treasurer')
      {
        $Treasurer = $Members[$i];
      } else if ($Members[$i]['Member'] == 'active')
      {
        $Actives[] = $Members[$i];
      } else if ($Members[$i]['Member'] == 'pledge')
      {
        $Pledges[] = $Members[$i];
      } else if ($Members[$i]['Member'] == 'alumni')
      {
        $Alumni[] = $Members[$i];
      }else if ($Members[$i]['Member'] == 'friend')
      {
        $Friends[] = $Members[$i];
      }else if ($Members[$i]['Member'] == 'inactive')
      {
        $Inactive[] = $Members[$i];
      }

    }
echo '
<table style="width:100%;">';
echo '
  <tr>
    <td>
      <table style="width:100%;border:0px;">
        <tr>
          <td style="width:100%;"><center>
            <table style="width:320px;"><tr><td>
            </td></tr></table>
          </center></td>
        </tr>
        <tr>
          <td style="width:100%;"><center>'; 
            make_member('single', $President);
          echo '</center></td>
        </tr>
      </table>
      <table style="width:100%;">
        <tr>
          <td><center>';
            make_member('single', $ExecVP);
          echo '</center></td>
          <td><center>';
            make_member('single', $AdminVP);
          echo '</center></td>
        </tr>
        <tr>
          <td><center>';
            make_member('single', $Treasurer);
          echo '</center></td>
          <td><center>';
             make_member('single', $Secretary);
          echo '</center></td>
        </tr>
      </table>
    </td>
  </tr>';
echo '
<tr><td>';
member_table($Actives);
echo '</td></tr>';

//echo '<tr><td>';
//echo '<h1>Inactive</h1>';
//echo '</td></tr><tr><td>';
//member_table($Inactive);
//echo '</td></tr>';

echo '<tr><td>';
echo '<h1>Pledges</h1>';
echo '</td></tr><tr><td>';
member_table($Pledges);
echo '</td></tr>';

echo '<tr><td>';
echo '<h1>Recent Alumni</h1>';
echo '</td></tr><tr><td>';
member_table($Alumni);
echo '</td></tr>';

//echo '<tr><td>';
//echo '<h1>Friends</h1>';
//echo '</td></tr><tr><td>';
//member_table($Friends);
//echo '</td></tr>';



echo '</table>';
?>





</div>
</div>
<!-- End Middle Section Bar -->
    
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
