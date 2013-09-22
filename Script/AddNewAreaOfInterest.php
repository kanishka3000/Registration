<?php
session_start();
require_once("../class/AInterest.php");
if(isset($_REQUEST['aiid'])){
    $aid=$_REQUEST['aiid'];
    $aoi=$_REQUEST['aoi'];
    $description1=$_REQUEST['aoidesc'];
    $description=trim($description1);
    $aoin=new AInterest();
    $aoin->A_id=$aid;
    $aoin->Value=$aoi;
    $aoin->Desc=$description;
    $aoin->addNewAreaOfInterest();
    $_SESSION['aois']=serialize($aoin);
    
    header("location:../Confirmation/AddNewAreaOfInterest.php");
   // print_r($aoin);
}

?>
