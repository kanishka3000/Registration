<?php
session_start();
require_once("../class/AExpertise.php");
if(isset($_REQUEST['aiid'])){
    $aid=$_REQUEST['aiid'];
    $aoi=$_REQUEST['aoi'];
    $description1=$_REQUEST['aoidesc'];
    $description=trim($description1);
    $aoin=new AExpertise();
    $aoin->AE_id=$aid;
    $aoin->Value=$aoi;
    $aoin->Desc=$description;
    $aoin->addNewAreaOfExpertise();
    $_SESSION['aois']=serialize($aoin);

    header("location:../Confirmation/AddNewAreaOfExpertise.php");
   // print_r($aoin);
}

?>
