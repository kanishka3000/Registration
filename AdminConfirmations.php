<?php
session_start();
require_once("class/University.php");
require_once("class/AExpertise.php");
require_once("class/AInterest.php");
$un=new University();
$univsersities=$un->getAllUnconfirmedUniversities();
$_SESSION['unis']=serialize($univsersities);
$AI=new AInterest();
$Ais=$AI->getAllUnconfirmedInterest();
$_SESSION['aois']=serialize($Ais);
$AE=new AExpertise();
$AEs=$AE->getAllUnconfirmedExperties();
$_SESSION['aoes']=serialize($AEs);
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
                            <span class="news_date"><a href="Admin.php">Home</a></span><br />
                            <span class="news_date"><a href="AdminConfirmations.php">Confirmations</a></span> <br />

                            
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

                    <p class="body_text" align="justify">   <table border="0">

                            <tbody>
                                <tr>
                                    <td>Confirm University</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="1">
                                            <thead>
                                                <tr>
                                                    <th>University Id</th>
                                                    <th>University Name</th>
                                                    <th>Address</th>
                                                    <th>Contact No</th>
                                                    <th>Confirm</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>

                                            <?php

                                            if(is_array($univsersities)){



                                                foreach($univsersities as $university){
                                                    echo "<tr>";
                                                    echo "<td>$university->U_id</td>";
                                                    echo "<td>$university->U_Name</td>";
                                                    echo "<td>$university->Address</td>";
                                                    echo "<td>$university->Contact_id</td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=uni&task=confirm&val=$university->U_id\">confirm</a></td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=uni&task=remove&val=$university->U_id\">remove</a></td>";
                                                    echo "</tr>";

                                                }
                                            }else{
                                                echo "All confirmed";
                                            }


                                            ?>

                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Area of Interest</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="1">
                                            <thead>
                                                <tr>
                                                    <th>Identification</th>
                                                    <th>Area of Interest</th>
                                                    <th width="200">Description</th>
                                                    <th>Confirm</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>

                                            <?php

                                            if(is_array($Ais)){



                                                foreach($Ais as $Aises){
                                                    echo "<tr>";
                                                    echo "<td>$Aises->A_id</td>";
                                                    echo "<td>$Aises->Value</td>";
                                                    echo "<td>$Aises->Desc</td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=aoi&task=confirm&val=$Aises->A_id\">confirm</a></td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=aoi&task=remove&val=$Aises->A_id\">remove</a></td>";

                                                    echo "</tr>";

                                                }
                                            }else{
                                                echo "All confirmed";
                                            }


                                            ?>

                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Area of Expertise</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="1">
                                            <thead>
                                                <tr>
                                                    <th>Identification</th>
                                                    <th>Area of Interest</th>
                                                    <th width="200">Description</th>
                                                    <th>Confirm</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>

                                            <?php

                                            if(is_array($AEs)){



                                                foreach($AEs as $Aeses){
                                                    echo "<tr>";
                                                    echo "<td>$Aeses->AE_id</td>";
                                                    echo "<td>$Aeses->Value</td>";
                                                    echo "<td>$Aeses->Desc</td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=aoe&task=confirm&val=$Aeses->AE_id\">confirm</a></td>";
                                                    echo "<td><a href=\"Script/AdminConfirmations.php?type=aoe&task=remove&val=$Aeses->AE_id\">remove</a></td>";

                                                    echo "</tr>";

                                                }
                                            }else{
                                                echo "All confirmed";
                                            }


                                            ?>

                                        </table>
                                    </td>
                                </tr>>
                            </tbody>

                        </table>


                        <?php




                        ?>  </p>
                </div>
                <br />
                <br />
                <div class="footer">
                    <br />
                    <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | Your Company Name. Designed by <a href="http://www.winkhosting.com/">Wink Hosting</a>.
                </div>
            </div>
        </div>
    </body>
</html>










<!--new page-->

