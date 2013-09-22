<?php
session_start();
require_once("class/Member.php");
require_once("class/AExpertise.php");
require_once("class/AInterest.php");
$member=unserialize($_SESSION['member']);

//print_r($member);
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
                <form method="POST" action="Script/EditMember2.php">
                <input type="hidden" name="submitte" value="true" />
                <table border="1" cellspacing="7">

                <tbody>
                <tr>
                    <td>National Identy Card No</td>
                    <td><?php
                        if($member){
                            echo $member->Nid;

                        }

                        ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" size="50" value="<?if($member){ echo $member->FName;}?>" /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname"size="50" value="<?if($member){ echo $member->LName;}?>" /></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" value="<?if($member){ echo $member->Title;}?>" /></td>
                </tr>
                <tr>
                    <td>Higest Qualification</td>
                    <td>
                        <span><?echo $member->HQualification."->"; ?></span>
                        <select name="hqual">
                            <?php
                            if(is_array($ques)){
                                echo "<option>$member->HQualification</option>";
                                foreach($ques as $que){
                                    echo "<option title=\"$que->Q_value--$que->Description\">$que->Q_id</option>";
                                }


                            }

                            ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" size="50" value="<?if($member){ echo $member->Address;}?>" /></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" value="<?if($member){ echo $member->City;}?>" /></td>
                </tr>
                <tr>
                    <td>Post Code</td>
                    <td><input type="text" name="pcode" value="<?if($member){ echo $member->PostCode;}?>" /></td>
                </tr>
                <tr>
                    <td>Address-Office</td>
                    <td><input type="text" name="oaddress" size="50" value="<?if($member){ echo $member->WAddress;}?>" /></td>
                </tr>
                <tr>
                    <td>City-Office</td>
                    <td><input type="text" name="ocity" value="<?if($member){ echo $member->WCity;}?>" /></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td><input type="text" name="telephone" value="<?if($member){ echo $member->Telephone;}?>" /></td>
                </tr>

                <tr>
                    <td>Email Address</td>
                    <td><input type="text" name="email" value="<?if($member){ echo $member->Email;}?>" title="email" /></td>
                </tr>
                <tr>
                    <td>University</td>
                    <td>
                        <?echo $member->University;?>

                        <select name="university" >

                            <?php
                            echo "<option>$member->University</option>";
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
                    <td>
                        <div>
                            <?
                            if(is_array($member->AreasOfInterest)){
                                foreach($member->AreasOfInterest as $ar){
                                    echo "$ar->A_id.$ar->Value--$ar->Desc<br/>";
                                }

                            }
                            ?>

                        ^                                       </div>
                        <br/>

                        <select name="aoi[]" size="4" multiple="multiple">
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
                <td>
                <div>
                <?
                if(is_array($member->AreaOfExpertise)){
                    foreach($member->AreaOfExpertise as $ar1){
                        echo "$ar1->AE_id.$ar1->Value--$ar1->Desc<br/>";
                    }

                }
                ?>

            ^                                       </div>

            

            <select name="aoe[]" size="4" multiple="multiple">

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
    <?
    $_SESSION['member']=serialize($member);?>
</body>
</html>








<!--new page-->
