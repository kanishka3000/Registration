<?php
session_start();
require_once("class/Member.php");
require_once("class/AExpertise.php");
require_once("class/AInterest.php");
require_once("class/University.php");
require_once("class/Qualification.php");
$AreoI=new AInterest();
$areOfIns=$AreoI->getAllAInterest();
//print_r($areOfIns);
$_SESSION['AI']=serialize($areOfIns);
$AreoE=new AExpertise();
$AreoEx=$AreoE->getAllExpertise();
$_SESSION['AE']=serialize($AreoEx);
$uni=new University();
$universities=$uni->getAllUniversities();
$qu=new Qualification();
$ques=$qu->getAllQualifications();
//print_r($AreoEx);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Aqua</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div id="companyname" align="left">Registration System</div>
			<div align="right" class="links_menu" id="menu"><a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> </div>
		</div>
		<br />
		<div id="content">
			<div id="leftpanel">
				<div class="table_top">
					<div align="center"><span class="title_panel">Tasks</span> </div>
				</div>
				<div class="table_content">
					<div class="table_text">
                        <span class="news_date"><a href="AddNewMember.php">Register a member</a></span> <br />
                        <span class="news_date"><a href="AddNewAreaOfExpertise.php">Add New Area Of Expertise</a></span><br />
                        <span class="news_date"><a href="AddNewAreaOfInterest.php">Add New Area Of Interest</a></span><br /><br />
                        <span class="news_more"><a href="AddNewUniversity.php">Add New University</a></span> <br />
						
					</div>
				</div>
				<div class="table_bottom">
					<img src="images/table_bottom.jpg" width="204" height="23" border="0" alt="" />
				</div>
				<br />
				<div class="table_top">
					<span class="title_panel">Links</span>
				</div>
				<div class="table_content">
					<div class="table_text">
						<span class="news_more"><a href="http://www.winkhosting.com">Wink Hosting </a></span><br />
						<span class="news_more"><a href="http://www.google.com">Google </a></span><br />
						<span class="news_more"><a href="http://www.oswd.org">OSWD</a></span><br />
						<span class="news_more"><a href="http://www.yahoo.com">Yahoo</a></span><br />
						<span class="news_more"><a href="http://www.amazon.com">Amazon</a></span><br />
					</div>
				</div>
				<div class="table_bottom">
					<img src="images/table_bottom.jpg" width="204" height="23" border="0" alt="" />
				</div>
				<br />
			</div>
			<div id="contenttext">
				
				<p class="body_text" align="justify">
                   <form method="POST" action="Script/AddNewMember.php">
            <input type="hidden" name="submitted" value="true" />
            <table border="1" cellspacing="7">

                <tbody>
                    <tr>
                        <td>National Identy Card No</td>
                        <td><input type="text" name="nid" value="" /></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="fname" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lname"size="50" value="" /></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input type="text" name="title" value="" /></td>
                    </tr>
                     <tr>
                        <td>Higest Qualification</td>
                        <td><select name="hqual">
                                <?php
                                if(is_array($ques)){
                                    foreach($ques as $que){
                                        echo "<option title=\"$que->Q_value--$que->Description\">$que->Q_id</option>";
                                    }


                                }

                                ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="city" value="" /></td>
                    </tr>
                    <tr>
                        <td>Post Code</td>
                        <td><input type="text" name="pcode" value="" /></td>
                    </tr>
                    <tr>
                        <td>Address-Office</td>
                        <td><input type="text" name="oaddress" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <td>City-Office</td>
                        <td><input type="text" name="ocity" value="" /></td>
                    </tr>
                    <tr>
                        <td>Telephone</td>
                        <td><input type="text" name="telephone" value="" /></td>
                    </tr>

                    <tr>
                        <td>Email Address</td>
                        <td><input type="text" name="email" value="" title="email" /></td>
                    </tr>
                    <tr>
                        <td>University</td>
                        <td><select name="university" >
                               <?php
                               if(is_array($universities)){
                                   foreach($universities as $university){
                                       echo "<option title=\"$university->U_Name\">$university->U_id</option>";
                                   }
                               }

                               ?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Area of Interest</td>
                        <td><select name="aoi[]" size="4" multiple="multiple">
                                <?php
                                if(is_array($areOfIns)){
                                    foreach($areOfIns as $aoe){
                                        echo "<option title=\"$aoe->Value--$aoe->Desc\">$aoe->A_id</option>";
                                    }

                                }
                                ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Area of Expertise</td>
                        <td><select name="aoe[]" size="4" multiple="multiple">

        <?php
        if(is_array($AreoEx)){
            foreach($AreoEx as $AE){
                echo "<option title=\"$AE->Value--$AE->Desc\">$AE->AE_id</option>";
            }
        }
        ?>
                        </select></td>
                    </tr>
                     <tr>
                         <td><input type="reset" value="Reset" name="Reset" /></td>
                         <td><input type="submit" value="Save" /></td>
                    </tr>



                </tbody>
            </table>







        </form>






                </p>
			</div>
			<br />
			<br />
			<div class="footer">
				<br />
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | University of Colombo School of Computing 2009
			</div>
		</div>
	</div>
</body>
</html>








<!--new page-->
